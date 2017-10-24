<?php

namespace App\Http\Controllers\Ajax;

use Request;

use App\Http\Controllers\AjaxController;


abstract class SocialController extends AjaxController
{

    const REDIRECT_ERROR  = '/';
    
    public function __construct()
    {

    	parent::__construct();

        if( !$this -> auth )
            Redirect::to(self::REDIRECT_ERROR) -> send() ;


    }


}
