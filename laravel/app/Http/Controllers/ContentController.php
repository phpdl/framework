<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //默认首页
    function index()
    {
        return view("web.content");
    }
}
