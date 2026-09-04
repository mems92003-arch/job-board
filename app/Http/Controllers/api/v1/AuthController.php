<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        $credentails = $request->only('email','password');

        $token = JWTAuth::attempt($credentails);

        if(!$token){
            return response()->json(['message' => 'Unauthorized access!'],401);
        }

        return response()->json([
            'access_token' => $token,
            'expires_in' => JWTAuth::factory()->getTTL() * 60
        ]);
        
    }

    public function refresh()
{
    /** @var \Tymon\JWTAuth\JWTGuard $auth */
    $auth = auth('api');

    // إرجاع التوكن الجديد
    return response()->json([
        'message' => 'Token refreshed successfully',
        'refreshed_token' => $auth->refresh(),
        'expires_in' => $auth->factory()->getTTL() * 60
    ]);
}
    

    public function me(){
        $user = auth('api')->user();

        return response()->json($user);
        
    }

    public function logout()
{
    /** @var \Tymon\JWTAuth\JWTGuard $auth */
    $auth = auth('api');
    $auth->logout(true);

    return response()->json(['message' => 'Logged out successfully']);
}
}























































