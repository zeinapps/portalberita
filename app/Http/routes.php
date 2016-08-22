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
Route::get('/{id}/lihatsumber/{kategori}', 'HomeController@lihatsumber');
Route::get('/{kategori}/kategori', 'HomeController@kategori');
Route::get('/terbaru', 'HomeController@terbaru');
Route::get('/terpopuler', 'HomeController@terpopuler');
Route::get('/api/views', 'HomeController@views');

Route::get('/api/index', 'ApiController@index');
Route::get('/api/trending', 'ApiController@trending');
Route::get('/api/{kategori}/kategori', 'ApiController@kategori');
Route::get('/api/{time}/detil', 'ApiController@show');


//Route::get('/', function () {
//    return view('portal.index');
//});
/*
Route::get('single', function () {
    return view('portal.single');
});


Route::get('search', function () {
    return view('portal.search');
});
Route::get('countdown', function () {
    return view('portal.countdown');
});
*/