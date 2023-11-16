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
    $name = 'Laravel';
    $text = 'Prima lezione di';
    return view('home', compact('name', 'text'));
});

Route::get('/about', function () {
    $name = 'Alessandro';
    $description = 'web developer';
    return view('about', compact('name', 'description'));
});

Route::get('/info', function () {
    $title = 'Biography';
    $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim odit, incidunt exercitationem architecto
    molestias consectetur esse sequi dignissimos earum? Eveniet possimus rem voluptas explicabo sint est
    excepturi ab? Illum, ratione.';
    return view('info', compact('title', 'text'));
});
