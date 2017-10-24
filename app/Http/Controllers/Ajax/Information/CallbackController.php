<?php

namespace App\Http\Controllers\Ajax\Information;

use Request;

use App\Http\Controllers\Ajax\InformationController;

use Lang;

use Validator;

use App\Models\Subscribe;

use App\Models\Contact;

class CallbackController extends InformationController
{
    
    public function __construct()
    {

    	parent::__construct();

    }

    public function subscribe()
    {

    	$validator = Validator::make( $this -> request,

    					array( 'email'	=> 'required|email|unique:subscribes,email' )

				  		) ;

  		if ($validator->fails())
            return response()->json($validator->messages(), static::AJAX_ERROR_CODE );

        Subscribe::insert_email($this -> request );

        return json_encode(Lang::get('validation.success_subscribe'));
			
    }


   public function contact()
    {	

    	   $validator = Validator::make( $this -> request,

    					array( 
    							'name'    => 'required|min:2',

    							'email'	  => 'required|email',

    							'message' => 'required|min:10',

    						 )
				  		) ;
 
  		
  		if ($validator->fails())
            return response()->json($validator->messages(), static::AJAX_ERROR_CODE );

        Contact::insert_message($this -> request );

        return json_encode(Lang::get('validation.success_contact'));

    }
}
