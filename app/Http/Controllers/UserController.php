<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;


        if (
            Auth::attempt([
                "name" => $username,
                "password" => $password
            ])
        ) {

            return response()->json([
                'username' => $username,
                'password' => $password,
                'message' => 'User Successfully logged in',
                'status' => true
            ]);
        }


        return response()->json([
            'message' => 'Unable to log in. Please match the credentials'
        ]);

    }

}
