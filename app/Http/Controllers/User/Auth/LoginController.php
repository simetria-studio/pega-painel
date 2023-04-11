<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $update_token['access_token'] = (string) \Str::uuid();
        $update_token['token_expires_in'] = date('Y-m-d H:i:s', strtotime('+24 Hours'));

        $remember = $request->remember ? true : false;

        $authValid = Auth::guard('web')->validate(['email' => $request->email, 'password' => $request->password]);

        if ($authValid) {
            User::where('email', $request->email)->update($update_token);

            return response()->json(['access_token' => base64_encode($request->email . ':' . $update_token['access_token']), 'token_expires_in' => $update_token['token_expires_in']]);
        } else {
            return response()->json('Email ou Senha incorretos!', 422);
        }
    }
}
