<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el inicio de sesión
Route::post('/login', [AuthController::class, 'login']);

// Redirige la página principal (/) al login
Route::get('/', function () {
    return redirect()->route('login');
});
