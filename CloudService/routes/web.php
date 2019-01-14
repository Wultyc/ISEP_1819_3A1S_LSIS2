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

Route::get('/language/{flag}', function($flag){
    if($flag === 'pt-PT' || $flag === 'en') {
        App::setLocale($flag);
        \Auth::user()->language = $flag;
        \Auth::user()->save();
        return redirect()->back();
    }
    return abort(500);
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('/reading/{client}/oximetry/{value}', 'OximetryController@store');
    Route::get('/login', 'MainController@login');
    Route::post('/login', 'MainController@uauth')->name('login');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'MainController@index')->name('index');
    Route::get('/logout', 'MainController@logout')->name('logout');
    Route::get('/profile', 'UserController@index')->name('profile.index');
    Route::post('/profile', 'UserController@update');
    Route::prefix('statistics')->group(function(){
        Route::get('/oximetry', 'OximetryController@index')->name('statistics.oximetry');
        Route::get('/blood-pressure', 'BloodPressureController@index')->name('statistics.blood.pressure');
        Route::get('/weight', 'WeightController@index')->name('statistics.weight');
        Route::get('/height', 'HeightController@index')->name('statistics.height');
    });
});


