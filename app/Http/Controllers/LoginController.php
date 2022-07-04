<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginpage(){
        return view('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            if(Auth::user()->level == "admin" ){
                return redirect('/dashboardadmin');
            }
            return redirect('/homepage2');
        }
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard');
    }

    public function register(Request $request){
        $input = $request->all();

        $request->validate([
            'email' => ['required', 'unique:users'],
            'name' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'gender' => ['required'],
            'password' => ['required']
        ]);

        $input['level'] = "customer";
        $input['password'] = Hash::make($input['password']);
        $input['remember_token'] = Str::random(60);

        User::create($input);

        return redirect()->route('login');
    }

    public function change_password()
    {

    }
}
