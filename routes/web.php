<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;

// Route::get('/', function () {return view('welcome');});

// Theme Route
Route::controller(ThemeController::class)->name('front.')->middleware('auth')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/category', 'category')->name('category');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/singleBlog', 'singleBlog')->name('singleBlog');
});


// Subscriber Route
Route::post('subscriber/store',[SubscriberController::class,'store'])->name('subscriber.store');


// Middleware Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
