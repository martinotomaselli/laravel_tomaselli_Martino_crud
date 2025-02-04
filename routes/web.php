<?php

use App\Http\Controllers\BeerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//rotta di tipo get per inserimento nel form
Route::get("/beer/form", [BeerController::class, "beerForm"])->name("beer.form");
Route::post("/beer/store", [BeerController::class, "beerStore"])->name("beer.Store");
Route::get("/beer/index", [BeerController::class, "beerIndex"])->name("beer.index");