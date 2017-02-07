<?php

namespace App\Http\Controllers\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddConTroller extends Controller
{
    function AddProduct(){
        session(["product"=>1688]);
        return "添加商品";
    }

    function  EditProduct(){
        echo session("product");
        return "编辑商品";
    }
}
