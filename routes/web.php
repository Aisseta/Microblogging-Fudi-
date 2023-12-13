<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});



Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('/onepost/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/create', [PostController::class, 'create'])->name('create');

Route::post('/store', [PostController::class, 'store'])->name('post.store');

//Route::get('update', [PostController::class, 'update'])->name('post.update');

//Route::get('', [PostController::class, 'delete'])->name('post.delete');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
