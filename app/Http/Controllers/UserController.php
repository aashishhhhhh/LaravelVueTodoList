<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        if (session('userAuthentication')) {
            $userSession = true;
        } else {
            $userSession = false;
        }
        return view('welcome', [
            'userSession' => $userSession
        ]);
    }
    public function login(UserRequest $request)
    {



        if (
            Auth::attempt([
                "name" => $request->username,
                "password" => $request->password
            ])
        ) {

            session(['userAuthentication' => true]);

            return response()->json([
                'username' => $request->username,
                'password' => $request->password,
                'message' => 'User Successfully logged in',
                'status' => true
            ]);
        }


        return response()->json([
            'message' => 'Unable to log in. Please match the credentials'
        ]);

    }

}
