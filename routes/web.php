<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

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



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LessonController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/{lesson}', [PostController::class, 'show'])->name('show');
    Route::put('/posts/{post}/comment', [PostController::class, 'update'])->name('update');
    Route::get('/posts/{post}/comment', [PostController::class, 'comment'])->name('comment');
    Route::post('/posts/{lesson}/comment', [PostController::class, 'storeComment'])->name('store.comment');
    Route::get('/posts/{post}/comment', [PostController::class, 'comment'])->name('comment');
    Route::get('/createLesson', [LessonController::class, 'create'])->name('create.lesson');
    Route::post('/storeLesson', [LessonController::class, 'store'])->name('store.lesson');
});

require __DIR__.'/auth.php';
