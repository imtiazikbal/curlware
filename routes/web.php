<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FontendController;

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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
});




Route::controller(FontendController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('posts/detail/{post}', 'show')->name('posts.show');
       
    });



Route::get('/logout01',[LogoutController::class,'logout']);

//here only blog route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)
    ->group(function () {
        Route::get('posts', 'index')->name('posts');
        Route::get('posts/show/{posts}', 'show')->name('posts.show');
        Route::get('posts/create', 'create')->name('posts.create');
        Route::post('posts/store', 'store')->name('posts.store');
        Route::get('posts/edit/{post}', 'edit')->name('posts.edit');
        Route::post('posts/update/{post}', 'update')->name('posts.update');
        Route::delete('posts/delete/{post}', 'destroy')->name('posts.delete');
    })
    ->middleware(['auth', 'verified']);

//here only Comment route



Route::controller(CommentController::class)
    ->group(function () {
        Route::get('comment', 'index')->name('comment');
        Route::get('comment/show/{comment}', 'show')->name('comment.show');
        Route::post('/user/comment/store', 'store')->name('comments.store');
        Route::post('comment/update/{comment}', 'update')->name('comment.update');
        Route::delete('comment/delete/{comment}', 'destroy')->name('comment.delete');
    })
    ->middleware(['auth', 'verified','authUser']);


    
require __DIR__ . '/auth.php';
