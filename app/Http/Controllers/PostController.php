<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Follower, User, Post, Comments };
use Auth;
use DB;
use Hash;

class PostController extends Controller
{
    function fetch_user_posts(Request $request){
        $posts = Post::select(
                "posts.id", "posts.description", "posts.created_by", DB::raw("DATE_FORMAT(posts.created_at, '%b %d, %Y - %r') as created_at_string"), "usr.avatar", "usr.name", "usr.id as user_id"   
            )
            ->where("created_by", $request->id)
            ->leftJoin("users as usr", "usr.id", "=", "posts.created_by")
            ->orderBy("posts.created_at", "desc")
            ->get();

        return response()->json([ "data" => $posts, "can_edit" => (Auth::id() == $request->id)]);
    }

    function fetch_following_posts(Request $request){
        $following = Follower::select("user_id as created_by")->where("user_follower_id", Auth::id())->get();
        $posts = Post::select(
                "posts.id", "posts.description", "posts.created_by", DB::raw("DATE_FORMAT(posts.created_at, '%b %d, %Y - %r') as created_at_string"), "usr.avatar", "usr.name", "usr.id as user_id"       
            )
            ->leftJoin("users as usr", "usr.id", "=", "posts.created_by")
            ->whereIn("posts.created_by", $following)
            ->orderBy("posts.created_at", "desc")
            ->get();

        return response()->json([ "data" => $posts ]);
    }

    function fetch_post_threads(Request $request){
        $comments = Comments::select(
                "comments.id", "comments.description", "comments.created_by", DB::raw("DATE_FORMAT(comments.created_at, '%b %d, %Y - %r') as created_at_string"), "usr.avatar", "usr.name", "usr.id as user_id",
                DB::raw("IF(comments.created_by=".Auth::id().", 1, 0) as can_edit")
            )
            ->where("post_id", $request->id)
            ->leftJoin("users as usr", "usr.id", "=", "comments.created_by")
            ->orderBy("comments.created_at", "desc")
            ->get();

        return response()->json([ "data" => $comments ]);
    }

    function view(Request $request)
    {
        $post = Post::select(
            "posts.id", "posts.description", "posts.created_by", DB::raw("DATE_FORMAT(posts.created_at, '%b %d, %Y - %r') as created_at_string"), "usr.avatar", "usr.name", "usr.id as user_id"       
        )
        ->leftJoin("users as usr", "usr.id", "=", "posts.created_by")
        ->find($request->id);

        $data = [
            "page" => [
                "title" => "Post",
                "breadcrumbs" => []
            ],
            "post" => $post
        ]; 

        if($post){
            return view('auth.feed.post', $data);
        }else{
            return abort(404);
        }
    }

    
    function create_thread(Request $request)
    {
        Comments::insert([
            "post_id" => $request->id,
            "description" => $request->comment,
            "created_by" => Auth::id(),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);

        return response()->json([]);
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

    function comment_edit(Request $request)
    {
        $comment = Comments::find($request->comment_id);
        if($comment){
            $comment->description = $request->comment_edit;
            $comment->updated_at = date("Y-m-d H:i:s");
            $comment->save();
        }

        return response()->json([]);
    }

    function comment_delete(Request $request)
    {
        $comment = Comments::find($request->comment_id);
        if($comment){
            $comment->delete();
        }

        return response()->json([]);
    }

    function search_posts(Request $request){
        $posts = Post::select(
            "posts.id", "posts.description", "posts.created_by", DB::raw("DATE_FORMAT(posts.created_at, '%b %d, %Y - %r') as created_at_string"), "usr.avatar", "usr.name", "usr.id as user_id"       
        )
        ->whereRaw("posts.description LIKE '%{$request->keyword}%'")
        ->leftJoin("users as usr", "usr.id", "=", "posts.created_by")
        ->get();

        $data = [
            "page" => [
                "title" => "Searched Posts",
                "breadcrumbs" => []
            ],
            "posts" => $posts
        ]; 

        return view('auth.feed.search', $data);
    }
}
