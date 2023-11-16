<?php

use Illuminate\Support\Facades\Route;
// goi controller vao trong file nay
use App\Http\Controllers\Admin\LoginController;

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

Route::get('hello-it0602',function(){
    return "Welcome to learn Laravel";
    // http://localhost:8000/hello-it0602
});

//http://localhost:8000/login
Route::get("login",[LoginController::class,"index"]);

// http://localhost:8000/handle-login
Route::post("handle-login",[LoginController::class,"login"])->name("admin.handle.login");