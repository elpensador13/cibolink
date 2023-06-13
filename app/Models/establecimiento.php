<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establecimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreEstablecimiento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
