<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //默认首页
    function index()
    {
        return view("index");
    }
}
