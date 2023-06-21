<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    //Define the table name
    protected $table = 'hours';

    //Define the fillable columns
    protected $fillable = [
        'hour',
    ];

    //Define the relationship with the bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
