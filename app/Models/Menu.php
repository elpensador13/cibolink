<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombrePlatillo',
        'establecimiento_id',
        'categoria_id' ,
        'descripcionPlatillo' ,
        'precioPlatillo' ,
        'imagenPlatillo1' ,
        'imagenPlatillo2' ,
        'ordenPlatillo' ,
        'visiblePlatillo' ,
        'colorFondoMenu' ,
        'colorFuenteMenu' ,
    ];

    public function establecimiento()
    {
        return $this->belongsTo(establecimiento::class);
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}
