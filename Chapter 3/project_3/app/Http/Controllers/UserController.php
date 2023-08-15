<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function loadView(){
    //     // pass data,if-else,for-loop
    //     // return view('users',["name"=>"Suborna"]);
    //     // foreach
    //     $data = ['Shohan','suborna','Nadim'];
    //     return view('users',["users"=> $data]);
    // }
     function loadView(){
        $data = ['Shohan','suborna','Nadim'];
        return view('outer',["users"=> $data]);
    }
}
