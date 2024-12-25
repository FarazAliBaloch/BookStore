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
                        <button class="btn btn-outline-success bg-light" type="submit" >Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    
</header>

    <div class="container mt-5">
        <h1>Customers</h1>
        <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Add Customer</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
