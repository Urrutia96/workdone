<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Email or password incorrect']);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
