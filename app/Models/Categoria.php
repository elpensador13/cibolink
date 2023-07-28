<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreCategoria',
        'visible',
            'colorFondoCategoria',
            'colorFuenteCategoria',
            'horaInicioCategoria',
            'horaFinCategoria',
            'lunesCategoria',
            'martesCategoria',
           'miercolesCategoria',
            'juevesCategoria',
            'viernesCategoria',
            'sabadoCategoria',
            'domingoCategoria'
    ];
    
}
