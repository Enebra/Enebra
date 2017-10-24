<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    public static function get_ids()
    {
    	return self::select('id')->get();
    }

}
