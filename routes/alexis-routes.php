<?php
use App\Models\Sex;

Route::view('welcome', 'welcome');

Route::view('login', 'login');

Route::view('selectRole', 'selectRole');

Route::get('/signUp', function () {
    return view('signUp', [
        'sexos' => Sex::all(),
        'rol' => request('rol'),
    ]);
});
