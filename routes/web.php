<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('site.index');
});

Route::prefix('contact')->group(function () {
    Route::get('/', ContactController::class, 'index');
    Route::post('/', ContactController::class, 'post');
});

Route::resource('projects', ProjectController::class);
Route::resource('blog', PostController::class);