<?php
use App\Models\Condition;
use App\Models\District;
use App\Models\Sex;
use App\Models\State;
use App\Models\Town;
use Symfony\Component\Routing\Route;

Route::get('addLease', function () {
   return view('addLease', [
       'districts' => District::all(),
       'states' => State::all(),
       'towns' => Town::all(),
       'conditions' => Condition::all(),
   ]);
});

Route::post('addLease', function () {
    $attributes = request()->validate([
    ]);
});
