<?php

namespace App\Http\Controllers\Website\Information;

use App\Http\Request;

use App\Http\Controllers\Website\InformationController;

use Lang;


class VideosController extends InformationController
{
    
		public function __construct()
		{

				parent::__construct();

				$this -> data['status'] = 'page ';

		}

		public function index( $slug )
		{

			$this -> data['video_group'] = $this -> data['locale'] -> video_group( $slug )  ;

			$this -> data['meta']		 = $this -> data['video_group'] -> meta ;

			$this -> data['status']		 .= " " . $slug ; 

			return view( $this -> data['information'] . '.videos.list',  $this -> data ) ;

		}

}
