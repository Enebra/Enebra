<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function meta()
    {

    		return $this -> belongsTo('App\Models\Meta');

    }

    public static function call( $slug )
    {

        return self::whereSlug( $slug ) -> whereOriginal( 1 ) -> firstOrFail();
    }

    public function summ_views( $slug )
    {

    	$this -> increment('views');

    	return ceil( $this-> where('slug', $slug ) -> sum('views')  );
    }

    public function purposerules()
    {

    		return $this -> hasMany('App\Models\Purposerule'); 

    }


    public function blocks()
    {

    		return $this -> hasMany('App\Models\Block'); 

    }

    public function left_punkts()
    {

    		return $this -> hasMany('App\Models\Punkt') -> where( 'column', 0 ); 

    }    

    public function right_punkts()
    {

    		return $this -> hasMany('App\Models\Punkt') -> where( 'column', 1 ); 

    }

    public function sections()
    {

    	return $this -> hasMany('App\Models\Section');

    }

    public function picture()
    {  

    	return $this -> belongsTo('App\Models\Picture');

    }

    public function questions()
    {

    	return $this -> hasMany('App\Models\Question');

    }    

    public function phases()
    {

    	return $this -> hasMany('App\Models\Phase');

    }

}

