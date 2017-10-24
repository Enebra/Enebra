<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Score;

class Publication extends Model
{
    

    public function user()
    {

    	return $this -> belongsTo('App\Models\User');

    }

    public function picture()
    {

    	return $this -> belongsTo('App\Models\Picture');

    }

/*
|    members start
*/
    public function members()
    {

    		return $this -> hasMany('App\Models\Publication_connect_user');

    }

    public function good()
    {

            return $this -> members() -> whereGood(1);
    }    

    public function bad()
    {

            return $this -> members() -> whereBad(1);
    }

    public function scores()
    {
            $divisor = $this -> good() -> count() +  $this -> bad() -> count() ; 
            
            if( $divisor == 0 )
                return $divisor;

            $scores = $this -> good() -> count() / $divisor;

            foreach (Score::all() as $score){
                if($scores < $score -> max && $scores >= $score -> min)
                       return  $score -> score;
            }

        return $divisor;   
        

    }

/*
|   members end
*/

    public function views()
    {
            return $this -> hasMany('App\Models\Publication_view');
    }

    public function country()
    {

            return $this -> belongsTo('App\Models\Country');

    }

    public function sector()
    {

            return $this -> belongsTo('App\Models\Sector');

    }    

    public function specialization()
    {

            return $this -> belongsTo('App\Models\Specialization');

    }

    public function co_authors()
    {

            return $this -> hasMany('App\Models\Co_author');

    }

    public function comments()
    {

            return $this -> hasMany('App\Models\Comment');

    }


}
