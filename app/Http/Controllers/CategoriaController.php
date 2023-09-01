<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\establecimiento;

class CategoriaController extends Controller
{
    public function index(Request $request) 
    {
        $establecimientoId  = $request->input('establecimientoId');
        return view('categorias.index', [
            'categorias' => Categoria::latest()->paginate()->where('establecimiento_id', '=', $establecimientoId ),
            ]);
    }

    public function create(Categoria $categoria)
    {
        $establecimientos = establecimiento::pluck ('user_id' , 'id');

        return view('categorias.create', ['categoria' => $categoria] , ['establecimientos' => $establecimientos]);
    }

    public function store(Request $request) 
    {
        $request->validate([
    		'nombreCategoria' => 'required',
    	]);

        $categoria = Categoria::create($request->all());
        

        return view('categorias.index', [
            'categorias' => Categoria::latest()->paginate(),
            ]);
    }
    
    public function edit(Categoria $categoria) 
    {
        $establecimientos = establecimiento::pluck ('user_id' , 'id');

        return view('categorias.edit', ['categoria' => $categoria], ['establecimientos' => $establecimientos]);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
    		'nombreCategoria' => 'required',
    	]);

        $categoria->update([
            'nombreCategoria' => $request->nombreCategoria,
        ]);

        return view('categorias.index', [
            'categorias' => Categoria::latest()->paginate(),
            ]);
    }

    public function destroy(Categoria $categoria) 
    {
        $categoria->delete();

        return back();
    }
} 
