<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get('/', function () {
    return view('ejercicio');
})->name('ejercicio');

Route::get('/about', function () {
    return view('about');
})->name('about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/proyecto/{numero?}', function ($numero = 1) {
    return view('proyecto', ['numero' => $numero]);
})->name('proyecto');