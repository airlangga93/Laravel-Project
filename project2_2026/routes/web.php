<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

Route::resource('campaign', CampaignController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});