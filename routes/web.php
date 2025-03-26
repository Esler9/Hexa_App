<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController; // Importar el controlador de usuarios
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta para proyectos
    Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

    // Rutas para usuarios protegidas por rol de administrador
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('/usuarios', UserController::class)->except(['show']);
    });
});

require __DIR__.'/auth.php';
