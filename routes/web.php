<?php

use App\Http\Controllers\BlogPanelController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", function () {
    return "slm";
});

Route::get("/home", function () {
    return view('home');
})->name("home");

/*Route::get("/blogs", function () {
    return view('blogs');
})->name("blogs");*/

Route::get('/blogs/{id}', [BlogsController::class, 'show']);

Route::get("/blogs", [BlogsController::class, 'index'])->name("blogs");

Route::get("/panel", [BlogPanelController::class, 'index'])->name("panel");

Route::get("/logout", [UserController::class, 'logout'])->name("logout");

Route::get("/login", [UserController::class, 'index'])->name("login");

Route::post("/user/register", [UserController::class, 'register'])->name("user-register");

Route::post("/user/login", [UserController::class, 'login'])->name("user-login");
