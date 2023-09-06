<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Writer\PngWriter;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class MenuController extends Controller
class QRController extends Controller
{
    public function generateQR()
    {
        $url = '127.0.0.1:8000/qr/'+$establecimientoId; // Cambia esto a la URL que deseas codificar en el QR
        $qrCode = QrCode::size(300)->generate($url);
        
        return view('qr.generate', compact('qrCode'));
    }
}
{
    public function index() 
        {
        return view('menus.index', [
            'menus' => Menu::latest()->paginate()
            ]);
    }


    public function create(Menu $menu)
    {
        $establecimientos = establecimiento::pluck ('user_id' , 'id');
        $categoria = Categoria::pluck ('nombreCategoria' , 'id');
        
        return view('menus.create', ['menu' => $menu] , ['establecimientos' => $establecimientos , 'categoria' => $categoria]);
    }

    public function store(Request $request) 
    {
        $request->validate([
    		'nombrePlatillo' => 'required',
            'categoria_id' => 'required',
    	]);

        $menu = Menu::create($request->all());

        

        return view('menus.index', [
            'menus' => Menu::latest()->paginate()
            ]);
    }
}
