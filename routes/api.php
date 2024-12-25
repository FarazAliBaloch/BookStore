<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::prefix('api/book')->group(function () {
    Route::get('/', [BookApiController::class, 'index']); // Get all books
    Route::post('/', [BookApiController::class, 'store']); // Create a new book
    Route::get('{id}', [BookApiController::class, 'show']); // Get book by ID
    Route::put('{id}', [BookApiController::class, 'update']); // Update book by ID
    Route::delete('{id}', [BookApiController::class, 'destroy']); // Delete book by ID
    Route::get('search', [BookApiController::class, 'search']); // Search books by title or author
});
