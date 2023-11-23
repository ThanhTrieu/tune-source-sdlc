<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(["prefix"=> "admin","as"=>"admin."], function () {
    //http://localhost:8000/login
    Route::get("login",[LoginController::class,"index"])->name("login");

    // http://localhost:8000/handle-login
    Route::post("handle-login",[LoginController::class,"login"])->name("handle.login");
});

Route::group(["prefix"=> "admin", "as" => "admin."], function(){
    Route::get("dashboard",[DashboardController::class, "index"])->name("dashboard");
});