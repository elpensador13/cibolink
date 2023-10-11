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
            'establecimiento_id' => 'required',
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
        

        return redirect()->route('home');
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
            'establecimiento_id' => 'required',
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

        $categoria->update([
            'nombreCategoria' => $request->nombreCategoria,
            'establecimiento_id' => $request->establecimiento_id,
            'visible' => $request->visible,
            'colorFondoCategoria' => $request->colorFondoCategoria,
            'colorFuenteCategoria' => $request->colorFuenteCategoria,
            'horaInicioCategoria' => $request->horaInicioCategoria,
            'horaFinCategoria' => $request->horaFinCategoria,
            'lunesCategoria' => $request->lunesCategoria,
            'martesCategoria' => $request->martesCategoria,
            'miercolesCategoria' => $request->miercolesCategoria,
            'juevesCategoria' => $request->juevesCategoria,
            'viernesCategoria' => $request->viernesCategoria,
            'sabadoCategoria' => $request->sabadoCategoria,
            'domingoCategoria' => $request->domingoCategoria,
        ]);

        return redirect()->route('home');
    }

    public function destroy(Categoria $categoria) 
    {
        $categoria->delete();

        return redirect()->route('home');
    }
} 
