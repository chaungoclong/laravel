<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassRoomController;

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

Route::prefix("/class")->group(function() {
    Route::get("/list", [ClassRoomController::class, "index"])->name("class.list");
    Route::get("/new", [ClassRoomController::class, "create"])->name("class.new");
    Route::post("/store", [ClassRoomController::class, "store"])->name("class.store");
    Route::get("/edit/{id}", [ClassRoomController::class, "edit"])->name("class.edit");
    Route::get("/delete/{id}", [ClassRoomController::class, "destroy"])->name("class.delete");
    Route::post("/update", [ClassRoomController::class, "update"])->name("class.update");
    Route::get("/debug", [ClassRoomController::class, "debug"])->name("class.debug");
});

