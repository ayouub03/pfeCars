<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'car_id';
    protected $fillable = [
        'make',
        'model',
        'year',
        'license_plate',
        'price_per_day',
        'capacity',
        'fuel_type',
        'odometer',
        'insurance_expiration_date',
        'owner_id',
        'status',
        'description',
        'car_image',
        'car_features',
        'date_added',
        'times_rented',
    ];

    // Define the relationship with the User model (a car belongs to a user)
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'car_id');
    }
}
