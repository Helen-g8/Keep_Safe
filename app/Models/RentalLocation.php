<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalLocation extends Model
{
    use HasFactory;

    public function towns(){
        return $this->belongsTo(Town::class);
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
