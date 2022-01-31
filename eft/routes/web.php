<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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
  //return view('welcome');

});

/******************Route for Home ***************/
Route::get('/', [WelcomeController::class, 'index'])->name('login');
Route::post('/', [WelcomeController::class, 'authenticate'])->name('userAuthenticate');
Route::get('/adduser', [UserController::class, 'index'])->name('addUser');
Route::post('/adduser', [UserController::class, 'store'])->name('createInvoice');
Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/logout', [WelcomeController::class, 'logout']);


