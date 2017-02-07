<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //默认首页
    function index()
    {
        return view("web.about");
    }
}
