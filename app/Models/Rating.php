<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $primaryKey = 'rating_id';
    protected $fillable = [
        'reservation_id',
        'rated_by',
        'rating',
        'comment',
    ];

    // Define relationships
    public function owner()
    {
        return $this->belongsTo(User::class, 'rated_by');
    }

    public function renter()
    {
        return $this->belongsTo(User::class, 'rated_by');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'reservation_id');
    }
}
