<?php

use App\Actions\Fortify\UpdateUserPassword;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group([
    'middleware' => 'auth',
    'as' => 'dashboard.',
    'prefix' => 'dashboard',
], function () {

    Route::get('/users/trash', [UserController::class, 'trash'])
        ->name('users.trash');
    Route::put('users/{user}/restore', [UserController::class, 'restore'])
        ->name('users.restore');
    Route::delete('users/{user}/force-delete', [UserController::class, 'forceDelete'])
        ->name('users.force-delete');

    Route::put('users/update-password', [UserController::class, 'updatePassword'])
        ->name('users.update-password');

    // Route::put('/update-password', function (Request $request) {
    //     $updatePasswordController = new UpdateUserPassword;
    //     return $updatePasswordController->update(Auth::user(), $request->all());
    // })->name('users.update-password');


    Route::get('/categories/trash', [CategoryController::class, 'trash'])
        ->name('categories.trash');
    Route::put('categories/{category}/restore', [CategoryController::class, 'restore'])
        ->name('categories.restore');
    Route::delete('categories/{category}/force-delete', [CategoryController::class, 'forceDelete'])
        ->name('categories.force-delete');



    Route::get('/posts/trash', [PostController::class, 'trash'])
        ->name('posts.trash');
    Route::put('posts/{post}/restore', [PostController::class, 'restore'])
        ->name('posts.restore');
    Route::delete('posts/{post}/force-delete', [PostController::class, 'forceDelete'])
        ->name('posts.force-delete');

    Route::put('/posts/{post}/status/{status}', [PostController::class, 'status'])
        ->name('posts.status');

    Route::post('posts/ckeditor-upload-image', [PostController::class, 'uploadImageEditor'])
        ->name('ckeditor.upload');

    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'categories' => CategoryController::class,
        // 'roles' => RolesController::class,
        // 'users' => UsersController::class,
    ]);
});
