<?php
use App\Models\RentalLocation;
use App\Models\Sex;

Route::view('welcome', 'welcome');

Route::view('login', 'login');

Route::view('card', 'card');

Route::view('selectRole', 'selectRole');

Route::get('signUp', function () {
    return view('signup', [
        'sexos' => Sex::all(),
        'rol' => request('rol'),
    ]);
});

Route::get('mostrarArrendamientos', function () {
    return view('mostrarArrendamientos', [
        'arrendamientos' => RentalLocation::all()
    ]);
});

Route::view('activeRentals', 'activeRentals');

Route::view('arrendadorHome', 'arrendadorHome');

Route::get('pupilaje/{rental}', function (RentalLocation $rental) {
    return view('arrendamiento', [
        'arrendamiento' => $rental,
    ]);
})->name('arrendamiento');
