<?php

namespace App\Http\Controllers;

use Request;

use Image;

use App\Models\Month;

use App\Models\Picture;

use File;

abstract class AjaxController extends Controller
{
    

    const AJAX_ERROR_CODE = 422;

    public function __construct()
    {

    		parent::__construct();

    }


    public function create_date( $month, $year )
    {
    	$days = Month::call( $month ) ;

    	if( $days -> feb === 1 ){

    				if( ( $year - ( self::START_YEAR - 100 ) )  % 4  == 0 )
    							$days -> days += 1;
    	}

    	return $days ;

    }

    /////////////////////////////////////////////////////////////////

        protected function filename($file){


        $format = explode(".", $file ->getClientOriginalName());

        $format = array_reverse( $format ) ;

    
        if(empty($format[0]))       
                    return false;

        $filename = md5( microtime() ) .".".$format[0];

        return $filename;


    }


/////////////////////////////////////////////////////////////////////////////////////////


    protected function upload_file($file, $filename){

        $file -> move( env('UPLOAD_PATH_TMP') , $filename);

        return  true ;

    }


    ///////////////////////////////////////////////////////////////////////////////////

    protected function resize($filename, $width = 250){

        File::move( public_path( env('UPLOAD_PATH_TMP') . $filename )  , public_path( env('UPLOAD_PATH') . $filename ) ) ;
      
        Image::make( env('UPLOAD_PATH') . $filename)->widen($width)->save(env('UPLOAD_PATH_THUMB') .$filename);

        return Picture::insert_picture( $filename );

    }

}
