<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;

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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'AdminLogout'])->name('admin.logout');

});

require __DIR__.'/auth.php';

Route::controller(AuthController::class)->group(function (){
    Route::post('admin/login','authenticate')->name('admin.login');

});//End AuthController group
Route::middleware(['auth','role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function (){
        Route::get('admin/dashboard','AdminDashboard')->name('admin.dashboard');
        Route::get('admin/profile','AdminProfile')->name('admin.profile');
        Route::post('admin/update/profile','UpdateProfile')->name('admin.update.profile');
        Route::get('admin/change/password','ChangePassword')->name('change.password');
        Route::post('admin/update/password','UpdatePassword')->name('admin.update.password');

    });
});

Route::controller(AdminController::class)->group(function (){
    Route::get('admin/login/page','AdminLoginPage')->name('admin.login.page');


});


