<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return $request->all();
    }
}
