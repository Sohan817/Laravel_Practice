<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    //One to One
    // function companyData(){
    //     return $this->hasOne('App\Models\Compaie');
    // }
    //One to Many
    function deviceData(){
        return $this->hasMany('App\Models\Device');
    }
}
