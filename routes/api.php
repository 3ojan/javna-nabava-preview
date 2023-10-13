<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

///images
//For adding an image
Route::get('/add-image',[App\Http\Controllers\ImageUploadController::class,'addImage'])->name('images.add');
//For storing an image
Route::post('/store-image',[App\Http\Controllers\ImageUploadController::class,'storeImage']);
///images