<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gift;
use App\Http\Controllers\GiftController;

Route::get('/', function () {
    $gifts = Gift::all();
    return view('welcome', compact('gifts'));
});

Route::resource('gifts', GiftController::class);