<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\LoginController;
use LoginController as GlobalLoginController;

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
Route::get('/login', [GlobalLoginController::class, 'showLoginForm']);
  Route::post('/login', 'Auth\LoginController@login');
