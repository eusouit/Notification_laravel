<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});

//$this->resource('post', 'PostController');
Route::get('/post', [PostController::class, 'index'])->middleware(['auth'])->name('index');

Route::get('/post/show/{id}', [PostController::class, 'show'])->middleware(['auth'])->name('showPost');

Route::post('/post/store', [CommentController::class, 'store'])->middleware(['auth'])->name('store');

Route::get('/post/notification', [NotificationController::class, 'notifications'])->middleware(['auth'])->name('notification');
Route::get('/post/markasread', [NotificationController::class, 'markAsRead'])->middleware(['auth'])->name('markAsRead');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
