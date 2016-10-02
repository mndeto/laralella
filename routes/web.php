<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get('/dashboard2', function () {
    return view('admin.pages.dashboard1');
});

Route::get('/dashboard3', function () {
    return view('admin.pages.dashboard2');
});

Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/500', function () {
    return view('errors.500');
});

Route::get('/plain', function () {
    return view('admin.pages.plain_page');
});

Route::get('/form', function () {
    return view('admin.pages.form');
});

Route::get('/icons', function () {
    return view('admin.pages.icons');
});

Route::get('/glyphicons', function () {
    return view('admin.pages.glyphicons');
});
