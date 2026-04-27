<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [Homecontroller::class, 'profil']);
Route::get('/kontak', [Homecontroller::class, 'kontak']);
