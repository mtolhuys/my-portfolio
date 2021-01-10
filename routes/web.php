<?php

use App\Http\Controllers\IndexController;
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
Auth::routes();

Route::get('/', [IndexController::class, 'index']);
Route::get('/insta-feed', [IndexController::class, 'instaFeed']);

Route::inertia('/', 'Index');
Route::inertia('/about', 'About');
Route::inertia('/blog', 'Blog');
Route::inertia('/login', 'UserPages/Login');
Route::inertia('/register', 'UserPages/Registration');
Route::inertia('/admin', 'UserPages/Admin');

