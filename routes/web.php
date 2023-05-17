<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\classwork;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', function () {
    return view('about_us');
})->name('about');
Route::get('/welcome', function () {
    return view('firstpage');
});
Route::get('star', function () {
    return view('bubbes');
});
Route::get('classwork', [classwork::class, 'work']);
Route::view('/second', 'secondPage');
Route::view('/download', 'download');
Route::view('description', 'description');
Route::view('not_signed_up', 'wrongSiginMessage');
Route::view('login', "login");
Route::view('demo','demo');
Route::view('/navigation',"navigation");
