<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    public function afiliados()
    {
        $this->belongsTo("App\Models\Afiliado");
    }

    public function libros()
    {
        $this->belongsTo("App\Models\Libro");
    }

}
