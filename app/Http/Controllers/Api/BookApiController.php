<?php

namespace App\Http\Controllers\Api;

use App\Services\BookService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookApiController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $data = $this->bookService->getAllBooks();
        return response()->json($data);
    }

    /**
     * Store a newly created book.
     */
    public function store(Request $request)
    {
        $response = $this->bookService->storeBook($request);
        return response()->json($response);
    }

    /**
     * Display the specified book.
     */
    public function show($id)
    {
        $response = $this->bookService->getBookById($id);
        return response()->json($response);
    }

    /**
     * Update the specified book.
     */
    public function update(Request $request, $id)
    {
        $response = $this->bookService->updateBook($request, $id);
        return response()->json($response);
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy($id)
    {
        $response = $this->bookService->deleteBook($id);
        return response()->json($response);
    }

    /**
     * Search books by title or author.
     */
    public function search(Request $request)
    {
        $response = $this->bookService->searchBooks($request->get('query'));
        return response()->json($response);
    }
}
