<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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
// HOME PAGE
Route::get("/",[ProductsController::class,"index"]);

// REGISTER ROUTES
Route::get("/register", [RegisterController::class, "create"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"])->middleware("guest");


// LOGIN ROUTES
Route::get("/login", [SessionController::class, "create"])->middleware("guest");


// NEW LISTING PAGE
Route::get("/new-listing", [ProductsController::class, "create"]);
Route::post("/new-listing", [ProductsController::class, "store"]);


// PROFILE PAGE
Route::get("/profile", [UserController::class, "create"]);


// RENT ROUTE
Route::post("/rent", [RentController::class, "store"]);


// TEST ROUTE

Route::get("/test", function () {


    return view("test", [
        "product" => Product::first()
    ]);
});
