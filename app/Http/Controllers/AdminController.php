<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function getUsers()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admine.users')->with('users', $users);
    }
 
    public function getAllContacts()
    {
        $contacts = Contact::all();
        return view('admine.contacts')->with('contacts', $contacts);
    }


    public function dashboard()
    {
        $userCount = User::count();
    // ...

    return view('admine.dashboard', ['userCount' => $userCount]);
    }
    
}
