<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Check if the account is registered
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return back()->with('error', 'Account is not registered or password is incorrect.');
        }

        $request->session()->regenerate();

        return redirect('/dashboard');
    }
}