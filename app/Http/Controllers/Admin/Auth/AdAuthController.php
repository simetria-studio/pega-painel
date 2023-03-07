<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdAuthController extends Controller
{

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            return response()->json([
                'message' => 'Authorized'
            ], 200);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }

    public function store(Request $request)
    {
       

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($admin, 201);
    }
}
