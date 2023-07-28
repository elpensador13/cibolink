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
        $validData = $request->validate(
            ['nombreEstablecimiento' => 'required'],
            ['nombreEstablecimiento.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['slogan' => 'required'],
            ['slogan.required' => 'El campo SLOGAN es requerido'],
            ['logo' => 'required'],
            ['logo.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['calleNumero' => 'required'],
            ['calleNumero.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['colonia' => 'required'],
            ['colonia.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['municipio' => 'required'],
            ['municipio.required' => 'El campo MUNICIPIO O ALCALDÍA es requerido'],
            ['cp' => 'required'],
            ['cp.required' => 'El campo CÓDIGO POSTAL es requerido'],
            ['telefono1' => 'required'],
            ['telefono1.required' => 'El campo TELÉFONO 1 es requerido'],
            ['encargado' => 'required'],
            ['encargado.required' => 'El campo NOMBRE DEL ENCARGADO es requerido'],
            ['email' => 'required'],
            ['email.required' => 'El campo CORREO ELECTRÓNICO DEL ENCARGADO es requerido']);
  


        $establecimiento = $request->user()->establecimientos()->create([
            'nombreEstablecimiento' =>   $request->nombreEstablecimiento,
                        'slogan' =>   $request->slogan,
            'logo' =>   $request->logo,
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
        $validData = $request->validate(
            ['nombreEstablecimiento' => 'required'],
            ['nombreEstablecimiento.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['slogan' => 'required'],
            ['slogan.required' => 'El campo SLOGAN es requerido'],
            ['logo' => 'required'],
            ['logo.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['calleNumero' => 'required'],
            ['calleNumero.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['colonia' => 'required'],
            ['colonia.required' => 'El campo NOMBRE DEL ESTABLECIMIENTO es requerido'],
            ['municipio' => 'required'],
            ['municipio.required' => 'El campo MUNICIPIO O ALCALDÍA es requerido'],
            ['cp' => 'required'],
            ['cp.required' => 'El campo CÓDIGO POSTAL es requerido'],
            ['telefono1' => 'required'],
            ['telefono1.required' => 'El campo TELÉFONO 1 es requerido'],
            ['encargado' => 'required'],
            ['encargado.required' => 'El campo NOMBRE DEL ENCARGADO es requerido'],
            ['email' => 'required'],
            ['email.required' => 'El campo CORREO ELECTRÓNICO DEL ENCARGADO es requerido']);
  
	

    	

        $establecimiento->update([
            'nombreEstablecimiento' => $request->nombreEstablecimiento,
            'slogan' =>   $request->slogan,
            'logo' =>   $request->logo,
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

        return redirect()->route('establecimientos.index');
    }

    public function destroy(Establecimiento $establecimiento) 
    {
        $establecimiento->delete();

        return back();
    }

}