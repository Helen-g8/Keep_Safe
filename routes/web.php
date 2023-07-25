<?php

use App\Models\Role;
use App\Models\Sex;
use App\Models\User;
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

Route::post('/signUp', function () {
    $attributes = request()->validate([
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'age' => 'required|integer|max_digits:2|min:15',
        'dui' => 'required|integer|max_digits:9|min_digits:9',
        'phone' => 'required|interger|max-digits:8|min_digits:8',
        'email' => 'required|email|max:255',
        'password' => 'required|string|confirmed|max:255',
        'role_id' => 'required|integer|exists:roles,id',
        'sex_id' => 'required|integer|exists:sexes,id',
    ]);

    $user = User::create($attributes);

    Auth::login($user);
    request()->session()->regenerate();

    return redirect('/home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/selectRole', function () {
    return view('selectRole');
});
