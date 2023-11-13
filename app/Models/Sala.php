<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    public function Clientes()
        {
            return $this->hasMany(Cliente::class);
        }
     
    public function Peliculas()
        {
            return $this->belongsTo(Pelicula::class);
        }
}
