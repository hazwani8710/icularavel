<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
Route::get('/user', function (Request $request) {    
    Log::debug("user: ", ["user"=> $request->user()]);
    //return $request->user();
    return response()->json([
        'data'=> "hello world",
    ]);
});
