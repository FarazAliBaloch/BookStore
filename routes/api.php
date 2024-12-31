<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookApiController;
use App\Http\Controllers\Api\AuthController;



Route::post('/signup', [AuthController::class, 'signup']);

// Public route for login
Route::post('/login', [AuthController::class, 'login']);

// Public route for logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->name('book.')->prefix('book')->group(function () {

    // Get a list of all books
    Route::get('/', [BookApiController::class, 'index'])->name('index');
    
    // Store a newly created book
    Route::post('/store', [BookApiController::class, 'store'])->name('store');
    
    // Get a specific book by ID
    Route::get('{id}', [BookApiController::class, 'show'])->name('show');
    
    // Update a book by ID
    Route::put('{id}', [BookApiController::class, 'update'])->name('update');
    
    // Delete a book by ID
    Route::delete('{id}', [BookApiController::class, 'destroy'])->name('destroy');
    
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

