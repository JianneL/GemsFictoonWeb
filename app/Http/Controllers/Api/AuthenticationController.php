<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        $validated_data = $loginRequest->validated();

        $user = User::where('email', $validated_data['email'])->first();

        if (!$user || !Hash::check($validated_data['password'], $user->password)) {
            return response()->json([
                'error' => [
                    'user' => 'Provided credentials are invalid. Please check if your credentials are correct then try again.',
                ]
            ], 401);
        }

        return response()->json([
            'authToken' => $user->createToken($loginRequest->header('User-Agent'))->plainTextToken,
        ]);
    }

    public function register(RegisterRequest $request):JsonResponse
    {
        $validated_data = $request->validated();

        DB::transaction(function () use($validated_data){    
            return User::create([
                 'username' => $validated_data['username'],
                 'email' => $validated_data['email'],
                 'password' => Hash::make($validated_data['password']),
                 'usertype'=>$validated_data['usertype']
             ]);
         });

        return response()->json([
            'message'=>'Registration Successful'
        ]);
    }

    public function checkAuth(Request $request)
    {
        if ($request->user() == null) {
            return response()->json([
                'status' => false,
            ]);
        } else {
            return response()->json([
                'status' => true,
            ]);
        }
    }
}
