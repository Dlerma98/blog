<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');
Route::view('contacto','contact')->name('contact');
Route::get('blog', [PostController::class, 'index'])->name('posts.index');
Route::get('blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [PostController::class, 'store'])->name('posts.store');
Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('nosotros','about')->name('about');



/*Route::match(['put', 'patch'], '/', function () {
    return 'This is a PUT/PATCH request';
});*/







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
