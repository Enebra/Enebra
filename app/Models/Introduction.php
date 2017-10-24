<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    
    public function rules()
    {

    	return $this -> hasMany('App\Models\Rule');

    }
}
