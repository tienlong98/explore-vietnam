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
        'hotel_id',
        'car_id',
        'status',

    ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
