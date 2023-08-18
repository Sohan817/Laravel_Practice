<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeleteController;
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
Route::POST('add',[UserController::class,'addMem']);
Route::view('add','addmember');
Route::get('list',[DeleteController::class,'listMember']);
Route::get('delete/{id}',[DeleteController::class,'delete']);
Route::get('edit/{id}',[DeleteController::class,'showData']);
Route::post('edit',[DeleteController::class,'update']);