<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;

Route::get('/', function () {
    return view('user.landing_page');
});

Route::post('/qrcode', [QRController::class, 'create']);
