<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DeviceController extends Controller
{
    function index(){
        //return DB::table('devices')->get();
        return DB::connection('mysql2')->table('products')->get();
    }
 
}
