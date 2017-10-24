<?php

namespace App\Http\Controllers\Ajax\Social;


use Request;

use App\Http\Controllers\Ajax\SocialController;

use Lang;

use Validator;

use App\Models\Month;


class CheckController extends SocialController
{

	const MAP_URL = 'https://maps.googleapis.com/maps/api/geocode/json?';

	const KEY 	  = 'AIzaSyDuobmu5uxO3e-AsgdFVa2LoDA32fPagks';

	const TYPE    = 'country';

    public function __construct()
    {

    		parent::__construct();


    } 

    public function days()
    {

    	return  $this -> create_date( $this -> request['month'], $this -> request['year'] ) -> toJson();

    }

    public function countries()
    {

    		return file_get_contents(self::MAP_URL . 'key=' . self::KEY . '&result_type=' . self::TYPE . '&language=' . $this -> data['locale'] -> code . '&latlng=' . $this -> request['latlng'] );

    }

}
