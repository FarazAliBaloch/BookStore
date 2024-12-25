@extends('layouts.main')

@section('content')

<div class="container">
    <h1>Create Book</h1>
    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" required>
        </div>

        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <input type="number" name="category_id" id="category_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Choose File</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
