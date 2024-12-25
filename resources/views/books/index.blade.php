@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="d-flex flex-row-reverse p-2">
            <input type="text" class="form-control" id="book-search" placeholder="Search by title or author">
        </div>
        <div id="book-results" class="row mt-0">
            <!-- Results will be displayed here dynamically -->
        </div>

        <h1>Books List</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary mb-3">Add New Book</a>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{$book['category']['name']}}</td>
                        <td>
                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                + <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#book-search').on('keyup', function() {
                    let query = $(this).val();
                    if (query.length > 0) {
                        // Perform the AJAX request
                        $.ajax({
                            url: 'http://127.0.0.1:8000/book/search',
                            method: 'GET',
                            data: {
                                query: query
                            },
                            success: function(response) {
                                // Update the results section with the response
                                $('#book-results').html(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    } else {
                        $('#book-results').empty();
                    }
                });
            });
        </script>
    @endpush
@endsection
