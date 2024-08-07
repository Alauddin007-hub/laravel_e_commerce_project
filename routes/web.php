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

// Frontend
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/shop', function () {
    return view('frontend.shop');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/about', function () {
    return view('frontend.contact');
});

// Backend
Route::get('/admin', function () {
    return view('backend.dashboard');
});
Route::get('/login', function () {
    return view('backend.auth.login');
});
