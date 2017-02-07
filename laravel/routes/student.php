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


/*Route::get('/', function () {
    return view('test');
});*/
//App\Http\Controllers
Route::get('/get/{id}',"StudentConTroller@getArticle");
Route::get('/get',"StudentConTroller@getArticle2");
Route::get('/myget',"StudentConTroller@myget");
Route::get('/form',function(){
    return view("form");
});
Route::post('/mypost',"StudentConTroller@myPost");

