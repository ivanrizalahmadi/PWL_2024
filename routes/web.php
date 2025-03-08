<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
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


Route::get('/hello', [WelcomeController::class, 'index']);

Route::get('/world', function () {
    return 'World';
});
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    Route::get('/articles/{id}', function ($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    });
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
    Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);

    Route::get('/greeting', [WelcomeController::class,
'greeting']);

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

Route::prefix('products/category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);


Route::get('/sales', [SalesController::class, 'index']);
   