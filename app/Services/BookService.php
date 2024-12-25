<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BookService
{
    /**
     * Get all books with their categories.
     */
    public function getAllBooks()
    {
        return Book::with('category')->get();
    }

    /**
     * Store a new book.
     */
    public function storeBook(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string",
            "author" => "required|string",
            "descryption" => "required|string",
            "punchline" => "required|string",
            "category_id" => "required",
            "image" => "nullable|image|mimes:png,jpg,jpeg|max:3000",
        ]);

        try {
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images', 'public');
                $data['image'] = basename($path);
            }

            Book::create($data);
            return ['success' => true, 'message' => 'Book added successfully!'];
        } catch (\Exception $e) {
            Log::error('Book creation failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Get a book by ID.
     */
    public function getBookById($id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Update a book.
     */
    public function updateBook(Request $request, $id)
    {
        $data = $request->validate([
            "title" => "required|string",
            "author" => "required|string",
            "descryption" => "required|string",
            "punchline" => "required|string",
            "category_id" => "required",
            "image" => "nullable|image|mimes:png,jpg,jpeg|max:3000",
        ]);

        try {
            $book = Book::findOrFail($id);

            if ($request->hasFile('image')) {
                if ($book->image && Storage::disk('public')->exists('images/' . $book->image)) {
                    Storage::disk('public')->delete('images/' . $book->image);
                }

                $path = $request->file('image')->store('images', 'public');
                $data['image'] = basename($path);
            }

            $book->update($data);
            return ['success' => true, 'message' => 'Book updated successfully!'];
        } catch (\Exception $e) {
            Log::error('Book update failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Delete a book.
     */
    public function deleteBook($id)
    {
        try {
            $book = Book::findOrFail($id);

            if ($book->image && Storage::disk('public')->exists('images/' . $book->image)) {
                Storage::disk('public')->delete('images/' . $book->image);
            }

            $book->delete();
            return ['success' => true, 'message' => 'Book deleted successfully!'];
        } catch (\Exception $e) {
            Log::error('Book deletion failed: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Something went wrong. Please try again later.'];
        }
    }

    /**
     * Search for books by title or author.
     */
    public function searchBooks($query)
    {
        return Book::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('author', 'LIKE', '%' . $query . '%')
            ->get();
    }
}
