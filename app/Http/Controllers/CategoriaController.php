<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() 
    {
        return view('categorias.index', [
            'categorias' => Categoria::latest()->paginate(),
            ]);
    }

    public function create(Categoria $categoria)
    {
        return view('categorias.create', ['categoria' => $categoria]);
    }

    public function store(Request $request) 
    {
        $request->validate([
    		'nombreCategoria' => 'required',
            'visible' => 'required',
            'colorFondoCategoria' => 'required',
            'colorFuenteCategoria' => 'required',
            'horaInicioCategoria' => 'required',
            'horaFinCategoria' => 'required',
            'lunesCategoria' => 'required',
            'martesCategoria' => 'required',
           'miercolesCategoria' => 'required',
            'juevesCategoria' => 'required',
            'viernesCategoria' => 'required',
            'sabadoCategoria' => 'required',
            'domingoCategoria' => 'required'
    	]);

        $categoria = Categoria::create($request->all());
        

        return view('categorias.index', [
            'categorias' => Categoria::latest()->paginate(),
            ]);
    }
    
    public function edit(Categoria $categoria) 
    {
        return view('categorias.edit', ['categoria' => $categoria]);
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
