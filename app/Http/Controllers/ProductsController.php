<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        

        $cartTotalQuantity = null;

        if (Auth::check()) {
            $cartTotalQuantity = CartItem::totalQuantity();
        }

        return view('products.products', compact('products', 'cartTotalQuantity'));
    }




    public function product()

    {
        $products = Product::all();
        $cartTotalQuantity = null;

        if (Auth::check()) {
            $cartTotalQuantity = CartItem::totalQuantity(); // Méthode pour récupérer le nombre total de produits dans le panier
        }

        return view('products.pr', compact('products', 'cartTotalQuantity'));
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        if (Auth::check()) {
            $userId = Auth::id();

            $existingCartItem = CartItem::where('user_id', $userId)
                ->where('product_id', $id)
                ->first();

            if ($existingCartItem) {
                $existingCartItem->quantity++;
                $existingCartItem->save();
            } else {
                $cartItem = new CartItem();
                $cartItem->user_id = $userId;
                $cartItem->product_id = $id;
                $cartItem->quantity = 1;
                $cartItem->save();
            }
        } else {
            // Utilisateur non connecté
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "product_name" => $product->product_name,
                    "photo" => $product->photo,
                    "price" => $product->price,
                    "quantity" => 1
                ];
            }

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request, $itemId)
    {
        $cartItem = CartItem::find($itemId);

        if ($cartItem) {
            $quantity = $request->input('quantity');

            if ($quantity >= 1) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
            }
        }

        // Répondre avec une réponse JSON si nécessaire
        return response()->json(['success' => true]);
    }


    public function remove(Request $request)
    {
        $itemId = $request->input('itemId');
        $cartItem = CartItem::find($itemId);

        if ($cartItem) {
            $cartItem->delete();
        }

        // Rediriger vers la page du panier ou une autre page appropriée
        return redirect()->route('cart');
    }



    public function viewcart()
    {


        $cartTotalQuantity = CartItem::totalQuantity(); // Récupérer le nombre total de produits dans le panier

        $cartItems = CartItem::where('user_id', Auth::id())->get();
        return view('products.cart', compact('cartItems', 'cartTotalQuantity'));
    }


    /*public function edit($id)
    {
        $product = Product::find($id);
        return view('admine.edit', compact('product'));
    }*/
    public function edit($id)
    {
        $product = Product::find($id);
    
        // Vérifiez si le produit existe
        if (!$product) {
            abort(404); // Gérer le cas où le produit n'est pas trouvé
        }
    
        return view('admine.edit', compact('product'));
    }
    
    
    

    public function updat(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->product_name = $request->input('product_name');
            $product->product_description = $request->input('product_description');
            $product->price = $request->input('price');

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path('img');
                $file->move($destinationPath, $fileName);
                $product->photo = $fileName;
            }

            $product->save();

            return redirect()->route('dashboard_admin')->with('success', 'Le produit a été modifié avec succès.');
        } else {
            return redirect()->route('dashboard_admin')->with('error', 'Le produit n\'existe pas.');
        }
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('dashboard_admin')->with('success', 'Le produit a été supprimé avec succès.');
        } else {
            return redirect()->route('dashboard_admin')->with('error', 'Le produit n\'existe pas.');
        }
    }


    public function create()
{
    return view('admine.createPro');
}


public function store(Request $request)
{
    $request->validate([
        'product_name' => 'required',
        'product_description' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
    ]);

    $product = new Product();
    $product->product_name = $request->input('product_name');
    $product->product_description = $request->input('product_description');
    $product->price = $request->input('price');

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path('img');
        $file->move($destinationPath, $fileName);
        $product->photo = $fileName;
    }

    $product->save();

    return redirect()->route('dashboard_admin')->with('success', 'Le produit a été ajouté avec succès.');
}

}
