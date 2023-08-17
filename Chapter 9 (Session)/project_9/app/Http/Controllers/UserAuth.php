<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function sessionLogin(Request $req){
        $data = $req->input('user');
        $req->session()->put('user',$data);
        return redirect('profile');
    }
}
