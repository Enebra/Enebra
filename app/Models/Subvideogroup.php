<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subvideogroup extends Model
{
    public function videos()
    {

    	return $this -> hasMany('App\Models\Video', 'subvideogroup_id', 'id'); 

    }
}
