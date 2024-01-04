<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Utilisateur non inscrit, rediriger ou afficher un message d'erreur
            return redirect()->route('register')->with('error', 'Vous devez vous inscrire pour ajouter des produits au panier.');

        }
       

        return $next($request);
    }
}
