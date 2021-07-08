<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRController extends Controller
{
    public function create(){
        $txt = request('text');
        return QrCode::size(300)->generate($txt);
    }
}
