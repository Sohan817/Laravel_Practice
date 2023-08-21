<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class SearchController extends Controller
{
    function searchData($devices){
        return Device::where("devices","like","%".$devices."%")->get();

    }
}
