<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;

    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo');
    }

}
