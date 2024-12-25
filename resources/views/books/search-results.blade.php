@if ($books->isEmpty())
    <p>No books found.</p>
@else
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <strong>{{ $book->title }}</strong> ({{ $book->author }})
            </li>
        @endforeach
    </ul>
@endif
