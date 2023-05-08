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
    return view('welcome');
});

Route::get('/about', function () {
    return view("about");
});

Route::get("/contact", function () {
    return view("contact");
});

Route::view("/about", "about", [
    "page_name" => "Laravel | About",
    'page_description' => "About Us Description Fugiat aute incididunt fugiat cupidatat nisi exercitation nostrud excepteur occaecat. Id cillum sunt sunt laboris adipisicing minim dolore. Et irure quis ea irure.",
]);

Route::view("/contact", "contact", [
    "page_name" => "Laravel | Contact",
    'page_description' => "Contact Us Description Exercitation incididunt nisi aute culpa dolor consequat qui elit aute aliqua ex id sint minim. Eiusmod id eiusmod occaecat ut proident dolor nulla pariatur ea anim exercitation. Anim irure qui et et cupidatat incididunt occaecat labore dolore nulla ipsum nisi veniam quis. Sint eiusmod reprehenderit esse dolore. Labore eiusmod occaecat qui voluptate. Reprehenderit elit eiusmod nulla mollit. Nostrud consectetur reprehenderit ullamco enim ea sit in esse id.",
]);
