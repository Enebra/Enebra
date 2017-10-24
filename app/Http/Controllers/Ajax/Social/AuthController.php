<?php

namespace App\Http\Controllers\Ajax\Social;


use Request;

use App\Http\Controllers\AjaxController;

use Lang;

use Validator;

use Carbon\Carbon;

use App\Models\User;

use App\Models\Check;

use App\Models\Referal;

use Session;

use Image;

use File;


class AuthController extends AjaxController
{
    	
    	public function __construct()
    	{

    		parent::__construct();


    	}



    	public function signup()
    	{
    		$validator = $this -> validate_fields();

    		if( $validator !== true )
    				return $validator;

            if( !Session::has('avatar') )            
                    return response()->json( ['avatar' => Lang::get('validation.avatar') ], static::AJAX_ERROR_CODE );

           $this -> request['picture_id'] = $this -> resize( Session::get('avatar') );

            $user =  User::insert_user( $this -> create_request( $this -> request ) ) ; 

            if( Session::has('referal') )
                User::update_referal( $user -> id , Referal::insert_referal( Session::get('referal') , $user -> id ) ) ;

            $user -> add_active();

    		$this -> create_session( $user );

    		return json_encode( Lang::get('validation.success_signup') ) ;


    	}







        // signin

        public function signin()
        {

        $user = User::auth( $this -> request['login']  );

        if( !empty( $user ) && password_verify( $this -> request['password'], $user -> password ) ){
            
            $this -> create_session( $user ); 
            
            return json_encode( true ) ;
        }  
        
        return response()->json( ['empty_user' => Lang::get('validation.empty_user') ], static::AJAX_ERROR_CODE );

        }




    public function avatar()
    {

        $filename = $this -> filename(Request::file('file'));

        $this -> upload_file(Request::file('file'), $filename );

        Session::put('avatar', $filename );

    } 


        public function logout()
        {
          
            Session::forget('id');

            Session::forget('login');
                
            return json_encode( true );
        }

        public function referal( $link )
        {

            $referal = User::referal( $link );

            if( !empty( $referal ))
                        Session::put('referal', $referal -> id );

            return redirect( asset('') ) ;

        }


    ///////////////////////////////////////////////////////////////////////////////





    private function validate_fields()
    {

    		// check all fields 

    	   $validator = Validator::make( $this -> request,

    					array( 
    							'nationality'    => 'required|exists:countries,id',

    							'firstname'	   	 => 'required|min:2',

    							'lastname'	 	 => 'required|min:2',

    							'sex'			 => 'required|integer|between:1,2',

    							'country'    	 => 'required|exists:countries,id',

    							'birthday'		 => 'required|integer|between:1,31',
								
								'birthmonth' 	 => 'required|integer|between:1,12',
								
								'birthyear'		 => 'required|integer|between:'.(Carbon::now() -> year - 100).','.Carbon::now()-> year ,

								'document_id'	 => 'required|exists:documents,id',

								'document'	 	 => 'required',    							

								'dateday'		 => 'required|integer|between:1,31',
								
								'datemonth' 	 => 'required|integer|between:1,12',
								
								'dateyear'		 => 'required|integer|between:'.(Carbon::now() -> year - 100).','.Carbon::now()-> year ,

								'phone'			 => 'required',
								
								'email'			 => 'required|email|unique:users,email',
								
								'login'			 => 'required|unique:users,login',
								
								'password'		 => 'required|min:8',
								
								'confirm'		 =>  'required'
    						 )
				  		) ;

    
  	if ($validator->fails())
        return response()->json($validator->messages(), static::AJAX_ERROR_CODE );

    //check english fields

    if( $this -> data['locale'] -> id != 1 )
        $validator = Validator::make( $this -> request, array('firstname_en' => 'required|min:2','lastname_en' => 'required|min:2',)) ;

  	if ($validator->fails()) 
        return response()->json($validator->messages(), static::AJAX_ERROR_CODE );

    // check password

	if( $this -> request['password'] != $this -> request['confirm'] )
			return response()->json(['confirm' => Lang::get('validation.custom.confirm.not_conformity')], static::AJAX_ERROR_CODE );

    return true ;

    }





    // create request

    private function create_request( $data )
    {
    		$data['language_id'] = $this -> data['locale'] -> id ;

			$data['password'] = $this -> password_hash($data['password']);

			$data['referal_link'] = $this -> hash( $data['login'] ) . $this -> hash( $data['email'] ) ;

			if( $data['language_id'] == 1 ){

                        $data['firstname_en'] = $data['firstname']; 
                        
                        $data['lastname_en'] = $data['lastname'];   
            }

			unset($data['confirm']);

			return $data;
    }





    // create session

    private function create_session( $user )
    {		
    		$user -> session_id =  $this -> hash( time() );

    		session( ['id' => $user -> id, 'session_id' => $user -> session_id ] );

    		Check::insert_check( $user );

    		return true ;

    }
}
