<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/users', function () {
    return view('users');
});
//Routed Middleware
Route::get('/check', function () {
    return view('check');
})->middleware('protectedPage');

Route::get('/noaccess', function () {
    return view('noaccess');
});
Route::get('/home', function () {
    return view('home');
});
//Group Middleware
Route::group(['middleware'=>['protectedPage']],function(){
    Route::get('/users', function () {
        return view('users');
    });
    Route::get('/home', function () {
        return view('home');
    });
});