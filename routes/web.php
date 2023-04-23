<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [\App\Http\Controllers\UsersController::class, 'index']);
Route::get('users/create', [\App\Http\Controllers\UsersController::class, 'create']);
Route::post('users', [\App\Http\Controllers\UsersController::class, 'store']);
Route::get('users/edit/{user}', [\App\Http\Controllers\UsersController::class, 'edit']);
Route::put('users/{user}', [\App\Http\Controllers\UsersController::class, 'update']);
Route::delete('users/{user}', [\App\Http\Controllers\UsersController::class, 'destroy']);

Route::get('tags', [\App\Http\Controllers\TagController::class, 'index']);
Route::get('tags/create', [\App\Http\Controllers\TagController::class, 'create']);
Route::post('tags', [\App\Http\Controllers\TagController::class, 'store']);
Route::get('tags/edit/{tag}', [\App\Http\Controllers\TagController::class, 'edit']);
Route::put('tags/{tag}', [\App\Http\Controllers\TagController::class, 'update']);
Route::delete('tags/{tag}', [\App\Http\Controllers\TagController::class, 'destroy']);

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create', [\App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories', [\App\Http\Controllers\CategoryController::class, 'store']);
Route::get('categories/edit/{category}', [\App\Http\Controllers\CategoryController::class, 'edit']);
Route::put('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy']);


Route::get('posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/create', [\App\Http\Controllers\PostController::class, 'create']);
Route::post('posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::get('posts/edit/{name}', [\App\Http\Controllers\PostController::class, 'edit']);
Route::put('posts/{name}', [\App\Http\Controllers\PostController::class, 'update']);
Route::delete('posts/{name}', [\App\Http\Controllers\PostController::class, 'destroy']);
