<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SupporterController;
use App\Models\Supporter;

Route::get('/', function () {
    return view('landing', [
        'supporters' => Supporter::all()
    ]);
});

Route::post('/submit', [SupporterController::class, 'store'])->name('supporter.submit');
