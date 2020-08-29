<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index(Request $request)
    {
        // $request->user() returns an instance of the authenticated user...
        if(Auth::check()) {
            //user is authenticated
            return view('dashboard');
        } else {
            return redirect()->intended('login');
        }
    }

}
