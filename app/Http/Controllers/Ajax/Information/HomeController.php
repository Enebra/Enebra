<?php

namespace App\Http\Controllers\Ajax\Information;

use Request;

use App\Http\Controllers\Ajax\InformationController;

use App\Models\Language;

use Session;

class HomeController extends InformationController
{
    
    public function __construct()
    {

    	parent::__construct() ;


    }

    /* selsect language */

    public function language()
    {

        $this -> locale( $this -> request['slug'] ) ;
    	
    	return 	json_encode(true);

    }

    /* increment view */

    public function increment()
    {

        $this -> data['locale'] -> term -> increment_view() ;
    	
    	return 	json_encode(true);

    }


}
