<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    
		public function picture()
		{

			return $this -> belongsTo('App\Models\Picture');

		}

}
