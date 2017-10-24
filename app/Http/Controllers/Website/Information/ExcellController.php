<?php

namespace App\Http\Controllers\Website\Information;

use App\Http\Request;

use App\Http\Controllers\Website\InformationController;

use Lang;

use Session;

use Excel;

use App\Models\Block;


class ExcellController extends InformationController
{
    
    public function __construct()
    {
        

    	parent::__construct();


    }

    public function index()
    {

    $data['rules'] = $this -> data['locale'] -> introduction -> rules -> toArray();

    $data['introduction'] = $this -> data['locale'] -> introduction -> toArray();

    $data['pages'] 		  = $this -> data['locale'] -> all_pages -> toArray() ;


	Excel::create('Filename', function($excel) use($data) {

    $excel->sheet('introduction', function($sheet) use($data) {

	
			 $sheet->fromArray( array( $data['introduction']) );

    });     

    $excel->sheet('rules', function($sheet) use($data) {

	foreach( $data['rules'] as $key => $value ){
			 $sheet->row(( $key + 1 ) , $value);
	}	

    });     

    $excel->sheet('pages', function($sheet) use($data) {

	foreach( $data['pages'] as $key => $value ){
			 $sheet->row(( $key + 1 ) , $value);
	}	

    }); 

})->export('xls');


    }    

    ///////////////////////////////////////////////////////

    protected function reverse_xss($array){

                    if(is_string($array)){

                        return htmlspecialchars_decode(trim($array));

                    }               

                    if(is_array($array)){

                        $result = array();

                        foreach($array as $key => $value){

                                $result[$key] = $this -> reverse_xss($value);
                        }

                        return $result;

                    }

                    return array(); 

        }


}
