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
    return view('site.index');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/blog', function () {
    return view('site.blog');
});

Route::get('/services', function () {
    return view('site.services');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/', function () {
    return view('site.index');
});

Route::get('/login', function () {
    return view('site.login');
});

Route::get('/register', function () {
    return view('site.register');
});

Route::get('/forget', function () {
    return view('site.forget');
});






//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
