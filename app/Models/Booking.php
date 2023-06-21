<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    //Define the table name
    protected $table = 'booking';

    //Define the fillable columns
    protected $fillable = [
        'client_id',
        'hour_id',
        'date_creation'
    ];

    //Define the relationship with the hours
    public function hour()
    {
        return $this->belongsTo(Hour::class);
    }

    //Define the relationship with the clients
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
