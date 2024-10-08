<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

$posts = [
    ['title' => 'post 1'],
    ['title' => 'post 2'],
    ['title' => 'post 3'],
    ['title' => 'post 4'],
];

Route::view('/', 'welcome')->name('home');
Route::view('contacto','contact')->name('contact');
Route::get('blog', [PostController::class, 'index'])->name('blog');

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
