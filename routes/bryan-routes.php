<?php

Route::view('places', 'places');

Route::get('/mostrarArrendamientos', function () {
    return view('mostrarArrendamientos', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');

Route::get('/arrendadorHome', function () {
    return view('arrendadorHome', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');

Route::view('activeRentals', 'activeRentals');


Route::get('/activeRentals', function () {
    return view('activeRentals', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');

Route::get('/arrendamieto', function () {
    return view('arrendamieto', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');

Route::get('/places', function () {
    return view('places', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');

Route::get('/rentalinformation', function () {
    return view('rentalinformation', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');


