<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class QRController extends Controller
{
    public function generateQR(Request $request )
    {
        $establecimientoId=$request ->input ('establecimientoId'); 
        $url = '127.0.0.1:8000/qr/'+$establecimientoId;
        $qrCode = QrCode::size(300)->generate($url);
        
        return view('generateQR', compact('qrCode'));
    }
}
    