<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    

    public static function insert_email( $request )
    {

    	self::insert( ['email' => $request['email']] ) ;

    }
}
