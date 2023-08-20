<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class UserController extends Controller
{
    function index(){
        //One to one
        //return Employee::find(2)->companyData;
        //One to many
        return Employee::find(2)->deviceData;
    }
}
