<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.landing_page');
});

Route::post('/qrcode', function () {
    $txt = request('text');
    return QrCode::size(300)->generate($txt);
});
