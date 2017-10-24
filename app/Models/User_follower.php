<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_follower extends Model
{
    

    public function follower()
    {

    		return $this -> belongsTo('App\Models\User', 'follower_id', 'id');

    }

    public static function follow( $user_id, $follower_id )
    {		

    		self::unfollow( $user_id, $follower_id  );

    		self::insert( [ 'user_id' => $user_id, 'follower_id' => $follower_id ] ) ;

    }

    public static function unfollow( $user_id, $follower_id )
    {	   

    		self::whereUser_id( $user_id ) -> whereFollower_id( $follower_id ) -> delete() ;

    }
}
