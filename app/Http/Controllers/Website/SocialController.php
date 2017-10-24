<?php

namespace App\Http\Controllers\Website;


use Request;

use App\Http\Controllers\WebsiteController;

use Redirect;

abstract class SocialController extends WebsiteController
{

	const REDIRECT_ERROR  = '/';
	
    public function __construct()
	{

		parent::__construct();
			
        if( !$this -> auth )
            Redirect::to(self::REDIRECT_ERROR) -> send() ;

	}
}
