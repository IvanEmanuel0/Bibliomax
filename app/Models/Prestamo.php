<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    public function libro()
    {
        return $this->belongsTo('App\Models\Libro');
    }

    public function afiliado()
    {
        return $this->belongsTo('App\Models\Afiliado');
    }

}
