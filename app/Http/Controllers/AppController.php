<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AccessHistory;

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
        
        AccessHistory::create([
            'user_id' => $user->id,
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);

        if($user->role === 'admin') {
            return redirect('admin/dashboard');
        } else {
            return redirect('user/dashboard');
        }
    }

}
