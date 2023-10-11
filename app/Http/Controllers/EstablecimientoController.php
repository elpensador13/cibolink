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
                        'slogan' => 'required',
                        'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                        'calleNumero' => 'required',
                        'colonia' => 'required',
                        'municipio' => 'required',
                        'cp' => 'required',
                        'telefono1' => 'required',
                        'encargado' => 'required',
                        'email' => 'required',
        ]);              

        if ($request->hasFile('logo')) {
            $imagenPath = $request->file('logo')->store('establecimientos', 'public');
        } else {
            $imagenPath = null;
        }

        $establecimiento = $request->user()->establecimientos()->create([
            'nombreEstablecimiento' =>   $request->nombreEstablecimiento,
                        'slogan' =>   $request->slogan,
            'logo' => $imagenPath,
            'calleNumero' =>   $request->calleNumero,
            'colonia' =>   $request->colonia,
            'municipio' =>   $request->municipio,
            'cp' =>   $request->cp,
            'estado' =>   $request->estado,
            'telefono1' =>   $request->telefono1,
            'telefono2' =>   $request->telefono2,
            'encargado' =>   $request->encargado,
            'email' =>   $request->email,
            'sitioWeb' =>   $request->nombreEstablecimiento, 
            'faceBook' =>   $request->faceBook,
            'instagram' =>   $request->instagram,
            'twitter' =>   $request->twitter,
            'tikTok' =>   $request->tikTok,
            'youtube' =>   $request->youtube,
            'status' =>   "Activo",
            'lunesEstablecimiento' =>   $request->lunesEstablecimiento,
            'horaInicioLunesEstablecimiento' =>   $request->horaInicioLunesEstablecimiento,
            'horaFinLunesEstablecimiento' =>   $request->horaFinLunesEstablecimiento,
            'martesEstablecimiento' =>   $request->martesEstablecimiento,
            'horaInicioMartesEstablecimiento' =>   $request->horaInicioMartesEstablecimiento,
            'horaFinMartesEstablecimiento' =>   $request->horaFinMartesEstablecimiento,
            'miercolesEstablecimiento' =>   $request->miercolesEstablecimiento,
            'horaInicioMiercolesEstablecimiento' =>   $request->horaInicioMiercolesEstablecimiento,
            'horaFinMiercolesEstablecimiento' =>   $request->horaFinMiercolesEstablecimiento,
            'juevesEstablecimiento' =>   $request->juevesEstablecimiento,
            'horaInicioJuevesEstablecimiento' =>   $request->horaInicioJuevesEstablecimiento,
            'horaFinJuevesEstablecimiento' =>   $request->horaFinJuevesEstablecimiento,
            'viernesEstablecimiento' =>   $request->viernesEstablecimiento,
            'horaInicioViernesEstablecimiento' =>   $request->horaInicioViernesEstablecimiento,
            'horaFinViernesEstablecimiento' =>   $request->horaFinViernesEstablecimiento,
            'sabadoEstablecimiento' =>   $request->sabadoEstablecimiento,
            'horaInicioSabadoEstablecimiento' =>   $request->horaInicioSabadoEstablecimiento,
            'horaFinSabadoEstablecimiento' =>   $request->horaFinSabadoEstablecimiento,
            'domingoEstablecimiento' =>   $request->domingoEstablecimiento,
            'horaInicioDomingoEstablecimiento' =>   $request->horaInicioDomingoEstablecimiento,
            'horaFinDomingoEstablecimiento' =>   $request->horaFinDomingoEstablecimiento,
   
        ]);

        return redirect() -> route('establecimientos.index');
            
    }

    public function edit(Establecimiento $establecimiento) 
    {
        return view('establecimientos.edit', ['establecimiento' => $establecimiento]);
    }

    public function update(Request $request, Establecimiento $establecimiento)
    {
        $request->validate([
            'nombreEstablecimiento' => 'required',
                        'slogan' => 'required',
                        'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                        'calleNumero' => 'required',
                        'colonia' => 'required',
                        'municipio' => 'required',
                        'cp' => 'required',
                        'telefono1' => 'required',
                        'encargado' => 'required',
                        'email' => 'required',
        ]);              

        if ($request->hasFile('logo')) {
            $imagenPath = $request->file('logo')->store('establecimientos', 'public');
        } else {
            $imagenPath = null;
        }

                $establecimiento->update([
            'nombreEstablecimiento' =>   $request->nombreEstablecimiento,
                        'slogan' =>   $request->slogan,
            'logo' => $imagenPath,
            'calleNumero' =>   $request->calleNumero,
            'colonia' =>   $request->colonia,
            'municipio' =>   $request->municipio,
            'cp' =>   $request->cp,
            'estado' =>   $request->estado,
            'telefono1' =>   $request->telefono1,
            'telefono2' =>   $request->telefono2,
            'encargado' =>   $request->encargado,
            'email' =>   $request->email,
            'sitioWeb' =>   $request->nombreEstablecimiento, 
            'faceBook' =>   $request->faceBook,
            'instagram' =>   $request->instagram,
            'twitter' =>   $request->twitter,
            'tikTok' =>   $request->tikTok,
            'youtube' =>   $request->youtube,
            'status' =>   "Activo",
            'lunesEstablecimiento' =>   $request->lunesEstablecimiento,
            'horaInicioLunesEstablecimiento' =>   $request->horaInicioLunesEstablecimiento,
            'horaFinLunesEstablecimiento' =>   $request->horaFinLunesEstablecimiento,
            'martesEstablecimiento' =>   $request->martesEstablecimiento,
            'horaInicioMartesEstablecimiento' =>   $request->horaInicioMartesEstablecimiento,
            'horaFinMartesEstablecimiento' =>   $request->horaFinMartesEstablecimiento,            
            'miercolesEstablecimiento' =>   $request->miercolesEstablecimiento,
            'horaInicioMiercolesEstablecimiento' =>   $request->horaInicioMiercolesEstablecimiento,
            'horaFinMiercolesEstablecimiento' =>   $request->horaFinMiercolesEstablecimiento,        
            'juevesEstablecimiento' =>   $request->juevesEstablecimiento,
            'horaInicioJuevesEstablecimiento' =>   $request->horaInicioJuevesEstablecimiento,
            'horaFinJuevesEstablecimiento' => $request -> horaFinJuevesEstablecimiento,
            'viernesEstablecimiento' =>   $request->viernesEstablecimiento,
            'horaInicioViernesEstablecimiento' =>   $request->horaInicioViernesEstablecimiento,
            'horaFinViernesEstablecimiento' =>   $request->horaFinViernesEstablecimiento,
            'sabadoEstablecimiento' =>   $request->sabadoEstablecimiento,
            'horaInicioSabadoEstablecimiento' =>   $request->horaInicioSabadoEstablecimiento,
            'horaFinSabadoEstablecimiento' =>   $request->horaFinSabadoEstablecimiento,
            'domingoEstablecimiento' =>   $request->domingoEstablecimiento,
            'horaInicioDomingoEstablecimiento' =>   $request->horaInicioDomingoEstablecimiento,
            'horaFinDomingoEstablecimiento' =>   $request->horaFinDomingoEstablecimiento,            
                ]);
                return redirect() -> route('establecimientos.index');
                                 }

    public function destroy(Establecimiento $establecimiento) 
    {
        $establecimiento->delete();

        return back();
    }
}