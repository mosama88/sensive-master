<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;

// Route::get('/', function () {return view('welcome');});

// Theme Route
Route::controller(ThemeController::class)->name('front.')->middleware('auth')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/category/{id}', 'category')->name('category');
    Route::get('/contact', 'contact')->name('contact');
    // Route::get('/singleBlog/{id}', 'singleBlog')->name('singleBlog');
});


// Subscriber store Route
Route::post('subscriber/store',[SubscriberController::class,'store'])->name('subscriber.store');

// Contact store Route
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');

// Blog Resource Route
Route::get('/my-blogs',[BlogController::class, 'myBlogs'])->name('blogs.my-blogs');
Route::resource('blogs',BlogController::class);

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
