<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referal extends Model
{
    	
	public static function insert_referal( $referal, $user )
	{

		return self::insertGetId(['parent_id' => $referal, 'user_id' => $user ]);

	}
}
