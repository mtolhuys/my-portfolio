<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->get('email'))->firstOrFail();

        if (Hash::check($request->get('password'), $user->password)) {
            auth()->login($user);

            return Inertia::render('UserPages/Admin', [
                'user' => $user,
            ]);
        }

        return Inertia::render('UserPages/Login', [
            'error' => 'Invalid password',
        ]);
    }
}
