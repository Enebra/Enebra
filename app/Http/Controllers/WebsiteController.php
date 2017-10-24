<?php

namespace App\Http\Controllers;

use Request;

use App\Models\Meta;

class WebsiteController extends Controller
{
    
    public function __construct()
    {

    		parent::__construct();

    		$this -> data['meta']		 = Meta::first();

            $this -> data['status']      = 'page ' ; 


    }
}
