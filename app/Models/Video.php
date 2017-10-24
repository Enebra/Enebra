<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    public function picture()
    {

    	return $this -> hasOne('App\Models\Picture', 'id', 'picture_id');

    }
}
