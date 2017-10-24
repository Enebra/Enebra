<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    
    public static function increment_view( $id )
    {

    	self::whereId(  $id ) -> increment('views');

    }

    public  function get_views( )
    {
    	$this -> increment('views');

    	return ceil( $this -> sum('views')  );

    }
}
