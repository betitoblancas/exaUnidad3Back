<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function mostrar(){
        $libro = Libros::orderBy('edad')->paginate(7);

    return view('datos.index', compact('libro'));
    }

    public function editar(){

        $libro = Libros::all();
    }

    

    public function ver(){

        $libro = Libros::all();
        
    }
}
