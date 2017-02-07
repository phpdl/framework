<?php
Route::get("/","IndexController@index");
Route::get("/about","AboutController@index");
Route::get("/list/{clsid?}","ListController@index");
Route::get("/content/{id?}","ContentController@index"); //可选参数路由风格