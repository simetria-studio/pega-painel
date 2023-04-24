<?php

namespace App\Http\Controllers\Apps;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function create()
    {
        return view('dashboard.add-user');
    }

    public function register(Request $request)
    {
        // dd($request->all());


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 1,
            'permission' => 1,
        ]);


        return response()->json($user);
    }
}
