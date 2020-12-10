<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
       'title',
       'description',
       'price',
       'location',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    // an order could have many products (one to many relationship)
    public function order()
    {
        return $this->belongsToMany(Order::class); //BelongsToMany OU belongTo ??? a voir
    }
}
