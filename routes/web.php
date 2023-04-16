<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\BlogController::class, 'welcome'])->name('welcome');
Route::get('/sort/{id}', [App\Http\Controllers\CategorieController::class, 'sortCategorie']);
Route::get('/detailblog/{blog_id}', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/profil', [App\Http\Controllers\UserController::class, 'profil']);
Route::post('/updateprofil/{user_id}', [App\Http\Controllers\UserController::class, 'updateprofil']);
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'userBlog']);
Route::delete('/deleteblog/{blog_id}', [App\Http\Controllers\BlogController::class, 'deleteBlog']);
Route::get('/addblog', [App\Http\Controllers\BlogController::class, 'addblogPage']);
Route::post('/addblogitem', [App\Http\Controllers\BlogController::class, 'addblogitem']);
Route::get('/adminhome', [App\Http\Controllers\UserController::class, 'adminHome']);
Route::delete('/deleteuser/{user_id}', [App\Http\Controllers\UserController::class, 'deleteUser']);