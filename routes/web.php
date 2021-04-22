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
        $user = User::select(
            "id", "email", "password", "email_verified_at"
        )->find(Auth::id());

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

    Route::get('/profile/{id}', function () {
        $user = User::select(
            "id", "email", "password", "email_verified_at"
        )->find(Auth::id());

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
        return view('auth.user.profile', $data);
    })->name("auth.other.profile");
    Route::post("profile/upload", [App\Http\Controllers\UserController::class, "upload"]);
    Route::post("profile/remove", [App\Http\Controllers\UserController::class, "remove_profile_image"]);

    Route::get("sign-out", [App\Http\Controllers\LoginController::class, "logout"]);


    Route::post("post/create", [App\Http\Controllers\PostController::class, "create"]);
    Route::post("post/edit", [App\Http\Controllers\PostController::class, "edit"]);
    Route::post("post/delete", [App\Http\Controllers\PostController::class, "delete"]);
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
