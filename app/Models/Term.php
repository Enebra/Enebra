<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    
    public function summ_views( )
    {

    	return ceil( $this -> sum('views')  );
    }

    public function increment_view()
    {

    	$this -> increment('views');

    }


}
