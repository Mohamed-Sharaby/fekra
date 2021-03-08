<?php

use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'checkBanned','as' => 'site.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/single-blog/{id}', [HomeController::class, 'singleBlog'])->name('singleBlog');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact', [HomeController::class, 'postContact'])->name('postContact');
    Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');


    Route::get('forget', [AuthController::class, 'resetForm'])->name('resetForm');
    Route::get('send-code', [AuthController::class, 'sendCode'])->name('sendCode');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');


});

//require __DIR__.'/auth.php';
