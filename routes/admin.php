<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', 'AuthController@showLoginForm')->name('admin.login');
Route::post('dashboard', 'AuthController@login');


Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:admin')
    ->name('admin.logout');

Route::group(['prefix' => 'dashboard', 'middleware' =>['auth:admin','admin'], 'as' => 'admin.'], function () {

    Route::get('/main', 'DashboardController@index')->name('main');
    Route::resource('roles', 'RoleController');
    Route::resource('admins', 'AdminController');
    Route::resource('users', 'UserController');
    Route::resource('services', 'ServiceController');
    Route::resource('blogs', 'BlogController');
    Route::resource('settings', 'SettingController');
    Route::resource('partners', 'PartnerController');
    Route::resource('testimonials', 'TestimonialController');
    Route::resource('guest-messages', 'GuestMessageController');
    Route::resource('mail-lists', 'MailListController');


    Route::post('active/{id}/role', 'RoleController@active')->name('active.role');
    Route::post('active/{id}/{type}', 'DashboardController@active')->name('active');

});



require __DIR__.'/auth.php';
