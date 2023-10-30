<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
            ]);

            $credentials = request(['email','password']);
            if(!Auth::attempt($credentials))
            {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ],401);
            }

            $user = $request->user();
            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
            'success' => true,
            'message' => 'Logged in successfully',
            'accessToken' =>$token,
            ], 200);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|string',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user->save()){
            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
            'success' => true,
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Sucessfully logged out',
        ], 200);
    }

}
