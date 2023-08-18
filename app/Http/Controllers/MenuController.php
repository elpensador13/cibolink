<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;

class MenuController extends Controller
{
    public function index(Request $request) 
    {
        $establecimientoId  = $request->input('establecimientoId');
        return view('menus.index', [
            'menus' => Menu::latest()->paginate()->where('establecimiento_id', '=', $establecimientoId )
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
            'descripcionPlatillo' => 'required',
            'precioPlatillo' => 'required',
            'imagenPlatillo1' => 'required',
            'imagenPlatillo2' => 'required',
            'ordenPlatillo' => 'required',
            'visiblePlatillo' => 'required',
            'colorFondoMenu' => 'required',
            'colorFuenteMenu' => 'required',
    	]);

        $menu = Menu::create($request->all());      

        return redirect()->route('menus.index');
    }

    public function edit(Menu $menu) 
    {
        $establecimientos = establecimiento::pluck ('user_id' , 'id');
        $categoria = Categoria::pluck ('nombreCategoria' , 'id');
        return view('menus.edit', ['menu' => $menu] , ['establecimientos' => $establecimientos , 'categoria' => $categoria]);
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
    		'nombrePlatillo' => 'required',
            'categoria_id' => 'required',
            'descripcionPlatillo' => 'required',
            'precioPlatillo' => 'required',
            'imagenPlatillo1' => 'required',
            'imagenPlatillo2' => 'required',
            'ordenPlatillo' => 'required',
            'colorFondoMenu' => 'required',
            'colorFuenteMenu' => 'required',
    	]);

        $menu->update([
            'nombrePlatillo' => $request->nombrePlatillo,
            'categoria_id'  => $request->categoria_id,
            'descripcionPlatillo'  => $request->descripcionPlatillo,
            'precioPlatillo'  => $request->precioPlatillo,
            'imagenPlatillo1'  => $request->imagenPlatillo1,
            'imagenPlatillo2'  => $request->imagenPlatillo2,
            'ordenPlatillo'  => $request->ordenPlatillo,
            'visiblePlatillo'  => $request->visiblePlatillo,
            'colorFondoMenu'  => $request->colorFondoMenu,
            'colorFuenteMenu'  => $request->colorFuenteMenu,
        ]);

        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu) 
    {
        $menu->delete();

        return back();
    }
}
