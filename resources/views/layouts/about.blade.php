@extends(layouts.main)

@section('content')
    


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
 
