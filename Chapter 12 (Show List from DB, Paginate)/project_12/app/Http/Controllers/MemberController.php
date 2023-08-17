<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function page(){
        $data= Member::paginate(3);
        return view ('paginate',['members'=>$data]);
    }
}
