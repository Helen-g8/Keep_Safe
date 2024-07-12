<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class RentalLocation extends Model
{
    use HasFactory, BelongsToThrough;

    protected $fillable = ['user_id', 'rooms', 'coordinates', 'district_id', 'address', 'price', 'image'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($rentalLocation) {
            $rentalLocation->image = 'casa_' . rand(1, 5) . '.jpg';
        });
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function town() {
        return $this->belongsToThrough(Town::class, District::class);
    }

    public function state() {
        return $this->belongsToThrough(State::class, [Town::class, District::class]);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rentalReviews(){
        return $this->hasMany(RentalReview::class);
    }

    public function conditions()
    {
        return $this->belongsToMany(Condition::class)->withPivot('answer');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class)->withPivot('answer');
    }

    public function rules(){
        return $this->hasMany(Rule::class);
    }
}
