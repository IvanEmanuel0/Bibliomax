<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo');
    }

    public function editorial()
    {
        return $this->belongsTo('App\Models\Editorial');
    }
    
    public function autors()
    {
        return $this->belongsToMany('App\Models\Autor');
    }

    public function genero()
    {
        return $this->belongsTo('App\Models\Genero');
    }

    

}
