<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    //Define the table name
    protected $table = 'documents';

    //Define the fillable columns
    protected $fillable = [
        'name',
        'description',
        'file_url',
        'client_id',
    ];

    //Define the relationship with the client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
