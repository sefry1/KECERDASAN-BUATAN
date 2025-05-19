<?php

use App\Http\Controllers\PenyakitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penyakits', PenyakitController::class);