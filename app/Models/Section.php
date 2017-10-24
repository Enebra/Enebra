<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    
    public function subsections()
    {

    	return $this -> hasMany('App\Models\Subsection') ;

    }
}
