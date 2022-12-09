<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;

    //ESTO HACE QUE LAS COMPANIAS TENGAN VARIOS JUEGOS
    public function videojuegos() { 
        return $this ->hasMany(Videojuego::class);
    }
}
