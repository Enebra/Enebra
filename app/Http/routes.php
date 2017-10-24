<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Information
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'Website\Information\HomeController@index');

Route::get('downloads', 'Website\Information\HomeController@downloads');


/* ------- */

Route::post('language', 'Ajax\Information\HomeController@language');

Route::post('condition', 'Ajax\Information\HomeController@increment');

/* ------- */

/* videos */

Route::get('video/{slug}', 'Website\Information\VideosController@index');

/* pages */

Route::group(['prefix' => 'information'], function () {

			Route::get( 'faq/increment', 'Ajax\Information\PagesController@index');
			
			Route::get( '{slug}/{pdf?}', 'Website\Information\PagesController@index');

});

Route::post('subscribe', 'Ajax\Information\CallbackController@subscribe');

Route::post('contact', 'Ajax\Information\CallbackController@contact');

/* auth */

Route::group(['prefix' => 'auth'], function () {

  			Route::post('signup', 'Ajax\Social\AuthController@signup');

  			Route::get('referal/{link}', 'Ajax\Social\AuthController@referal');

  			Route::post('signin', 'Ajax\Social\AuthController@signin');

  			Route::post('logout', 'Ajax\Social\AuthController@logout');

  			Route::post('avatar', 'Ajax\Social\AuthController@avatar');

});

/* participiants */

Route::group(['prefix' => 'participants'], function () {

      Route::get( '/', 'Website\Information\ParticipantsController@index');
      
      Route::post( '/', 'Ajax\Information\ParticipantsController@index');

      Route::any( '/statistic', 'Ajax\Information\ParticipantsController@statistic');

});


/* account */

Route::group(['prefix' => 'account'], function(){

            Route::group([ 'prefix' => 'edit'], function (){
                
                Route::get('', 'Website\Social\ProfileController@index');

                Route::post('', 'Ajax\Social\ProfileController@index');

            });


			Route::get('chron', 'Website\Social\ProfileController@chron');

			Route::get('balance', 'Website\Social\ProfileController@balance');

			Route::get('feed-settings', 'Website\Social\ProfileController@feed_settings');

			Route::get('blockchain', 'Website\Social\ProfileController@blockchain');

            Route::get('feed', 'Website\Social\FeedController@index');

            Route::group([ 'prefix' => 'create'], function (){

                Route::get('innovation', 'Website\Social\ProfileController@innov');

                Route::get('information', 'Website\Social\ProfileController@inform');


            });


    Route::post('follow/{id}', 'Ajax\Social\ProfileController@follow');

			Route::post('unfollow/{id}', 'Ajax\Social\ProfileController@unfollow');

});

/* check */

Route::group(['prefix' => 'check'], function () {

        Route::any('days', 'Ajax\Social\CheckController@days');

  			Route::any('countries', 'Ajax\Social\CheckController@countries');

});

