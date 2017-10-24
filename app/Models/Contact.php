<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    public static function insert_message( $request )
    {

    		self::insert([

    						'name'		=> $request['name'],

    						'email'		=> $request['email'],

    						'message'	=> $request['message']

    					]);

    }
}
