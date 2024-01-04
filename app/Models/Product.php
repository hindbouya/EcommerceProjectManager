<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'photo', 'price', 'product_description']; 


public function cartItems(): HasMany
{
    return $this->hasMany(CartItem::class);
}
}
