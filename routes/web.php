<?php

use App\Http\Controllers\ArrendamientoController;

Route::get('/mostrarArrendamientos_filtros', [ArrendamientoController::class, 'filtrarArrendamientos'])->name('filtrarArrendamientos');


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('welcome');
});

include 'abner-routes.php';
include 'alexis-routes.php';
include 'bryan-routes.php';
include 'helen-routes.php';
include 'wesly-routes.php';
include 'hugo-routes.php';
include 'josue-routes.php';
include 'elsy-routes.php';

