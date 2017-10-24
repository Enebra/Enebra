<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    
    public static function insert_check( $user )
    {

    		self::insert([ 'user_id' => $user -> id, 'session' => $user -> session_id ]);

    }

    public static function get_user( $id, $session_id )
    {

    	return self::where('user_id', $id ) -> where( 'session', $session_id ) -> first() ;

    }


    public function user()
    {

    	return $this -> belongsTo('App\Models\User') ;

    }
}
