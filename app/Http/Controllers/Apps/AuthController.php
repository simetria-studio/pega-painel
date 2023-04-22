<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('app.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login efetuado com sucesso!',
                'redirect' => route('app.index')
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Email ou senha incorretos!'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('app.login');
    }

    public function registerPage()
    {
        return view('app.auth.register');
    }
}
