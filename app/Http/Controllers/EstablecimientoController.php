<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establecimiento;

class EstablecimientoController extends Controller
{
    public function index() 
    {
        return view('establecimientos.index');
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

        return view('establecimientos.index');
    }

    public function edit(Establecimiento $establecimiento) 
    {
        return view('establecimientos.edit', ['establecimiento' => $establecimiento]);
    }
}
