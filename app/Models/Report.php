<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'report_id';

    protected $fillable = [
        'report_text',
        'reported_user_id',
        'reporter_user_id',
        'action_taken',
        'report_time',
    ];

    protected $casts = [
        'report_time' => 'datetime',
    ];

    // Define the relationships
    public function reportedUser()
    {
        return $this->belongsTo(User::class, 'reported_user_id');
    }

    public function reporterUser()
    {
        return $this->belongsTo(User::class, 'reporter_user_id');
    }
}
