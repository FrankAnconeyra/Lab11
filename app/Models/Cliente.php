<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function compras() {
        return $this->hasMany(Compras::class, 'id');
    }
    public function productos() {
        return $this->hasMany(Productos::class, 'id');
    }
}
