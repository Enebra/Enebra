<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Routing\Controller as BaseController;

use App;

use Session;

use App\Models\Language;

use Lang;

use App\Models\Check;


abstract class Controller extends BaseController
{


    const  START_YEAR           =  2016;

    const INFORMATION           = 'information';

    const SOCIAL                = 'social';

    const ACCOUNT               = 'account';
    
	protected $request = array();

    protected $data    = array(

                               'timeformat'         =>  'Y-m-d H:i:s',

                               'dateformat'         =>  'Y-m-d',

                               'register_format'    => 'Y.m.d'
                              
                              );

    protected $auth    = false; 

	public function __construct()
	{

        
        $this -> data['information'] = self::INFORMATION;

        $this -> data['social']      = self::SOCIAL;

        $this -> data['account']     = self::ACCOUNT;

        $this -> check_auth();

        $this -> data['auth'] = $this -> auth;

        $this -> set_locale();

		$this -> request = $this -> xss( Request::all() ) ;


	}

    ///////////////////////////////////////////////////////

    protected function xss($array){

                    if(is_string($array)){

                        return htmlspecialchars(trim($array));

                    }               

                    if(is_array($array)){

                        $result = array();

                        foreach($array as $key => $value){

                                $result[$key] = $this -> xss($value);
                        }

                        return $result;

                    }

                    return array(); 

        }

    //////////////////////////////////////////////////////

    protected function password_hash( $password )
    {

        return password_hash( $password , PASSWORD_BCRYPT);
    
    }

    //////////////////////////////////////////////////////

    protected function hash($string)
    {

        return $this -> xss( md5( sha1( $string ) ), '$%^&*()_7' ) ;

    }

    protected function locale( $slug ){
       
       $locale = Language::set_language( $slug ) ;

       Session::put( 'locale', $locale -> slug );


    }

    protected function set_locale()
    {
        
        if( Session::has('locale') )
            $this -> data['locale'] = Language::set_language( Session::get('locale') );
        else 
            $this -> data['locale'] = Language::first();


        App::setLocale( $this -> data['locale'] -> slug ) ;

    }

    private function check_auth()
    {

        if( Session::has('id') && Session::has('session_id') )
        {
            
            $this -> data['user'] = Check::get_user( Session::get('id'), Session::get('session_id') )  ;

            $this -> data['user'] = $this -> data['user'] -> user;

            if( !empty ( $this -> data['user'] ) ){
                
                $this -> auth =  true; 
                
                Session::put( 'locale', $this -> data['user'] -> language -> slug );
            }
                    
        }

    }

   
}
