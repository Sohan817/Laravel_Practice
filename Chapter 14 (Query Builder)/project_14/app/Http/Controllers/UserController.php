<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function getData(){
        //get value
        // return DB::table('compaies')->get();
        //find value
        //return DB::table('members')->where('id',4)->get();
        //count value
        //return DB::table('members')->count();
        //insert value
        // return DB::table('members')->insert([
        //     'id'=>'13',
        //     'name'=>'Asif',
        //     'email'=>'asif@gmail.com',
        //     'address'=>'Kishorgang'
        // ]);
        //update value
        // return DB::table('members')->where('id',5)->update([
        //     'name'=>'Sohag',
        //     'email'=>'sohag@gmail.com',
        //     'address'=>'Mohammadpur'
        // ]);
        //Delete value
        // return DB::table('members')->where('id',13)->delete();

        //Aggregate Array
        //sum()
        // return DB::table('members')->sum('id');
        //min()
        //return DB::table('members')->min('id');
        //max()
        //return DB::table('members')->max('id');
        //Average()
        //return DB::table('members')->avg('id');
        //Join table
        return DB::table('employees')
        ->join('compaies','employees.id','=','compaies.employee_id')
        ->where('employees.name','Tahmid')
        ->select('employees.*','compaies.*')
        ->get();
    }
}
