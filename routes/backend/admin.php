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
Route::get('baja/{empleado}', 'ContratacionesController@baja')->name('contratacion.baja');
Route::patch('confirmar-baja/{empleado}', 'ContratacionesController@confirmar_baja')->name('contratacion.confirmar-baja');
Route::get('iniciar/{empleado}', 'ContratacionesController@iniciar')->name('contratacion.iniciar');
Route::view('contenido', 'backend.contenido')->name('contenido');