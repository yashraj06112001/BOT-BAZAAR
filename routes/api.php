<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryformapiController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\yescontroller;
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
Route::post("signin",[EntryformapiController::class,"add"]);
Route::post('check',[logincontroller::class,'login']);
Route::post('yespage',[yescontroller::class,'yes']);
