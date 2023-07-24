<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function payment(){
        return $this->hasMany(payment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function university(){
        return $this->belongsTo(University::class);
    }

}
