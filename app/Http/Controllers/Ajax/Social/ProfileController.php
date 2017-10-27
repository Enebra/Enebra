<?php

namespace App\Http\Controllers\Ajax\Social;

use Lang;

use Request;

use Response;

use Validator;

use Carbon\Carbon;

use App\Models\User;

use App\Models\User_follower;

use App\Http\Controllers\Ajax\SocialController;

class ProfileController extends SocialController
{
    

    public function __construct()
    {

    		parent::__construct() ;

    }

    public function index()
    {

        $validator = $this -> validate_fields();

        if( $validator !== true )
            return $validator;

        User::whereId( $this -> data['user'] -> id )->update( $this -> request );


        return response() -> json( Lang::get('app.saved') );

        

    }

    public function follow( $id ) 
    {	
    	if( $id == $this -> data['user'] -> id )
    			return response() -> json( false, self::AJAX_ERROR_CODE ) ;

    	User_follower::follow( $id, $this -> data['user'] -> id);

    	return response() -> json( true ) ;

    }    


    public function unfollow( $id ) 
    {	


    	User_follower::unfollow( $id, $this -> data['user'] -> id);

    	return response() -> json( true ) ;

    }


    private function validate_fields()
    {

        // check all fields

        $validator = Validator::make( $this -> request,

            array(
                'nationality'    => 'required|exists:countries,id',

                'firstname'	   	 => 'required|min:2',

                'firstname_en'	 => 'required|min:2',

                'lastname'  	 => 'required|min:2',

                'lastname_en'	 => 'required|min:2',

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

            )
        ) ;


        if ($validator->fails())
            return response()->json($validator->messages(), static::AJAX_ERROR_CODE );

        return true ;

    }

}
