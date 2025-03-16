<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController;

////////////////////////////// Get /////////////////////////////////

// estos get usan controladores (recomendado)
Route::get('/', HomeController::class); // este usa automaticamente el unico metodo del controlador (__invoke)

Route::get('/prueba', [PruebaController::class, 'index']);

Route::get('/prueba/{post}/{categoria?}', [PruebaController::class, 'PruebaVariables']);

// estos usan una funcion callback y se instancian en el mismo archivo
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//////////////////////////////////////////////////////////////////

//Post
//Put
//Patch
//Delete

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
