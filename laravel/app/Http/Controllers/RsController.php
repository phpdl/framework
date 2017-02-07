<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsController extends Controller
{
    //
    public function index($a,$b){
    	return 11;
    }
    
    function show($a){
    	echo $a+6;
    }
     public function about(){
    	return "about";
    }
    
    function edit($a){
 
    	return 9 ;
    }
    function create(){
    	return "创建";
    }
}
