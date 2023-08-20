<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    //Accessor
    function accessor(){
        return Member::all();
    }
    //Mutator
    function mutator(){
        $member = new Member;
        $member->id="13";
        $member->name='Nadim';
        $member->email='nadim@gmail.com';
        $member->address='Dhaka';
        $member->save();
    }
}
