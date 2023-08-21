<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;
class ValidationController extends Controller
{
    function validateData(Request $req){
        $rules = array(
            'devices' => "required",
            'employee_id' => "required|max:4"
        );
        $valid = Validator::make($req->all(), $rules);
        if($valid->fails()){
            return response()->json($valid->errors(),401);
        }else{
            $device = new Device;
            $device->id=$req->id;
            $device->devices=$req->devices;
            $device->employee_id=$req->employee_id;
            $result=$device->save();
            if($result){
                return ["result"=>"Data Saved Successfully"];
            }else{
                return ["result"=>"Operation Failed"];
            }
        }
    }
}
