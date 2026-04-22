<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
