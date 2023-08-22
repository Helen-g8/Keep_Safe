<?php
use App\Models\Condition;
use App\Models\District;
use App\Models\Sex;
use App\Models\State;
use App\Models\Town;

Route::view('rentalInformation', 'rentalInformation', [
    'districts' => District::all(),
    'states' => State::all(),
    'towns' => Town::all(),
    'conditions' => Condition::all(),
]);

Route::post('rentalInformation', function () {
    $attributes = request()->validate([

    ]);
});
