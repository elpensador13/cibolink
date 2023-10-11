<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establecimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreEstablecimiento',
        'slogan',
        'logo',
        'calleNumero',
        'colonia',
        'municipio',
        'cp',
        'estado',
        'telefono1',
        'telefono2',
        'encargado',
        'eMail',
        'sitioWeb',
        'faceBook',
        'instagram',
        'twitter',
        'tikTok',
        'youtube',
        'status',
        'lunesEstablecimiento',
        'horaInicioLunesEstablecimiento',
        'horaFinLunesEstablecimiento',
        'martesEstablecimiento',
        'horaInicioMartesEstablecimiento',
        'horaFinMartesEstablecimiento',
        'miercolesEstablecimiento',
        'horaInicioMiercolesEstablecimiento',
        'horaFinMiercolesEstablecimiento',
        'juevesEstablecimiento',
        'horaInicioJuevesEstablecimiento',
        'horaFinJuevesEstablecimiento',
        'viernesEstablecimiento',
        'horaInicioViernesEstablecimiento',
        'horaFinViernesEstablecimiento',
        'sabadoEstablecimiento',
        'horaInicioSabadoEstablecimiento',
        'horaFinSabadoEstablecimiento',
        'domingoEstablecimiento',
        'horaInicioDomingoEstablecimiento',
        'horaFinDomingoEstablecimiento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menus() 
    {
        return $this->hasMany(Menu::class);
    }

    public function categorias() 
    {
        return $this->hasMany(Categoria::class);
    }
}
