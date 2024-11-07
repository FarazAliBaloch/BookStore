@extends(layouts.main)

@section('content')

        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">Our Books </h1>
                <p class="text-secondary">Knowledge is Power.</p>
            </div>
            <div class="team row">
                <div class="col-md-4 col-12 text-center">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                        <img class="img-fluid border-radius p-4" src="/img/ath.png" alt="Member">    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Author: James Clear</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Cumque, sequi?
                            </p>
                            <p class="text-black-50">think widely</p>
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
                            <img class="img-fluid border-radius p-4" src="/img/phc.jpg" alt="Member">    
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Author :Alex Garry</h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Cumque, sequi?
                                </p>
                                <p class="text-black-50">Train your brain</p>
                            </div>
                        </div>
                          </div>
                          <div class="carousel-item text-center">
                            <!-- Card 3 -->
                            
                          </div>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4 col-12 text-center ">
                    <!-- Card 4 -->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                        <img class="img-fluid border-radius p-4" src="/img/ath.png" alt="Member">    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Author:James Clear</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Cumque, sequi?
                            </p>
                            <p class="text-black-50">Think Positive!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>

        <div class="purchase text-center">
            <h1>Purchase Whatever You Want</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, quis?</p>
            <!-- Cards -->
            <div class="cards">
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <h5 class="card-title">Print Copy</h5>
                            </div>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing.
                            </p>
                            <div class="pricing">
                                <h1>$59.99</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mb-5">Purchase Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <h5 class="card-title">E-Book</h5>
                            </div>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing.
                            </p>
                            <div class="pricing">
                                <h1>$49.99</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mb-5">Purchase Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <h5 class="card-title">PDF</h5>
                            </div>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing.
                            </p>
                            <div class="pricing">
                                <h1>$29.99</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mb-5">Purchase Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection