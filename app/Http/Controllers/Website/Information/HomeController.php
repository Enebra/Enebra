<?php

namespace App\Http\Controllers\Website\Information;

use App\Http\Request;

use App\Http\Controllers\Website\InformationController;

use Lang;

use Session;

class HomeController extends InformationController
{
    
    public function __construct()
    {
        

    	parent::__construct();


    }

    public function index()
    {

        $this -> data['status'] = ' ';

    	return view( $this -> data['information'] . '.index', $this -> data );

    }    

    public function downloads()
    {


    	return view( $this -> data['information'] . '.pages.downloads', $this -> data );

    }
}
