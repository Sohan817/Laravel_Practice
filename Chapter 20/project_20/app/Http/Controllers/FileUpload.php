<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    function uploadFile(Request $req){
        $result = $req->file('file')->store('apiDocs');
        return ['result'=>$result];
    }
}
