<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogroup extends Model
{

    public function meta()
    {

    		return $this -> belongsTo('App\Models\Meta');

    }
    
    public function videos()
    {

    	return $this -> hasMany('App\Models\Video', 'videogroup_id', 'id'); 

    }

    public function subvideogroups()
    {

    	return $this -> hasMany('App\Models\Subvideogroup', 'videogroup_id', 'id'); 

    }
}
