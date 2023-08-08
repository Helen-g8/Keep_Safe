<?php
use App\Models\RentalLocation;
use App\Models\User;

Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max200',
        'password' => 'required|string|max:200',
    ]);

    if (Auth::attempt($attributes)) {
        request()->session()->regenerate();

        return redirect('/home');
    }

    return back()->WithErrors([
        'email' => 'Cuenta no encontrada'
    ]);
});

Route::post('/signUp', function () {
    $attributes = request()->validate([
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'age' => 'required|integer|max_digits:5|min_digits:1',
        'dui' => 'required|integer|max_digits:9|min_digits:9',
        'phone' => 'required|integer|max-digits:8|min_digits:8',
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

Route::post('/rental/create', function(){
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

function validateRentalAttributes() {
    return request()->validate([
        'user_id' => 'required|numeric|exists:users,id',
        'rooms' => 'required|integer|min:1|max:25',
        'coordinates' => 'required|string|max:255',
        'district_id'=>'required|numeric|exists:districts,id',
        'address' => 'required|string|max:255',
        'price' => 'required|integer|min:50|max:500',
    ]);
}
