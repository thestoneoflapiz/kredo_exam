<?php
use App\Models\{ User, Follower };

if (! function_exists('_get_num_followers')) {
    function _get_num_followers($userID) {
        $followers = Follower::select("id")
            ->where("user_id", $userID)->get()->count();

        return $followers;
    }
}

if (! function_exists('_get_num_following')) {
    function _get_num_following($userID) {
        $following = Follower::select("id")
            ->where("user_follower_id", $userID)->get()->count();

        return $following;
    }
}