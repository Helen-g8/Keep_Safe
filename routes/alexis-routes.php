<?php
use App\Models\Condition;
use App\Models\District;
use App\Models\RentalLocation;
use App\Models\Sex;
use App\Models\State;
use App\Models\Town;
use App\Models\University;

Route::view('welcome', 'welcome');

Route::view('Tchat', 'Tchat ');

Route::view('login', 'login');

Route::view('chat', 'chat');

Route::view('activeL', 'activeL');


Route::view('card', 'card');

Route::view('selectRole', 'selectRole');

Route::get('signUp', function () {
    return view('signup', [
        'sexos' => Sex::all(),
        'rol' => request('rol'),
        'universities' => University::all(),
        'districts' => District::all(),
        'states' => State::all(),
        'towns' => Town::all(),
    ]);
});

Route::get('mostrarArrendamientos', function () {
    return view('mostrarArrendamientos', [
        'arrendamientos' => RentalLocation::all()
    ]);
})->name('mostrar_arrendamientos');

Route::view('activeRentals', 'activeRentals');

Route::view('chat', 'chat');

Route::view('profile', 'profile');




Route::get('pupilaje/{rental}', function (RentalLocation $rental) {
    return view('arrendadorHome', [
        'arrendamiento' => $rental,
    ]);
});

Route::get('arrendadorHome', function () {
    return view('arrendadorHome', [
        'arrendamientos' => RentalLocation::all()
    ]);
})->name('arrendador_home');


Route::view('otherLeases', 'otherLeases');

Route::get('pupilaje/{rental}', function (RentalLocation $rental) {
    return view('arrendamiento', [
        'arrendamiento' => $rental,
    ]);
})->name('arrendamiento');


Route::post('logout', function() {
    Auth::logout();
    return redirect('welcome');
});
