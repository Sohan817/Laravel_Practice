<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class PutController extends Controller
{
    function updateData(Request $req){
        $device = Device::find($req->id);
        $device->devices=$req->devices;
        $device->employee_id=$req->employee_id;
        $result=$device->save();
        if($result){
            return ['result'=>'Data Updated Successfully'];
        }else{
            return ['result'=>'Operation Failed'];
        }
    }
}
