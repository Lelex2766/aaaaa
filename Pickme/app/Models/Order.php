<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //means that one user could have many orders (reverse one to many)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //means that one order could have many products (one to many)
    public function products()
    {
        return $this->belongsToMany(Products::class, 'order_products');
        // return $this->belongToMany(Products::class)->withPivot('order_products', 'order_id');
        // return $this->belongsToMany(Products::class, 'order_products', 'order_id', 'product_id');
    }

    protected $fillable = ['user_id'];
    // protected $guarded = [];
    // both methods are ok
}
