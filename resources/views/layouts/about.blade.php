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

    <main>
        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">What People say about us</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="team row">
                <div class="col-md-4 col-12 text-center">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                        <img class="img-fluid border-radius p-4" src="/img/UI1.jpg" alt="Member">    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">John Arthur</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Cumque, sequi?
                            </p>
                            <p class="text-black-50">CEO at MicroSoft</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Carousel Starts here -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active text-center">
                            <!-- Card 2-->
                            <div class="card mr-2 d-inline-block shadow-lg">
                            <div class="card-img-top">
                            <img class="img-fluid border-radius p-4" src="/img/UI2.jpg" alt="Member">    
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Alex Garry</h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Cumque, sequi?
                                </p>
                                <p class="text-black-50">CEO at MicroSoft</p>
                            </div>
                        </div>
                          </div>
                          <div class="carousel-item text-center">
                            <!-- Card 3 -->
                            <div class="card mr-2 d-inline-block shadow-lg">
                                <div class="card-img-top">
                                <img class="img-fluid border-radius p-4" src="/img/UI4.jpg" alt="Member">    
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Alex Garry</h3>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Cumque, sequi?
                                    </p>
                                    <p class="text-black-50">CEO at MicroSoft</p>
                                </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <!-- Card 4 -->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                        <img class="img-fluid border-radius p-4" src="/img/UI3.jpg" alt="Member">    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Sarah Khan</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Cumque, sequi?
                            </p>
                            <p class="text-black-50">QA at MicroSoft</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

   
    @endsection
 
