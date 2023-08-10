<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class RentalLocation extends Model
{
    use HasFactory, BelongsToThrough;

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function town() {
        return $this->belongsToThrough(Town::class, District::class);
    }

    public function state() {
        return $this->belongsToThrough(State::class, [Town::class, District::class]);
    }

    public function Payment(){
        return $this->hasMany(Payment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rentalreview(){
        return $this->hasMany(RentalReview::class);
    }

    public function rule(){
        return $this->hasMany(Rule::class);
    }
}
