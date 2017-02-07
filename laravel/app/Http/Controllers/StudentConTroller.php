<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentConTroller extends Controller
{


    //获取get信息
    function getArticle(Request $request,$id){


    }
    //获取get信息
    function getArticle2(Request $request){
        \Ztest::test();

    }

    //获取get信息
    function myGet(Request $request){

        return view("list.list");


    }
    //获取post信息
    function myPost(Request $request){
        $request->flash();
        if($request->uname != "phpdl"){
            return back();
        }
        return redirect("./myget");
    }

    public function  myPut(){
        return "这是一个put方法测试";
    }
    public function  look(){
        return "look Teest";
    }
}
