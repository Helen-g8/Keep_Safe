<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class District extends Model
{
    use HasFactory;

    public function town(){
        return $this->belongsTo(Town::class);
    }
}
