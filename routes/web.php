<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\{ User, Post, Comments, Message, MessageRelation, Follower};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "page" => [
            "title" => "Home"
        ]
    ];

    if(Auth::check()){
        return view("auth.feed.page");
    }

    return view('auth.login', $data);
})->name("home");

Route::get('/register', function () {
    $data = [
        "page" => [
            "title" => "Join us!"
        ]
    ];

    if(Auth::check()){
        return redirect("/");
    }

    return view('auth.register', $data);
})->name("register");

Route::post("login/action", [App\Http\Controllers\LoginController::class, "login"]);
Route::post("register/action", [App\Http\Controllers\LoginController::class, "register"]);

Route::middleware(["auth"])->group(function () {
    Route::get('/post/{id}', function () {
        $data = [
            "page" => [
                "title" => "...Posted"
            ]
        ];

        return view('auth.feed.post', $data);
    })->name("auth.post");

    Route::get('/account', function () {
        $user = User::find(Auth::id());

        if(!$user){
            return abort(404);
        }

        $data = [
            "page" => [
                "title" => "Account",
                "breadcrumbs" => []
            ],
            "user" => $user,
        ]; 
        return view('auth.user.account', $data);
    })->name("auth.user.account");
    Route::post("account/email", [App\Http\Controllers\UserController::class, "change_email"]);
    Route::post("account/details", [App\Http\Controllers\UserController::class, "change_details"]);
    Route::post("account/password", [App\Http\Controllers\UserController::class, "change_password"]);

    Route::get('/profile', function () {
        $user = User::find(Auth::id());

        if(!$user){
            return abort(404);
        }

        $data = [
            "page" => [
                "title" => "Profile",
                "breadcrumbs" => []
            ],
            "user" => $user,
        ]; 

        $data["followers"] = _get_num_followers($user->id);
        $data["following"] = _get_num_following($user->id);

        return view('auth.user.profile', $data);
    })->name("auth.user.profile");

    Route::get('/profile/{id}', function (Request $request) {
        $user = User::find($request->id);

        if(!$user){
            return abort(404);
        }

        $data = [
            "page" => [
                "title" => "Profile",
                "breadcrumbs" => []
            ],
            "user" => $user,
        ]; 

        $followed = Follower::where([
            "user_id" => $request->id,
            "user_follower_id" => Auth::id()
        ])->first();

        $data["is_a_follower"] = $followed ? true : false;
        return view('auth.user.profile', $data);
    })->name("auth.other.profile");
    Route::post("profile/upload", [App\Http\Controllers\UserController::class, "upload"]);
    Route::post("profile/remove", [App\Http\Controllers\UserController::class, "remove_profile_image"]);

    Route::get("sign-out", [App\Http\Controllers\LoginController::class, "logout"]);


    Route::get("posts/{id}", [App\Http\Controllers\PostController::class, "fetch_user_posts"]);
    Route::get("following/posts", [App\Http\Controllers\PostController::class, "fetch_following_posts"]);
    Route::get("post/threads/{id}", [App\Http\Controllers\PostController::class, "fetch_post_threads"]);
    Route::post("post/thread/create/{id}", [App\Http\Controllers\PostController::class, "create_thread"]);
    Route::post("post/create", [App\Http\Controllers\PostController::class, "create"]);
    Route::get("post/view/{id}", [App\Http\Controllers\PostController::class, "view"]);
    Route::post("post/edit", [App\Http\Controllers\PostController::class, "edit"]);
    Route::post("post/delete", [App\Http\Controllers\PostController::class, "delete"]);

    Route::post("comment/edit", [App\Http\Controllers\PostController::class, "comment_edit"]);
    Route::post("comment/delete", [App\Http\Controllers\PostController::class, "comment_delete"]);

    Route::get("search/posts", [App\Http\Controllers\PostController::class, "search_posts"]);
    Route::get("users", [App\Http\Controllers\UserController::class, "fetch_users"]);


    Route::get("unfollow/{id}", [App\Http\Controllers\FollowerController::class, "unfollow"]);
    Route::get("follow/{id}", [App\Http\Controllers\FollowerController::class, "follow"]);
});


/**
 * STATIC PAGES :: BEGIN
 * 
 */

// Route::get('about-us', function () {
//     $data = [
//         "page" => [
//             "title" => "About Us",
//             "breadcrumbs" => [ ]
//         ]
//     ];

//     return view('public.about-us', $data);
// })->name("aboutuspage");

// Route::prefix("services")->group(function(){
//     Route::get('/', function () {
//         $data = [
//             "page" => [
//                 "title" => "Services",
//                 "breadcrumbs" => [ ]
//             ]
//         ];
    
//         return view('public.services.index', $data);
//     })->name("servicespage");

//     Route::get('/{page}', function (Request $request) {
//         $page_name = "Red Boots";
//         switch ($request->page) {
//             case 'example1':
//                 # code...
//                 $page_name = "Cup & Green";
//                 break;

//             case 'example2':
//                 # code...
//                 $page_name = "Yellow Background";
//                 break;

//             case 'example3':
//                 # code...
//                 $page_name = "Shoes & Blue";
//                 break;
//         }

//         $data = [
//             "page" => [
//                 "title" => $page_name,
//                 "breadcrumbs" => [
//                     [
//                         "url" => "/services",
//                         "name" => "Services"
//                     ],
//                     [
//                         "url" => "",
//                         "name" => $page_name
//                     ],
//                 ]
//             ]
//         ];
    
//         return view('public.services.page', $data);
//     })->name("servicespage");
// });

// Route::get('resources', function () {
//     $data = [
//         "page" => [
//             "title" => "Resources",
//             "breadcrumbs" => [ ]
//         ]
//     ];

//     return view('public.resources', $data);
// })->name("resourcespage");

// Route::get('our-offices', function () {
//     $data = [
//         "page" => [
//             "title" => "Our Offices",
//             "breadcrumbs" => [ ]
//         ]
//     ];

//     return view('public.our-offices', $data);
// })->name("ourofficespage");

// Route::prefix("blogs")->group(function(){
//     Route::get('/', function () {
//         $data = [
//             "page" => [
//                 "title" => "Blogs",
//                 "breadcrumbs" => [ ]
//             ]
//         ];
    
//         return view('public.blogs.index', $data);
//     })->name("blogspage");

//     Route::get('/{slug}', function (Request $request) {
//         $data = [
//             "page" => [
//                 "title" => ucwords(str_replace("-", " ", $request->slug)),
//                 "breadcrumbs" => [
//                     [
//                         "url" => "/blogs",
//                         "name" => "Blogs"
//                     ],
//                     [
//                         "url" => "",
//                         "name" => ucwords(str_replace("-", " ", $request->slug))
//                     ]
//                 ]
//             ]
//         ];
    
//         return view('public.blogs.page', $data);
//     })->name("blogspage");
// });

// Route::get('contact-us', function () {
//     $data = [
//         "page" => [
//             "title" => "Contact Us",
//         ]
//     ];

//     return view('public.contact-us', $data);
// })->name("contactuspage");

// /**
//  * Login
//  */
// Route::get("admin", function() {
//     return view("auth.login");
// })->name("auth.admin.login");
