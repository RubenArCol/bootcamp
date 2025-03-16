<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index() 
    {
        return "añado uri de prueba";
    }

    public function pruebaVariables($post, $categoria = null)
    {
        if ($categoria){
            return "aquí se mostraria un post (post {$post}) con categoria $categoria";
        }
    
        return "aquí se mostraria un post (post {$post})";
    }
}
