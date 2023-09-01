<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreCategoria',
        'establecimiento_id'
    ];
    
    public function menus() 
    {
        return $this->hasMany(Menu::class);
    }

    public function establecimiento()
    {
        return $this->belongsTo(establecimiento::class);
    }
}
