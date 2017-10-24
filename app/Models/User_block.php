<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_block extends Model
{
    

    public static function insert_info( $counter )
    {

    		return self::insertGetId(['count' => $counter]);

    }
}
