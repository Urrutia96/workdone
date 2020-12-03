<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $data = $request->only(['first_name', 'last_name', 'email'])
            +
            [
                'password' => Hash::make($request->password)
            ];
        if (User::create($data)) {
            return view('auth.account-confirmation');
        }

        abort(500);
    }
}
