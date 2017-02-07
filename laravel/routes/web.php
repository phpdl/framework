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
use Illuminate\Http\Request;
Route::get('/',['as'=>'home',function ( ) {
    return route('home');
}]);
Route::get('/form',function(){
    return view("form");
});
Route::get('/mail',"MailConTroller@send");

Route::post('/form',function(){
    $route =  Route::currentRouteAction();
    echo $route;
    return 999;
});
Route::resource('my', 'MyController');

Route::get("/test",function(){
    $route =  Route::currentRouteAction();
   var_dump($route);
    return 777;
});

Route::group(['prefix'=>'phpdl'],function(){
    Route::get('test',function(){
        return "www.phpdl.com";
    });
    Route::get('news',['as'=>"zs",function(){
        $route =  Route::currentRouteAction();
        list($controller,$action) = explode('@', $route);
        echo $action;
        return "666";
    }]);


});



include "student.php";
include "user.php";
include "nav.php";