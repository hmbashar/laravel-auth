<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::post('/signup', [UserController::class, 'SignUp']);
Route::post('/signin', [UserController::class, 'SignIn']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/signout', [UserController::class, 'SignOut']);
    Route::get('/profile', [UserController::class, 'Profile']);
});
