<?php

use App\Http\Controllers\UploadController;
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


Route::get('/',[UploadController::class,'index']);
Route::get('/uploadpage',[UploadController::class,'Uploadpage']);
Route::post('/uploadfile',[UploadController::class,'store']);
Route::get('/viewfiles',[UploadController::class,'show']);
Route::get('/download/{id}',[UploadController::class,'download']);
Route::get('/delete/{id}',[UploadController::class,'destroy']);
Route::get('/view/{id}',[UploadController::class,'view']);

