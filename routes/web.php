<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.landing_page');
});

Route::get('/qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});
