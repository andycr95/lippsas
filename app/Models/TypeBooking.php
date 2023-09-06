<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBooking extends Model
{
    use HasFactory;

    protected $table = 'type_booking';

    protected $fillable = [
        'name',
        'weight',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query->where('name', 'like', '%' . $val . '%');
    }

    public function scopeSort($query, $val)
    {
        return $query->orderBy('name', $val);
    }
}
