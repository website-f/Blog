<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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


//PostController Routes
Route::get('/', [PostController::class, 'index']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/contact', [PostController::class, 'contact']);
Route::get('/categories', [PostController::class, 'categories']);
Route::get('/tags', [PostController::class, 'tags']);
Route::get('/post-list', [PostController::class, 'postList']);
Route::get('/post-view', [PostController::class, 'postView']);
Route::get('/search', [PostController::class, 'search']);

//DashboradController Routes
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/post-list', [DashboardController::class, 'postList']);
    Route::get('/post-edit', [DashboardController::class, 'postEdit']);
    Route::get('/post-create', [DashboardController::class, 'postCreate']);
    Route::get('/author-list', [DashboardController::class, 'AuthorList']);
    Route::get('/post-category', [DashboardController::class, 'postCategory']);
    Route::get('/profile-edit', [DashboardController::class, 'profileEdit']);
});
