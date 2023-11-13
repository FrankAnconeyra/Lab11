<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Compra;
use App\Models\Cliente;

use App\Models\Producto;

class RelacionController extends Controller
{
    public function index() {
       $compras = Compra::all();
       return view('welcome', compact('compras'));
    }
}
