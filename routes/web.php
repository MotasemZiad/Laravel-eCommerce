<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/about', function () {
    return view("pages.about", [
        "page_name" => "Laravel | About",
        'page_description' => "About Us Description Fugiat aute incididunt fugiat cupidatat nisi exercitation nostrud excepteur occaecat. Id cillum sunt sunt laboris adipisicing minim dolore. Et irure quis ea irure.",
    ]);
})->name('about');

Route::get("/contact", function () {
    return view("pages.contact", [
        "page_name" => "Laravel | Contact",
        'page_description' => "Contact Us Description Exercitation incididunt nisi aute culpa dolor consequat qui elit aute aliqua ex id sint minim. Eiusmod id eiusmod occaecat ut proident dolor nulla pariatur ea anim exercitation. Anim irure qui et et cupidatat incididunt occaecat labore dolore nulla ipsum nisi veniam quis. Sint eiusmod reprehenderit esse dolore. Labore eiusmod occaecat qui voluptate. Reprehenderit elit eiusmod nulla mollit. Nostrud consectetur reprehenderit ullamco enim ea sit in esse id.",
    ]);
})->name('contact');

Route::get('categories', function () {
    $categories = [
        1 => "Java",
        2 => "Php",
        3 => 'JavaScript',
        4 => "Swift",
        5 => "Python",
        6 => "Kotlin",
        7 => "C#",
        8 => "C++",
        9 => "C",
        10 => "Objective-C",
        11 => "Ruby",
        12 => "TypeScript",
        13 => "Dart",
        14 => "Go",
        15 => "Rust",
        16 => "R",
        17 => "Julia",
        18 => "Perl",
        19 => "Lua",
        20 => "Scala"
    ];

    return view('pages.categories', compact('categories'));
})->name('categories');

Route::get('category/{id}', function ($id) {
    $categories = [
        1 => "Java",
        2 => "Php",
        3 => 'JavaScript',
        4 => "Swift",
        5 => "Python",
        6 => "Kotlin",
        7 => "C#",
        8 => "C++",
        9 => "C",
        10 => "Objective-C",
        11 => "Ruby",
        12 => "TypeScript",
        13 => "Dart",
        14 => "Go",
        15 => "Rust",
        16 => "R",
        17 => "Julia",
        18 => "Perl",
        19 => "Lua",
        20 => "Scala"
    ];

    return view("pages.category", [
        "id" => $categories[$id] ?? "This ID is not found",
    ]);
})->name('category');
