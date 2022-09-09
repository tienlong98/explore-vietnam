<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedTour extends Model
{
    use HasFactory;
    protected $table = 'booked_tours';
    protected $fillable = [
        'user_id',
        'username',
        'tourname',
        'image',
        'total',
        'pp_number',
        'de_date',
        'status',

    ];
}
