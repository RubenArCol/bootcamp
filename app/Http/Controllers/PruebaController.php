<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index() 
    {
        return view('prueba'); //lanza prueba.blade.php (lo carga de la carpeta resources/views)
    }

    public function pruebaVariables($post, $categoria = null)
    {
        // hay que pasarle las variables al documento con un nombre
        if ($categoria){
            return view('pruebas.pruebaVariables', [
                'post' => $post,
                'categoria' => $categoria
            ]);
        }
    
        // el método compact lo hace mas corto
        return view('pruebas.pruebaVariables', compact('post'));
    }
}
