<?php

use App\Models\Role;
use App\Models\Sex;
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
    return view('welcome');
});

Route::get('/signUp', function () {
    return view('signUp', [
        'sexos' => Sex::all(),
        'rol' => request('rol'),
    ]);
});

Route::post('/signUp', function (){
    $attributes= request()->validate([
        'first_name' => 'required|string|max:100',
        'last_name'=> 'required|string|max:100',
        'age'=> 'required|integer|max_digits:2|min:15',
        'DUI' => 'required|integer|max_digits:9|min_digits:9',
        'phone' => 'required|interger|max-digits:8|min_digits:8'
        ]);
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/selectRole',function(){
    return view('selectRole');
});
