<?php

use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserListingsController;
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
Route::get("/", [ProductsController::class, "index"]);

// REGISTER ROUTES
Route::get("/register", [RegisterController::class, "create"])->middleware("guest")->middleware("guest");
Route::post("/register", [RegisterController::class, "store"])->middleware("guest")->middleware("guest");


// LOGIN ROUTES
Route::get("/login", [SessionController::class, "create"])->middleware("guest")->name("login");
Route::post("/login", [SessionController::class, "store"])->middleware("guest");

// LOGOUT ROUTE
Route::post("/logout", [SessionController::class, "destroy"])->middleware("auth");

// NEW LISTING PAGE
Route::get("/new-listing", [ProductsController::class, "create"])->middleware("auth");
Route::post("/new-listing", [ProductsController::class, "store"])->middleware("auth");

// DELETE LISTING

Route::delete("/delete/{product:slug}",[ProductsController::class,"destroy"])->middleware("auth");


// PROFILE PAGE
Route::get("/profile", [ProfileController::class, "create"])->middleware("auth");


// USER LISTINGS PAGE
Route::get("/profile/listings",[UserListingsController::class,"create"])->middleware("auth");


// RENT ROUTE
Route::post("/rent/{product}", [RentController::class, "store"])->middleware("auth");

// PRODUCTS VIEW PAGE
Route::get("/products/{product:slug}",[ProductDetailController::class,"create"]);

// DROP RENTS
Route::delete("/rent/drop/{product:slug}",[RentController::class,"destroy"])->middleware("auth");


// EDIT LISTING PAGE

Route::get("/edit/{product:slug}",[ProductsController::class,"edit"])->middleware("auth");
Route::patch("/edit/{product:slug}",[ProductsController::class,"update"])->middleware("auth");


// TEST ROUTE

Route::get("/test",[TestController::class,"create"]);
Route::post("/test",[TestController::class,"store"]);
