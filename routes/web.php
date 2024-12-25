<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
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

Route::resource('customer', CustomerController::class);

});
// Book Routes
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('book.index');
    Route::get('create', [BookController::class, 'create'])->name('book.create');
    Route::post('/', [BookController::class, 'store'])->name('book.store');
    Route::get('search', [BookController::class, 'search'])->name('book.search');
    Route::get('{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('{id}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::get('{id}', [BookController::class, 'show'])->name('book.show');
});


Route::get('/welcome',function () {
    return view ('welcome');
}); 


// Route::get('/post', function () {
//     return view('post');
// });



require __DIR__.'/auth.php';