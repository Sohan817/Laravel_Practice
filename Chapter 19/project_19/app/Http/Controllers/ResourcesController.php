<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Device::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
