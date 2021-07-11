<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRController extends Controller
{
    public function create_txt(Request $request)
    {
        $validate = $request->validate([
            'content' => 'required|max:255',
            'size' => 'required|integer',
        ]);

        $input = request('content');
        $size = request('size');
        $qrCode = QrCode::size($size)->generate($input);

        return view('show-qr', ['qrCode' => $qrCode]);
    }
}
