<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class User extends Model
{
    
    const FOLLOWERS     = 5;

    const PARTICIPANTS = 20;

    protected $dates = ['created_at'];

    public static function insert_user( $data )
    {

    	$id = self::insertGetId( $data );

    	return self::call( $id );

    }

    public static function call( $id )
    {

    	return self::whereId( $id ) -> firstOrFail() ;
    }

    public function language()
    {

    	return $this -> belongsTo('App\Models\Language') ;

    }

    public static function auth( $login )
    {

        return self::where('login', $login ) -> first() ;
        
    } 
    public static function referal( $link )
    {

        return self::select( 'id' ) -> where( 'referal_link' , $link ) -> first();

    }    

    public static function update_referal( $id, $ref )
    {

        return self::where( 'id' , $id ) -> update([ 'referal_id' => $ref ]);

    }

    public function picture()
    {

        return $this -> belongsTo('App\Models\Picture');

    }

    public function background()
    {

        return $this -> belongsTo('App\Models\Picture', 'bg_id', 'id');

    }

    public function server()
    {

        return $this -> hasOne('App\Models\Server');

    }

    public function new_publications( $type_id = null)
    {

        $request = $this -> hasMany('App\Models\New_publication');

            if( $type_id !== null)
                  $request -> where('type_id', $type_id );

        $request -> orderBy('id', 'DESC');

        return $request;

    }

    public function publications( $type_id = null )
    {

        $request = $this -> hasMany('App\Models\Publication');

            if( $type_id !== null)
                  $request -> where('type_id', $type_id );

        $request -> orderBy('id', 'DESC');

        return $request;

    }

    public function publications_scores(  $type_id )
    {

       $scores = $this -> publications(  $type_id ) -> sum( 'scores' ) ;

                if( $scores != null )
                    return $scores;

        return 0;

    }

    /*
    |  followers 
    */

    public function followers()
    {

        return $this -> hasMany('App\Models\User_follower');

    }

    public function module_followers()
    {

            return $this -> followers -> take( self::FOLLOWERS ) ;
    
    }

    public function is_follower( $id )
    {

            return $this -> hasOne('App\Models\User_follower') -> where( 'follower_id', $id ) -> count() ;

    }

    /*
    | endfollowers
    */

    public function specializations()
    {

            return $this -> hasMany('App\Models\User_specialization');

    }

    public static function participants()
    {

            return self::take(self::PARTICIPANTS)->orderBy('created_at', 'ASC')->get();

    }

    public static function active_users()
    {
       return  self::where('active_to', '>', Carbon::now() ) -> select('id') -> get();
    }

    public function add_active()
    {
        
            self::whereId( $this -> id )->update(['active_to' => Carbon::now() -> addMonth()]) ;

    }

    /*
    |   search request
    */

    public static function filter_participants( $data )
    {

            $request = self::take(self::PARTICIPANTS) ;

            if( !empty( $data['skip'] ) && intval( $data['skip'] ) >=0  )
                    $request -> skip( $data['skip'] ); 


            if( !empty( $data['country_id'] ) )
                    $request -> whereCountry( $data['country_id'] ) ;

 
            if( isset( $data['has_server'] ) )
                  $request -> whereHas_server( $data['has_server'] ) ;

            if( !empty( $data['q']))
            {

                $requests = explode(' ', $data['q']);

                        foreach ($requests as $key => $value){
                        

                    $request -> where(function( $query ) use($value){

                                $query -> where('firstname', 'like',  $value . "%")

                                       -> orWhere('lastname', 'like',  $value . "%")

                                       -> orWhere('firstname_en','like', $value . "%")
                                       
                                       -> orWhere('lastname_en','like',  $value . "%");
                    });
                    
                        }
            }

            if( !empty( $data['publications'] ) )
                    $request -> orderBy($data['publications'], 'DESC');

            if( !empty( $data['lastname'] ) )
                    $request -> orderBy('lastname', $data['lastname']);

            if( !empty( $data['created_at'] ) )
                    $request -> orderBy('created_at', $data['created_at']);

            return $request -> get();
    }


}
