<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype=='user') {
                return redirect()->route('/');
            }
            else if($usertype=='admin') {
                return view('admine.dashboard');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function logout()
{
    Auth::logout();
    return redirect()->route('/');
}
   
}
