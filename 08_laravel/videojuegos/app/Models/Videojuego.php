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
}
