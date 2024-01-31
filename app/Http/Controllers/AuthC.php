<?php

namespace App\Http\Controllers;

use App\Models\UserM;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthC extends Controller
{
    public function login(Request $req)
    {
        $x["title"] = "Masuk";
        $x["page"] = "login";
        return view("apps", $x);
    }

    public function loginAttempt(Request $req)
    {
        $credentials = $req->only('email', 'password');
        $remember = $req->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/car');
        } else {
            return redirect()->back()->withErrors(['message' => 'Email atau Password salah']);
        }
    }

    public function register()
    {
        $x["title"] = "Registrasi";
        $x["page"] = "register";
        return view("apps", $x);
    }


    public function registerAttempt(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'sim' => 'required',
        ]);
        if ($validatedData) {
            UserM::create([
                'name' => $validatedData['name'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'phone' =>  $validatedData['phone'],
                'sim' => $validatedData['sim'],
            ]);
        }
        return redirect()->to('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
