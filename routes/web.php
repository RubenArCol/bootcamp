<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Get
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/prueba', function () {
    return "añado uri de prueba";
});

Route::get('/prueba/{post}/{categoria?}', function ($post, $categoria = null) {

    if ($categoria){
        return "aquí se mostraria un post (post {$post}) con categoria $categoria";
    }

    return "aquí se mostraria un post (post {$post})";
});

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
