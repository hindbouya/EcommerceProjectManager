<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public static function totalQuantity()
    {
        // Ici, vous devez mettre la logique pour calculer le nombre total de produits dans le panier
        // Cela dépend de votre propre implémentation de la gestion du panier

        // Par exemple, si vous utilisez une colonne "quantity" pour enregistrer la quantité de chaque produit dans le panier, vous pouvez faire ce qui suit :

        return self::distinct()->count('product_id');
    }
}