<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'checkBanned','as' => 'site.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact', [HomeController::class, 'postContact'])->name('postContact');
    Route::get('/pages/{page}', [HomeController::class, 'page']);


    Route::get('reset', [AuthController::class, 'resetForm'])->name('resetForm');
    Route::get('send-code', [AuthController::class, 'sendCode'])->name('sendCode');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');

    Route::get('/offers', [HomeController::class, 'offers'])->name('offers');

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', [HomeController::class, 'categories'])->name('index');
        Route::get('/sub-categories/{id}', [HomeController::class, 'subCategories'])->name('subCategories');
    });


});








Route::get('/forget', function () {
    return view('site.forget');
});






//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
