<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/Kulawik/308262/people',peoplecontroller::class);
Route::get('/Kulawik/308262/people/{people}',[peoplecontroller::class,'show']);
Route::post('/Kulawik/308262/people/',[peoplecontroller::class,'create']);
Route::delete('/Kulawik/308262/people/{people}',[peoplecontroller::class,'delete']);
Route::put('/Kulawik/308262/people/{people}',[peoplecontroller::class,'update']);