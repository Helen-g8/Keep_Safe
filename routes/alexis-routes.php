<?php
use App\Models\RentalLocation;
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
