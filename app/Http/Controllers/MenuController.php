<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;

class MenuController extends Controller
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
