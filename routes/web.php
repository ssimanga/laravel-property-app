<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;

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
    return view('auth.login');
});

Route::get('registration',[UserController::class, 'Register'])->name('registration');

Route::get('/user/create', function(){
    return view('users.create');
});

Route::get('logout', [UserController::class,'Logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[UserController::class,'Admin'])->name('dashboard');
    
    Route::get('/user',[UserController::class,'index']);
    Route::get('/user/{user}',[UserController::class,'edit']);
    Route::post('/user',[UserController::class, 'store']);
    Route::post('/user/{user}',[UserController::class, 'update']);

    Route::get('/property', [PropertyController::class,'create']);
    Route::post('/property',[PropertyController::class,'store']);
});
