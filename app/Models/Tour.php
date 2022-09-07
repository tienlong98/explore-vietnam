<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $fillable = [
        'name',
        'slug',
        'image',
        'cate_id',
        'short_descripsition',
        'descripsition',
        'departure_date',
        'regular_price',
        'sale_price',
        'tax',
        'qty',
        'featured',
        'trending',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
