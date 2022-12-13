<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function compania() { //un videojuego solo puede pertenecer a una compania
        return $this->belongsTo(Compania::class);
    }

    //Tan bien conocido como pivot table 
    // RELACION MUCHOS A MUCHOS  de videojuegos puede estar en varias consolas y varias consolas pueden tener varios videojuego
    public function consolas() {
        return $this->belongsToMany(
            Consola::class,
            'consolas_videojuegos',
            'videojuego_id',
            'consola_id'
        );
    }
}
