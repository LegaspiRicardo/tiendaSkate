<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }

    public function compras()
    {
        return $this->belongsToMany(Compra::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }


    public function empleados()
    {
        return $this->belongsToMany(Empleado::class);
    }

    use HasFactory;
}
