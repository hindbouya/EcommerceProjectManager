<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{

 public function index(){
    $cartTotalQuantity = null;

    if (Auth::check()) {
            $cartTotalQuantity = CartItem::totalQuantity();
    }; // Méthode pour récupérer le nombre total de produits dans le panier

    return view('products.contact', compact('cartTotalQuantity'));
 }

 public function store(Request $request)
 {
     $validatedData = $request->validate([
         'fullname' => 'required',
         'email' => 'required|email',
         'phonenumber' => 'required',
         'message' => 'required',
     ]);
 
     Contact::create($validatedData);
 
     return redirect()->back()->with('success', 'Contact created successfully');
 }
 
}
