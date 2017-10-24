<?php

namespace App\Http\Controllers\Website\Information;

use App\Http\Request;

use App\Http\Controllers\Website\InformationController;

use Lang;

use App\Models\Language;

use App\Models\Page;

use PDF;

class PagesController extends InformationController
{

	public function __construct()
	{

		return parent::__construct();


	}

	public function index( $slug, $pdf = null )
	{
		
		if( $pdf === 'original')
			$this -> data['page'] = Page::call( $slug ) ;
		else
			$this -> data['page'] = $this -> data['locale'] -> page( $slug ) ;


		$this -> data['all_languages'] = Language::all();

		$this -> data['meta'] = $this -> data['page'] -> meta;

		if($pdf === 'pdf')		
				return PDF::html($this -> data['information'] . '.pages.' . $slug, $this -> data);
		

		return view( $this -> data['information'] . '.pages.' . $slug, $this -> data ) ;



	}

    
}
