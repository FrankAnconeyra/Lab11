<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function categorias() {
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }
    public function clientes() {
        return $this->hasMany(Clientes::class, 'id');
    }
    public function compras() {
        return $this->hasMany(Compras::class, 'id');
    }
    
}
