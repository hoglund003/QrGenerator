<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRController extends Controller
{
    public function create_txt(){
        $input = request('input');
        $size = request('size');
        $qrCode = QrCode::size($size)->generate($input);

        return view('show-qr', ['qrCode' => $qrCode]);
    }
}
