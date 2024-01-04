<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function ajouterProduit(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $panier = $user->panier ?? new Panier();
            $produit = $request->input('produit');

            $panier->user_id = $user->id;
            $panier->produits = json_encode($produit);

            $panier->save();

            return response()->json(['message' => 'Produit ajouté au panier avec succès!']);
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
        }
    
    }   
}
