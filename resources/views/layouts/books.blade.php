@extends('layouts.main')

@section('content')

<header>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <i class="fas fa-book-reader fa-2x mx-3"></i> Book Nest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="em">
                            <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                        </li>
                        <li class="em">
                            <a class="nav-link active" aria-current="page" href="{{route('home.books')}}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home.signIn')}}">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home.about')}}">About Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success bg-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>

<section class="section-4">
    <div class="container text-center">
        <h1 class="text-dark">Our Books</h1>
        <p class="text-secondary">Knowledge is Power</p>
    </div>
    <div class="team row">
        @foreach ($books as $book)
            <div class="col-md-4 col-12 text-center">
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                        <img class="img-fluid border-radius p-4" src="{{ asset('storage/images/' . $book->image) }}" alt="{{ $book->title }}">
                    </div>
                    <div class="card-body">
                        <h2 class="card_title">{{ $book->title }}</h2>
                        <h3 class="card-title">Author: {{ $book->author }}</h3>
                        <h4 class="card-title">Genre: {{ $book->genre }}</h4>
                        <h4 class="card-title">Price: <span>${{ $book->price }}</span></h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
