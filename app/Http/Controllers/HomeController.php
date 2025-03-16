<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // metodo que se usa automaticamente al invocarlo en web.php
    public function __invoke()
    {
        return view('welcome');
    }
}
