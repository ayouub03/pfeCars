<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'reservation_id';
    protected $fillable = [
        'car_id',
        'renter_id',
        'start_date',
        'end_date',
        'pickup_location',
        'return_location',
        'total_price',
        'status',
    ];

    // Define the relationship with Car model
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    // Define the relationship with User model as renter
    public function renter()
    {
        return $this->belongsTo(User::class, 'renter_id');
    }
}
