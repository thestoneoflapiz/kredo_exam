<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ User };
use Auth;
use Hash;

class UserController extends Controller
{
    function change_email(Request $request)
    {
        /**
         * Create a db for email change and verification email
         * 
         */
        return response()->json([]);
    }

    function change_password(Request $request)
    {
        $user = User::find(Auth::id());
        if(Hash::check($request->old_password, $user->password)){
            $user->password = bcrypt($request->new_password);
            $user->updated_at = date("Y-m-d H:i:s");
            $user->save();

            Auth::logout();

            return response()->json([]);
        }else{
            return response()->json([], 400);
        }
    }
}
