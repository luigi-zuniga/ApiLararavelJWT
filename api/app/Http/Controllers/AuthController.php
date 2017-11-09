<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['except'=>'getLogout']);
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        $token = null;

        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json(['error' => 'invalid credential']);
            }
        }catch(JWTException $ex){
            return response()->json(['error' => 'something went wrong'],500);
        }
        return response()->json(compact('token'));
    }
}
