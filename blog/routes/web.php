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

Route::get('/panel', function () {
    return view('admin.sidebar');
});

Route::prefix('public')->group(function () {
    Route::get('contact', function () {
        return view('public.pages.contact.index');
    });
    Route::get('pricing', function () {
        return view('public.pages.pricing.index');
    });
    Route::get('home', function () {
        return view('public.pages.home.index');
    });
    Route::get('about', function () {
        return view('public.pages.about.index');
    });
    Route::get('blog', function () {
        return view('public.pages.blog.index');
    });
});
