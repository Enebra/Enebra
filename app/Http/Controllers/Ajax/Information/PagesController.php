<?php

namespace App\Http\Controllers\Ajax\Information;

use Request;

use App\Http\Controllers\Ajax\InformationController;

use Lang;

use Validator;

use App\Models\Answer;


class PagesController extends InformationController
{
    
    public function __construct()
    {

    	parent::__construct();

    }

    public function index()
    {

    	Answer::increment_view( $this -> request['id'] );

    	return json_encode( true ) ;

    }


}
