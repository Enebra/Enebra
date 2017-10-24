<?php

namespace App\Http\Controllers\Ajax\Information;

use Request;

use App\Http\Controllers\Ajax\InformationController;

use Lang;

use Validator;

use App\Models\User;

use App\Models\User_block;

use App\Models\Type;


class ParticipantsController extends InformationController
{
    
    public function __construct()
    {

    	parent::__construct();

    	$this -> data['types'] = Type::all();

    }

    public function index()
    {

    	$this -> data['participants'] = User::filter_participants( $this -> request ) ;

    	return view($this -> data['information'] . '.modules.participants',  $this -> data )  ;

    }

    public function statistic()
    {

        return response() -> json( $this -> create_response( User_block::all() ) ) ;

    }

    private function create_response( $blocks )
    {

            $result = array();

            foreach ($blocks  as $key => $block) 
                    $result[] = array( $block -> created_at -> format('Y-m-d'), $block -> count);

        return $result;

    }



}
