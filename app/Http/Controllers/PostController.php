<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ User, Post, Comments };
use Auth;
use Hash;

class PostController extends Controller
{
    function fetch_user_posts(Request $request){

    }

    function fetch_following_posts(Request $request){

    }

    function create(Request $request)
    {
        Post::insert([
            "description" => $request->post_description,
            "created_by" => Auth::id(),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);

        return response()->json([]);
    }

    function edit(Request $request)
    {
        $post = Post::find($request->post_id);
        if($post){
            $post->description = $request->post_description;
            $post->updated_at = date("Y-m-d H:i:s");
            $post->save();
        }

        return response()->json([]);
    }

    function delete(Request $request)
    {
        $post = Post::find($request->post_id);
        if($post){
            $post->delete();
        }

        return response()->json([]);
    }
}
