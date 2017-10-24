<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New_publication extends Model
{
    
	public function publication()
	{
		return $this -> belongsTo('App\Models\Publication');
	} 

	

}
