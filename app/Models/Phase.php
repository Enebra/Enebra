<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    public function sectionpuncts( $section_id )
    { 

    	return $this -> hasMany('App\Models\Sectionpunct') -> where('actionsection_id', $section_id ) -> get();

    }
} 
