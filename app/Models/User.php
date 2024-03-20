<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id'; // Define the primary key
    protected $fillable = [ // Specify which attributes are mass assignable
        'email',
        'password_hash',
        'username',
        'full_name',
        'address',
        'phone_number',
        'cin',
        'user_type',
        'profile_picture_path',
        'date_registered',
        'num_cars_rented',
        'about',
        'facebook_link',
        'instagram_link',
        'whatsapp_link',
        'driver_license',
    ];

    // Define the method to get the password for authentication
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    // Define relationships
    public function cars()
    {
        return $this->hasMany(Car::class, 'owner_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'renter_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'rated_by');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'reported_user_id');
    }
}
