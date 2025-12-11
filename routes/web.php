<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí se registran todas las rutas de tu aplicación web.
| Cada ruta corresponde a una URL que puede ver el usuario.
| Las rutas simples cargan directamente una vista Blade.
| Más adelante podés reemplazarlas por controladores si hay lógica.
|--------------------------------------------------------------------------
*/

// Página inicial (podés cambiarla después si querés que sea login)
Route::get('/', function () {
    return view('dashboard');
});

// ===============================
// 🔹 RUTAS DEL SISTEMA FARMACÉUTICO
// ===============================

// Login
Route::view('/login', 'login')->name('login');

// Dashboard
Route::view('/dashboard', 'dashboard')->name('dashboard');

// Inventario
Route::view('/inventario', 'inventario')->name('inventario');

// Recepción de productos
Route::view('/recepcion', 'recepcion')->name('recepcion');

// Reportes
Route::view('/reportes', 'reportes')->name('reportes');

// Ventas
Route::view('/ventas', 'ventas')->name('ventas');

// Configuración
Route::view('/configuracion', 'configuracion')->name('configuracion');
