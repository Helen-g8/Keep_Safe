<?php
use App\Models\RentalLocation;
use App\Models\Student;
use App\Models\User;

Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:200',
        'password' => 'required|string|max:200',
    ]);

    if (Auth::attempt($attributes)) {
        request()->session()->regenerate();

        if (Auth::user()->role->name == 'Arrendador') {
            return redirect('/arrendadorHome');
        } else {
            return redirect('/mostrarArrendamientos');
        }
    }

    return back()->WithErrors([
        'email' => 'Cuenta no encontrada'
    ]);
})->name('login');

Route::post('/signup', function () {
    $attributes = request()->validate(
        [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'role_id' => 'required|integer|exists:roles,id',
            'sex_id' => 'required|integer|exists:sexes,id',
            'dui' => 'required|integer|max_digits:9|min_digits:9',
            'phone' => 'required|integer|max_digits:8|min_digits:8',
            'age' => 'required|integer|max_digits:2|min_digits:2',
            'password' => 'required|string|confirmed|max:255',
        ]
    );

    if ($user = User::create($attributes)) {
        Auth::login($user);
        request()->session()->regenerate();
        return redirect('/profile');
    }
    return back()->WithErrors();
});

Route::post('/rental/create', function () {
    $attributes = validateRentalAttributes();

    $RentalLocation = RentalLocation::create($attributes);

    return redirect('rental/' + $RentalLocation->id);
});


//{rental}
Route::patch('/rental/{rental}', function (RentalLocation $rental) {
    if ($rental->user_id != Auth::user()->id) {
        return '/';
    }

    $attributes = validateRentalAttributes();

    $rental->update($attributes);

    return redirect('rental/' + $rental->id);
});

function validateRentalAttributes()
{
    return request()->validate([
        'user_id' => 'required|numeric|exists:users,id',
        'rooms' => 'required|integer|min:1|max:25',
        'coordinates' => 'required|string|max:255',
        'district_id' => 'required|numeric|exists:districts,id',
        'address' => 'required|string|max:255',
        'price' => 'required|integer|min:50|max:500',
    ]);
}

Route::view('profile', 'profile');

Route::get('/profile', function () {
    return view('profile', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');