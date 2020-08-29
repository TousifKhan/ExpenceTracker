<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {
        
        /*
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', [
            'tousif', 'tousif@gmail.com', 'password'
        ]);
        return view('users', ['fatherName' => 'Zahir Khan']);
        */

        $user = new User();
        $user->name = 'asif';
        $user->email = 'asif@gmail.com';
        $user->password = bcrypt('password');
        //$user->save();

        //$users = DB::select('select * from users');
        return view('users', ['fatherName' => 'Zahir Khan']);
    }


    public function list() {
        $users = User::all();
        //$users = DB::select('select * from users');
        return view('users', ['users' => $users]);
    }

}
