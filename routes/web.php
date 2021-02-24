<?php

use Illuminate\Support\Facades\Route;

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
