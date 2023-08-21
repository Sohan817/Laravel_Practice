<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class PostController extends Controller
{
    function addData(Request $req){
        $data = new Device;
        $data->id=$req->id;
        $data->devices=$req->devices;
        $data->employee_id=$req->employee_id;
        $result = $data->save();
        if($result){
            return ["result"=>"Data has been saved"];
        }else{
            return ["result"=>"Operation Failed"];
        }
    }
}
