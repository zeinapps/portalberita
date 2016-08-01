<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/generatejsonhome', 'HomeController@generateJsonHome');
Route::get('/{time}/detil/{title}', 'HomeController@show');
//Route::get('/', function () {
//    return view('portal.index');
//});

Route::get('single', function () {
    return view('portal.single');
});


Route::get('search', function () {
    return view('portal.search');
});
Route::get('countdown', function () {
    return view('portal.countdown');
});
