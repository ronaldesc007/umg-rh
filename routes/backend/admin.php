<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resources([
    'deptos'        => 'DeptosController',
    'personal'      => 'EmpleadosController',
    'puestos'       => 'PuestosController',
    'operacion'     => 'OperacionesController',
    'candidatos'    => 'CandidatosController',
    'contratacion'  => 'ContratacionesController'
]);
