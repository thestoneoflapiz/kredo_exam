<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

    return view('public.landing', $data);
})->name("homepage");

Route::get('about-us', function () {
    $data = [
        "page" => [
            "title" => "About Us",
            "breadcrumbs" => [ ]
        ]
    ];

    return view('public.about-us', $data);
})->name("aboutuspage");

Route::prefix("services")->group(function(){
    Route::get('/', function () {
        $data = [
            "page" => [
                "title" => "Services",
                "breadcrumbs" => [ ]
            ]
        ];
    
        return view('public.services.index', $data);
    })->name("servicespage");

    Route::get('/{page}', function (Request $request) {
        $page_name = "Red Boots";
        switch ($request->page) {
            case 'example1':
                # code...
                $page_name = "Cup & Green";
                break;

            case 'example2':
                # code...
                $page_name = "Yellow Background";
                break;

            case 'example3':
                # code...
                $page_name = "Shoes & Blue";
                break;
        }

        $data = [
            "page" => [
                "title" => $page_name,
                "breadcrumbs" => [
                    [
                        "url" => "/services",
                        "name" => "Services"
                    ],
                    [
                        "url" => "",
                        "name" => $page_name
                    ],
                ]
            ]
        ];
    
        return view('public.services.page', $data);
    })->name("servicespage");
});

Route::get('resources', function () {
    $data = [
        "page" => [
            "title" => "Resources",
            "breadcrumbs" => [ ]
        ]
    ];

    return view('public.resources', $data);
})->name("resourcespage");

Route::get('our-offices', function () {
    $data = [
        "page" => [
            "title" => "Our Offices",
            "breadcrumbs" => [ ]
        ]
    ];

    return view('public.our-offices', $data);
})->name("ourofficespage");

Route::prefix("blogs")->group(function(){
    Route::get('/', function () {
        $data = [
            "page" => [
                "title" => "Blogs",
                "breadcrumbs" => [ ]
            ]
        ];
    
        return view('public.blogs.index', $data);
    })->name("blogspage");

    Route::get('/{slug}', function (Request $request) {
        $data = [
            "page" => [
                "title" => ucwords(str_replace("-", " ", $request->slug)),
                "breadcrumbs" => [
                    [
                        "url" => "/blogs",
                        "name" => "Blogs"
                    ],
                    [
                        "url" => "",
                        "name" => ucwords(str_replace("-", " ", $request->slug))
                    ]
                ]
            ]
        ];
    
        return view('public.blogs.page', $data);
    })->name("blogspage");
});

Route::get('contact-us', function () {
    $data = [
        "page" => [
            "title" => "Contact Us",
        ]
    ];

    return view('public.contact-us', $data);
})->name("contactuspage");

/**
 * Login
 */
Route::get("admin", function() {
    return view("auth.login");
})->name("auth.admin.login");
