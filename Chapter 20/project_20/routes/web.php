<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ProductController;
use App\Mail\SampleMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('list',[DeviceController::class,'index']);

Route::controller(ProductController::class)->group(function(){
    Route::get('inline',"inlineBladeFunction");
    Route::get('view','viewProducts');
    Route::get('add','addProduct');
    Route::put('update','UpdateProduct');
});

//Markdown Mail
Route::get('/mail', function () {
    return new SampleMail();
});