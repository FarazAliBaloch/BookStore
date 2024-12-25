<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = $this->bookService->getAllBooks();
        return view("books.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->bookService->storeBook($request);
        return redirect()->route("book.index")->with($result['success'] ? "success" : "error", $result['message']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = $this->bookService->getBookById($id);
        return view("books.show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = $this->bookService->getBookById($id);
        return view("books.edit", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $result = $this->bookService->updateBook($request, $id);
        return redirect()->route("book.index")->with($result['success'] ? "success" : "error", $result['message']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = $this->bookService->deleteBook($id);
        return redirect()->route("book.index")->with($result['success'] ? "success" : "error", $result['message']);
    }

    /**
     * Search for books by title or author.
     */
    public function search(Request $request)
    {
        $books = $this->bookService->searchBooks($request->get('query'));
        return view('books.search-results', compact('books'));
    }
}
