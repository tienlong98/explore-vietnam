<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'price',
        'name',
        'image',
        'pp_number',
        'de_date',
        'hotel_id',
        'car_id',

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
