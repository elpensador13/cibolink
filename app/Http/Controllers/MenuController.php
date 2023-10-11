<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\establecimiento;
use App\Models\Categoria;

use Storage;

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
        $categoria = Categoria::all ();
        
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
            'imagenPlatillo2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordenPlatillo' => 'required',
            'visiblePlatillo' => 'required',
            'colorFondoMenu' => 'required',
            'colorFuenteMenu' => 'required',
    	]);
     
        if ($request->hasFile('imagenPlatillo2')) {
            $imagenPath = $request->file('imagenPlatillo2')->store('menus', 'public');
        } else {
            $imagenPath = null;
        }

        $menu = Menu::create($request->all()); 
        $menu->imagenPlatillo2 = $imagenPath;
        $menu->save();

        return redirect()->route('home');
    }

    public function edit(Menu $menu) 
    {
        $establecimientos = establecimiento::pluck ('user_id' , 'id');
        $categoria = Categoria::all ();
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
            'imagenPlatillo2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordenPlatillo' => 'required',
            'colorFondoMenu' => 'required',
            'colorFuenteMenu' => 'required',
    	]);

        if ($request->hasFile('imagenPlatillo2')) {
            $imagenPath = $request->file('imagenPlatillo2')->store('menus', 'public');
        } else {
            $imagenPath = null;
        }

        $menu->imagenPlatillo2 = $imagenPath;
        $menu->update([
            'nombrePlatillo' => $request->nombrePlatillo,
            'categoria_id'  => $request->categoria_id,
            'descripcionPlatillo'  => $request->descripcionPlatillo,
            'precioPlatillo'  => $request->precioPlatillo,
            'imagenPlatillo1'  => $request->imagenPlatillo1,
            'ordenPlatillo'  => $request->ordenPlatillo,
            'visiblePlatillo'  => $request->visiblePlatillo,
            'colorFondoMenu'  => $request->colorFondoMenu,
            'colorFuenteMenu'  => $request->colorFuenteMenu,
        ]);

        return redirect()->route('home');
    }

    public function destroy(Menu $menu) 
    {
        $menu->delete();

        return redirect()->route('home');
    }
}
