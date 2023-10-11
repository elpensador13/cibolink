<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class QRController extends Controller
{
public function generateQR(Request $request)
{
    $establecimientoId = $request->input('establecimientoId');
    $data =         'http://127.0.0.1:8000/qr/' .$establecimientoId;
$archivo='qr'.$establecimientoId.'.svg';
    return view('generateQR',['data'=>$data], ['archivo'=>$archivo]); 
}
}
    