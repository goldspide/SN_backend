<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/motivation',[App\Http\Controllers\MotivationController:: class,'motivation']);
Route::get('/liste_motivation',[App\Http\Controllers\MotivationController:: class,'create']);
Route::get('/delete_motivation/{id}',[App\Http\Controllers\MotivationController:: class,'destroy']);
Route::get('/update_motivation/{id}',[App\Http\Controllers\MotivationController:: class,'edite']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
