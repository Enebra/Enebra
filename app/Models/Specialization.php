<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    
    public function subsector()
    {

    	return $this -> belongsTo('App\Models\Subsector');

    } 
}
