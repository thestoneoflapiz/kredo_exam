<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Follower };
use Auth;


class FollowerController extends Controller
{
    function unfollow(Request $request){
        Follower::where([
            "user_id" => $request->id,
            "user_follower_id" => Auth::id()
        ])->first()->delete();
        
        return redirect()->back();
    }

    function follow(Request $request){
        $following = Follower::where([
            "user_id" => $request->id,
            "user_follower_id" => Auth::id()
        ])->first();

        if($following){

        }else{
            Follower::insert([
                "user_id" => $request->id,
                "user_follower_id" => Auth::id(),
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]);
        }
        
        return redirect()->back();
    }
}
