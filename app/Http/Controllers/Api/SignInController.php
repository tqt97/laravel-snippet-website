<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __invoke(AuthRequest $request)
    {
        $request->validated();

        $token = auth()->attempt($request->only('email','password'));

        if(!$token){
            return response()->json([
                'errors' => [
                    'email' => 'Could not sign in with your email'
                ]
            ], 422);
        }

        return response()->json([
            'data'=> compact('token')
        ]);
    }
}
