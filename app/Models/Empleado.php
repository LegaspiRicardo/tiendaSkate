<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    use HasFactory;
}
