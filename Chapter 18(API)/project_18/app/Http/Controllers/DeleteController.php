<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeleteController extends Controller
{
    function deleteData($id){
        $data=Device::find($id);
        $result=$data->delete();
        if($result){
            return ["result"=>"Data has been Deleted"];
        }else{
            return ["result"=>"Operation Failed"];
        }
    }
}
