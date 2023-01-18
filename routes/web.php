<?php

use App\Http\Controllers\Front\CategoriesController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PostsController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/search', [HomeController::class, 'search'])
    ->name('home.search');

Route::get('categories/{category}', [CategoriesController::class, 'show'])
    ->name('categories.show');

Route::get('post/{post}', [PostsController::class, 'show'])
    ->name('posts.show');

// require __DIR__.'/auth.php';
require __DIR__ . '/dashboard.php';
