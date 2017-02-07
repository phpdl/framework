<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //默认首页
    function index()
    {
        return view("web.list");
    }
}
