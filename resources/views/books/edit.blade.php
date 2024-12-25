@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">  
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>
       
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ $book->genre }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $book->price }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <input type="number" name="category_id" id="category_id" class="form-control">
        </div>
        <div>
            <label for="image">Choose File</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
