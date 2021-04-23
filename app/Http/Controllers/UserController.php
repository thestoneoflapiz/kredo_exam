<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ User };
use Auth;
use Hash;
use Storage;
use File;

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

    function change_details(Request $request)
    {
        $user = User::find(Auth::id());
        $user->birthday = $request->birthday ?? null;
        $user->gender = $request->gender ?? null;
        $user->location = $request->location ?? null;
        $user->description = $request->description ?? null;
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();

        return response()->json([]);
    }

    function upload(Request $request){

        $user = User::find(Auth::id());
        $path = "avatars/".(Auth::id()??"0")."/";
        $filename = Auth::id().uniqid().".".$request->file->extension();

        Storage::disk('public_uploads')->putFileAs($path, $request->file, $filename);
        
        $user->avatar = $path.$filename;
        $user->save();

        return response()->json([]);
    }

    function remove_profile_image(Request $request){

        $user = User::find(Auth::id());
        $user->avatar = null;
        $user->save();
        
        return response()->json([]);
    }

    function fetch_users(){
        $users = User::all();

        $data = [
            "page" => [
                "title" => "Users",
                "breadcrumbs" => []
            ],
            "users" => $users
        ]; 

        return view('auth.user.user', $data);
    }
}
