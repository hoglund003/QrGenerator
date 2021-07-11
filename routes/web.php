<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;

Route::view('/', 'create_qr');
Route::post('/create-qr-text', [QRController::class, 'create_txt']);
