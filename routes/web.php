<?php

use App\Http\Controllers\ContactController;
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
Route::post('/submit', [ContactController::class, 'submit']);

Route::inertia('/', 'Index');
Route::inertia('/about', 'About');
Route::inertia('/gallery', 'PhotoGallery');
Route::inertia('/blog', 'Blog')->name('blog');
Route::inertia('/resume', 'Resume')->name('resume');
Route::inertia('/login', 'UserPages/Login')->name('login');
Route::inertia('/admin', 'UserPages/Admin')->name('admin');

if (! app()->environment('production')) {
    Route::get('/test-mail', function () {
        return view('mail.contact', [
            'contact' => \App\Models\Contact::inRandomOrder()->first()
        ]);
    });
}

