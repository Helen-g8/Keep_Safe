<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    
    public function rental_locations()
    {
        return $this->belongsToMany(RentalLocation::class)->withPivot('answer');
    }
}
