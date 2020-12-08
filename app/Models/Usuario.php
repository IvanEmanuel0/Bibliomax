<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function rango()
    {
        return $this->belongTo('App\Models\Rango');
    }

    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado');
    }


}
