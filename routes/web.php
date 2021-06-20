<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontSiteController;
use \App\Http\Controllers\dashboard;
use \App\Http\Controllers\AuthController;

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

Route::get('/master', function () {
    return view('frontsite.layout.master');
});
Route::get('/', [FrontSiteController::class, 'showHome'])->name('frontsite.home');
Route::get('/details/{id}', [FrontSiteController::class, 'showDetails'])->name('frontsite.details');
Route::post('/search', [FrontSiteController::class, 'search'])->name('frontsite.search');
Route::get('/category/{id}', [FrontSiteController::class, 'showCategory'])->name('frontsite.category');
Route::get('/about', [FrontSiteController::class, 'showAbout'])->name('frontsite.about');
Route::get('/contact', [FrontSiteController::class, 'showContact'])->name('frontsite.contact');
//Route::get('/login', [FrontSiteController::class, 'showLogin'])->name('frontsite.login');
//Route::get('/register', [FrontSiteController::class, 'showRegister'])->name('frontsite.register');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [dashboard\DashboardController::class, 'index'])->name('admin.home');;
    Route::resource('user', dashboard\UserController::class);
    Route::resource('post', dashboard\PostController::class);
    Route::resource('category', dashboard\CategoryController::class);
    Route::resource('comment', dashboard\CommentController::class);
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'do_register'])->name('do_register');
Route::get('update Password/{id}', [dashboard\UserController::class, 'update_pass'])->name('password');
Route::post('update Password/{id}', [dashboard\UserController::class, 'update_password'])->name('update_password');


Route::post('/posts/{id}/store',[dashboard\CommentController::class, 'store']);

//Route::get('orm',[dashboard\PostControllerOld::class,'orm']);
//Route::get('relation',[dashboard\PostControllerOld::class,'relations']);


Route::get('/header', function () {
    return view('admins.layout.header');
});
