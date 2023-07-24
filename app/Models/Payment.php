<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Payment extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function rentalLocation(){
        return $this->belongsTo(Rentallocation::class);
    }
}
