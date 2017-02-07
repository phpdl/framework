<?php

namespace App\Http\Controllers;
 

class MyController extends Controller
{
    function getAbout(){
    	echo "77";
    	return "about";
    	
    }

    function show(){
        echo \Route::currentRouteName();
        echo "<br>";
        echo \Route::currentRouteAction();
        //print_r( \Route::current());
        return 1;
    }
}
