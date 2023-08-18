<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class DeleteController extends Controller
{
    //Show list
    function listMember(){
        $data=Member::all();
        return view('list',['members'=>$data]);
    }
    //Delete Data
    function delete($id){
        $data=Member::find($id);
        $data->delete();
        return redirect('list');
    }
    //Show data
    function showData($id){
        $data=Member::find($id);
        return view('edit',['data'=>$data]);
    }
    // Update data
    function update(Request $req){
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }
}
