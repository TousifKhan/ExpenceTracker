<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest');
    }
    
    public function index(Request $request)
    {
        // $request->user() returns an instance of the authenticated user...
        
        //return "AppController@index"; 
        if(Auth::check()) {
            return redirect()->to('authenticated');
        } else {
            return redirect('login');
        }
    }

    public function authenticated(Request $request) {
        $user = $request->user();
        if($user->role === 'admin') {
            return redirect('admin/dashboard');
        } else {
            return redirect('user/dashboard');
        }
    }

}
