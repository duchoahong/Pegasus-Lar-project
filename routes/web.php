<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// model -> so it, nen viet hoa chu cai dau, ko viet kieu ( TableName) -> table_name
// table -> them ' s ' o cuoi


//frontend

Route::group(['prefix' => '/', 'namespace' => 'frontend'], function() {
    Route::get('/', 'HomeController@index');

    Route::get('/film', ['as' => 'film', 'uses' => 'FilmController@index']);
    Route::get('/movie-present', ['as' => 'movie.present', 'uses' => 'MovieController@getMovieItem']);
    Route::get('/movie-present-day', ['uses' => 'MovieController@getSelectDay']);
    Route::get('/booking/mv/{movie}/room/{room}/dy/{day}/seq/{seq}', ['as' => 'movie.booking', 'uses' => 'BookingController@booking']);
    Route::get('/payment', ['as' => 'movie.payment', 'uses' => 'BookingController@payment']);
});
//backend

// Auth::routes();

Route::namespace('User')->group(function () {
  Route::get('/login', 'LoginController@showLoginForm')->name('user.login');
  Route::post('/login', 'LoginController@login');
    Route::post('/logout','LoginController@logout')->name('user.logout');
  // Route::group(['middleware' => ['auth']], function () {
    Route::get('login-gate', 'HomeController@home')->name('user.home');

    Route::get('user-index', 'HomeController@index')->name('user.index');

    Route::get('/post/{id}', 'PostController@show');
  // });
});


Route::group(['prefix' => 'admin', 'namespace' => 'backend'], function() {
    // Route::get('/dashboard', 'DashBoardController@index');
    Route::get('/main-page', ['as' => 'room.home', 'uses' => 'HomeController@index']);
    Route::group(['prefix' => 'showTime'], function () {
    	Route::get('/', ['as' => 'showTimeIndex', 'uses' => 'ShowTimeController@index']);
    	Route::get('/add-show-time', ['as' => 'showTimeAdd', 'uses' => 'ShowTimeController@create']);
    	Route::post('/add-show-time', ['as' => 'showTimeSave', 'uses' => 'ShowTimeController@store']);
    });
    Route::group(['prefix' => 'movie'], function() {
        Route::get('/', ['as' => 'movieIndex', 'uses' => 'MovieController@index']);
        Route::get('/movie-detail/{id}', ['as' => 'movieDetail', 'uses' => 'MovieController@viewDetail']);
        Route::get('/add-movie', ['as' => 'movieAdd', 'uses' => 'MovieController@create']);
        Route::post('/add-movie', 'MovieController@store');
        Route::get('/edit-movie/{id}', ['as' => 'movieEdit', 'uses' => 'MovieController@show']);
        Route::post('/fetch-producer', 'MovieController@fetchProducer');
        Route::post('/fetch-director', 'MovieController@fetchDirector');
        Route::post('/fetch-cast', 'MovieController@fetchCast');

        Route::group(['prefix' => 'director'], function() {
            Route::get('/', ['as' => 'directorIndex', 'uses' => 'DirectorController@index']);
            Route::get('/add-director', ['as' => 'directorAdd', 'uses' => 'DirectorController@create']);
            Route::post('/add-director', 'DirectorController@store');
            Route::get('/edit-director/{id}', ['as' => 'directorEdit', 'uses' => 'DirectorController@show']);
            Route::post('/edit-director/{id}', 'DirectorController@update');
            Route::delete('/delete-director/{id}', ['as' => 'directorDestroy', 'uses' => 'DirectorController@destroy']);
        });

        Route::group(['prefix' => 'cast'], function() {
            Route::get('', ['as' => 'castIndex', 'uses' => 'CastController@index']);
            Route::get('/add-cast', ['as' => 'castAdd', 'uses' => 'CastController@create']);
            Route::post('/add-cast', 'CastController@store');
            Route::get('/edit-cast/{id}', ['as' => 'castEdit', 'uses' => 'CastController@show']);
            Route::post('/edit-cast/{id}', 'CastController@update');
            Route::delete('/delete-cast/{id}', ['as' => 'castDestroy', 'uses' => 'CastController@destroy']);
        });


        Route::get('/delete-director', ['as' => 'directorDelete', 'uses' => 'DirectorController@delete']);
    });
    Route::get('/room{id}', ['as' => 'room.ShowAllDate', 'uses' => 'RoomController@ShowAllDate']);
    Route::post('/room{id}', 'RoomController@ShowDateDetail');
});


