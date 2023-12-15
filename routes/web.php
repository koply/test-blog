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

// aka main index home.blade
Route::get("/home", function () {
    return view('home');
})->name("home");

// BlogsController's routes
Route::get('/blogs/{id}', [BlogsController::class, 'show']);

Route::get("/blogs", [BlogsController::class, 'index'])->name("blogs");

// BlogPanelController's routes
Route::get("/panel", [BlogPanelController::class, 'index'])->name("panel");

Route::post("/panel/create", [BlogPanelController::class, 'create'])->name("blog-create");

// UserController's routes
Route::get("/logout", [UserController::class, 'logout'])->name("logout");

Route::get("/login", [UserController::class, 'index'])->name("login");

Route::post("/user/register", [UserController::class, 'register'])->name("user-register");

Route::post("/user/login", [UserController::class, 'login'])->name("user-login");
