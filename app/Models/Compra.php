<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    public function clientes() {
        return $this->belongsTo(Cliente::class, 'clientes_id');
    }
    public function productos() {
        return $this->belongsTo(Producto::class, 'productos_id');
    }
    
}
