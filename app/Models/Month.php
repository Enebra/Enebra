<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    

    public static function call( $id )
    {

    	return self::where('id', $id ) -> firstOrFail();
    }
}
