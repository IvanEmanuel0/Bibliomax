<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    use HasFactory;

    public function usuarios() {
        $this->belongsToMany("App\Models\Usuario");
    }

}
