<?php

use App\Http\Controllers\MpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/unakpa', [MpController::class, 'hello']);
Route::get('/miracle', [MpController::class, 'bye']);
