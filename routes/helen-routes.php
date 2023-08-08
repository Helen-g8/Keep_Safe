<?php
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
