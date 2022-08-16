<?php

use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data/{id?}',[MemberController::class,'list']);

// Route::get('data/{dd:name?}',[MemberController::class,'list']);