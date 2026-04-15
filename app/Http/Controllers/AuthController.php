<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.showRegister');
    }
    public function showLogin() {
        return view('auth.showLogin');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);
        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('students.index');
    }

    public function login(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validated)) {
            return redirect()->route('students.index');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('showLogin');
    }
}
