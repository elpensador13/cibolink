<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establecimiento;

class EstablecimientoController extends Controller
{
    public function index() 
    {
        return view('establecimientos.index', [
            'establecimientos' => Establecimiento::latest()->paginate()
            ]);
    }

    public function create(Establecimiento $establecimiento)
    {
        return view('establecimientos.create', ['establecimiento' => $establecimiento]);
    }

    public function store(Request $request) 
    {
        $request->validate([
    		'nombreEstablecimiento' => 'required',
    	]);

        $establecimiento = $request->user()->establecimientos()->create([
            'nombreEstablecimiento' =>   $request->nombreEstablecimiento,
        ]);

        return view('establecimientos.index', [
            'establecimientos' => Establecimiento::latest()->paginate()
            ]);
    }

    public function edit(Establecimiento $establecimiento) 
    {
        return view('establecimientos.edit', ['establecimiento' => $establecimiento]);
    }

    public function update(Request $request, Establecimiento $establecimiento)
    {
        $request->validate([
    		'nombreEstablecimiento' => 'required',
    	]);

        $establecimiento->update([
            'nombreEstablecimiento' => $request->nombreEstablecimiento,
        ]);

        return redirect()->route('establecimientos.index');
    }

    public function destroy(Establecimiento $establecimiento) 
    {
        $establecimiento->delete();

        return back();
    }

}
