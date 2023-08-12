<?php
use App\Models\RentalLocation;
use App\Models\Sex;

Route::view('welcome', 'welcome');

Route::view('signUp', 'signUp');

Route::view('selectRole', 'selectRole');

Route::get('/login', function () {
    return view('login', [
        'sexos' => Sex::all(),
        'rol' => request('rol'),
    ]);
});

Route::get('mostrarArrendamientos', function () {
    return view('mostrarArrendamientos', [
        'arrendamientos' => RentalLocation::all()
    ]);
});

Route::get('pupilaje/{rental}', function (RentalLocation $rental) {
    return view('arrendamiento', [
        'arrendamiento' => $rental,
    ]);
})->name('arrendamiento');
