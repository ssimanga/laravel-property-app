<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/user',[UserController::class,'index']);
Route::get('/user/{user}',[UserController::class,'edit']);
Route::post('/user',[UserController::class, 'store']);
Route::post('/user/{user}',[UserController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin');
})->name('dashboard');
