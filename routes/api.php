<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public routes

// Route group for authenticated users only
Route::middleware(['auth:api'])->group(function (){

});

// Route group for guests
Route::middleware(['guest:api'])->group(function (){
    Route::post('register',[RegisterController::class,'register']);
});

