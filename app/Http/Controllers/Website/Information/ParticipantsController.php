<?php

namespace App\Http\Controllers\Website\Information;

use App\Http\Request;

use App\Http\Controllers\Website\InformationController;

use Lang;

use App\Models\Language;

use App\Models\Type;


class ParticipantsController extends InformationController
{

	public function __construct()
	{

		parent::__construct();

		$this -> data['page'] = 'page';

    	$this -> data['types'] = Type::all(); 


	}

	public function index( )
	{
		$this -> data['meta'] -> title = Lang::get('participants.title');

		return view( $this -> data['information'] . '.pages.participants', $this -> data ) ;



	}

    
}
