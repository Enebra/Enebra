<?php

namespace App\Http\Controllers\Website\Social;

use App\Http\Controllers\Website\SocialController;

use Request;

use Lang;

use View;

use Carbon\Carbon;

use App\Models\Type;  



class FeedController extends SocialController
{
    

    public function __construct()
    {

    		parent::__construct() ;

    		$this -> data['types'] = Type::all(); 

    }

    public function index()
    {
    		
    	return View::make( self::SOCIAL . '.pages.feed', $this -> data )  -> render();
    }
}
    