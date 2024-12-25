@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Book Details</h1>

    @if ($book['image'])
            <img src="{{asset('storage/images/' . $book['image'])}}" alt="{{$book['image']}}" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $book->genre }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $book->price }}</td>
        </tr>
    </table>
    <a href="{{ route('book.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
