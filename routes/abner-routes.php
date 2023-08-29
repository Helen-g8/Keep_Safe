<?php
use App\Models\Condition;
use App\Models\District;
use App\Models\State;
use App\Models\Town;
use App\Models\Service;

Route::get('addLease', function () {
   return view('addLease', [
       'districts' => District::all(),
       'states' => State::all(),
       'towns' => Town::all(),
       'conditions' => Condition::all(),
       'services' => Service::all(),
   ]);
});

Route::post('addLease', function () {
    $attributes = request()->validate([
    ]);
});
