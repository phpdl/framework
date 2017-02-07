<?php
/* Route::get("/user/{id}",function(App\User $user){
     return $user->age;
 });*/

 Route::get("/user/{user}","User\UserController@getUser");