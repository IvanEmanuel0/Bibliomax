<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    public function prestamos()
    {
        $this->hasMany("App\Models\Prestamo");
    }

    public function autors()
    {
        $this->belongsToMany("App\Models\Autor");
    }

    public function genero()
    {
        $this->belongsTo("App\Models\Genero");
    }

}
