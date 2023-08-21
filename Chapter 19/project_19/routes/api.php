<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PutController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'auth:sanctum'], function(){
//All secure URL's
Route::get('list/{id?}',[DeviceController::class,'index']);
Route::post('add',[PostController::class,'addData']);
Route::put('update',[PutController::class,'updateData']);
Route::delete('delete/{id}',[DeleteController::class,'deleteData']);
Route::get('search/{devices}',[SearchController::class,'searchData']);
Route::post('validate',[ValidationController::class,'validateData']);

//Resources
Route::apiResource('users',ResourcesController::class);
});
Route::post('login',[UserController::class,'login']);