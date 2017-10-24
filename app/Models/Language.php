<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    

    public static function all_languages( $id )
    {

    		return self::where( 'id', '<>', $id ) -> get();

    }

    public function videogroups()
    {

    	return $this -> hasMany('App\Models\Videogroup');

    }

    public static function set_language( $slug )
    {

            $language = self::where( 'slug', $slug ) -> first();

            if( ! $language )
                    $language = self::first();

            return $language ;

    }

    public function pages()
    {

        return $this -> hasMany('App\Models\Page') -> where( 'menu', 1 );

    }        

    public function page( $slug )
    {

        return $this -> hasOne('App\Models\Page') -> where( 'slug', $slug ) -> firstOrFail();

    }    

    public function term()
    {

        return $this -> hasOne('App\Models\Term') ;

    }

    public function index_pages()
    {

        return $this -> hasMany('App\Models\Page') -> where( 'index', 1 ) -> orderBy('sort', 'ASC');

    }    

    public function all_pages()
    {

        return $this -> hasMany('App\Models\Page');

    }

    public function video_group( $slug )
    {

        return $this -> hasOne('App\Models\Videogroup') -> where('slug', $slug ) -> firstOrFail();

    }

    public function introduction()
    {

            return $this -> hasOne('App\Models\Introduction');

    }

    public function actionsections()
    {

            return $this -> hasMany('App\Models\Actionsection');

    }


}
