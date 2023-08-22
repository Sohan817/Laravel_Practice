<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
class ProductController extends Controller
{
    //Inline Blade temlate
    function inlineBladeFunction(){
        $totalProducts = 20;
        return Blade::render('<h1>{{$total}} Product Lists</h1>',['total'=>$totalProducts]);
    }
    //Controller Routes Group
    function viewProducts(){
        return "View Product";
    }

    function addProduct(){
        return "Add Product";
    }

    function UpdateProduct(){
        return "Update Product";
    }
}
