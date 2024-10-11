<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function showregister(){
        return view('Auth.register');
    }

    public function register(Request $req){

        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $validation['password'] = bcrypt($validation['password']);
        $data = User::create($validation);
        return redirect('login');

    }
    public function showlogin(){
        return view('Auth.login');
    }

    public function login(Request $req){
        $validation = $req->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
        if(Auth::attempt($validation)){
            return redirect('data');
        }
        return back()->withErrors(['loginError' => 'Invalid credentials']);

    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
