<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    
    public static function insert_picture( $filename )
    {

    	return self::insertGetId(['name' => $filename ]);

    }

    	public function image()
    {
        return '/uploads/pictures/' . $this->name ;
    }
    
    public function thumb()
    {
        return '/uploads/thumbs/' . $this->name;
    }

    public function publication()
    {

         return '/uploads/publications/' . $this->name;

    }

    public function bg()
    {

         return '/uploads/backgrounds/' . $this->name;

    }

}
