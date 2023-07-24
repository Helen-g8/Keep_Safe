<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalReview extends Model
{
    use HasFactory;

    public function retallocation(){
        return $this->belongsTo(RentalLocation::class);
    }
}
