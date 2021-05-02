<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;


Route::get( '/', function() {
    
    return view('home');
});

Route::get('/pb',[PageController::class,'pb']); //指向pb.blade.php
Route::get('/product',[ProductController::class,'show']);
