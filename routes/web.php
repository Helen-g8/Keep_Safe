<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('welcome');
});

include 'abner-routes.php';
include 'alexis-routes.php';
include 'bryan-routes.php';
include 'helen-routes.php';
include 'wesly-routes.php';
include 'hugo-routes.php';
include 'elsy-routes.php';
include 'josue-routes.php';
