<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class UserController extends Controller
{
    function addMem(Request $req){
        $person=new Member;
        $person->id=$req->id;
        $person->name=$req->name;
        $person->email=$req->email;
        $person->address=$req->address;
        $person->save();
        return redirect('list');
    }
}
