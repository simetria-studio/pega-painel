<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return response()->json([
                'message' => 'Authorized'
            ], 200);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
