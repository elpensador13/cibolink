<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establecimiento;
use App\Models\Categoria;
use App\Models\Menu;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $establecimientos = establecimiento::all ();
        $categorias = Categoria::all ();
        $menus = Menu::all ();
        return view('home', ['establecimientos' => $establecimientos, 'categorias' => $categorias, 'menus' => $menus] );
    }

}
