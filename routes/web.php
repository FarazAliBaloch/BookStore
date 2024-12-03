<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Auth;



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/books', [HomeController::class, 'books'])->name('home.books');
Route::get('/sign-in', [HomeController::class, 'signIn'])->name('home.signIn');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');


// Route::get('/layouts', function () {
//     return view('layouts.web');
// });


// Route::get('/post', function () {
//     return view('post');
// });


Route::middleware('auth')->name('course.')->prefix('course')->group(function() {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('create', [CourseController::class, 'create'])->name('create');
    Route::post('store', [CourseController::class, 'store'])->name('store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(ValidAdmin::class)->group(function () {

Route::resource('customer', AdminController::class);

});

Route::get('/welcome',function () {
    return view ('welcome');
});

// Route::get('/post', function () {
//     return view('post');
// });



require __DIR__.'/auth.php';