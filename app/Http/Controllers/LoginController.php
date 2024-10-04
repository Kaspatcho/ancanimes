<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        // Validation
        $request->validateWithBag('login', [
            'email' => 'required|email',
            'password' => 'required',
       ]);

        // Attempt to authenticate   
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication successful
            return redirect()->intended(route('anime.index'));
        }

        // Authentication failed
        return back()->withErrors([
            'email' => __('auth.failed')
        ], 'login')->withInput();
    }

    public function signup(Request $request)
    {
        $request->validateWithBag('signup', [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($request->only(['name', 'email', 'password']));
        Auth::login($user);
        return redirect()->intended(route('anime.index'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
