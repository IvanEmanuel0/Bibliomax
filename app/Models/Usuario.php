<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function rangos(){
        $this->hasOne("App\Models\Rango");
    }

    public function empleados() {
        $this->belongsTo("App\Models\Empleado");
    }

}
