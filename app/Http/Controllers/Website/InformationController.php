<?php

namespace App\Http\Controllers\Website;

use App\Http\Request;

use App\Http\Controllers\WebsiteController;

use App\Models\Language;

use App\Models\Social;


abstract class InformationController extends WebsiteController
{
    public function __construct()
	{

		parent::__construct();

    	$this -> data['languages']   = Language::all_languages( $this -> data['locale'] -> id ); 

        $this -> data['socials']     = Social::all(); 


	}
}
