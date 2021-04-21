<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\{
    Request, JsonResponse
};
use Illuminate\Support\Facades\{
    Auth
};

use App\Models\{
    User
};

class LoginController extends Controller
{
    function login(Request $request) : JsonResponse 
    {
        $find = User::select("id")->where("email", $request->email)->first();
        if($find){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([]);
            }

            return response()->json([
                "message" => "Email and password does not match!"
            ], 401);
        }
        
        return response()->json([
            "message" => "User does not exist!"
        ], 401);
        
    }

    function register(Request $request) : JsonResponse 
    {
        $find = User::select("id")->where("email", $request->email)->first();
        if($find){
            return response()->json([
                "message" => "User already exist! Please use sign in instead."
            ], 401);
        }
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at = date("Y-m-d H:i:s");
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();

        Auth::loginUsingId($user->id);

        return response()->json([]);
    }

    function logout(){
        if(Auth::check()){
            Auth::logout();
        }

        return redirect()->route("home");
    }
}