<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');
    Route::get('/about-this-site', 'aboutSite')->name('site.about');
    Route::get('/cv', 'cv')->name('site.cv');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact.index');
    Route::post('/contact', 'post')->name('contact.post');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog/{blog}', 'show')->name('blog.show');
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('projects.index');
    Route::get('/projects/{project}', 'show')->name('projects.show');
});

require __DIR__.'/auth.php';
