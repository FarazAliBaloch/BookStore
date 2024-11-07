<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Nest</title>
    <link rel="stylesheet" href="home/signIn.html">
    <link rel="stylesheet" href="home/about.html">
    <link rel="stylesheet" href="home/books.html">
    <link rel="stylesheet" href="home/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/style.css">
    <link rel="stylesheet" href="home/responsive.css">
    <link rel="stylesheet" href="home/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    @include('home/header')
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="/img/pic2.jpg" alt="pray">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>Mr Alex</h1>
                            <p class="pt-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Odio, reprehenderit voluptatum! Commodi laboriosam officia dignissimos?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Provident omnis ad, repellendus quia laudantium corrupti maiores dolores quisquam quod
                                rem.</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1>Some Features that make us unique</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, pariatur.</p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1>1234</h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="rect">
                        <h1>34567</h1>
                        <p>Books Sold</p>
                    </div>
                    <div class="rect">
                        <h1>4567</h1>
                        <p>Coffee Cups</p>
                    </div>
                    <div class="rect">
                        <h1>100000</h1>
                        <p>Total Books</p>
                    </div>
                </div>
            </div>
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
        </section>

        <section class="section-3 container-fluid p-0 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     Sed rem quo recusandae molestiae, iure aperiam est!
                    Consequatur at commodi neque nesciunt iusto illo explicabo.
                     Rerum illum sint incidunt aut maxime.</p>
                </div>
            </div>
            <div class="platform row">
                <div class="col-md-6 col-sm-12 text-right">
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="fa-solid fa-mobile-alt fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                            <h3 class="pt-1 m-0">On Phone</h3>
                            <p class="p-0 m-0">On Play Store</p>
                        </div>

                    </div>
                </div>
                
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fa-solid fa-desktop fa-3x py-2 pr-3"></i>
                            <div class="text text-left">
                                <h3 class="pt-1 m-0">Desktop</h3>
                                <p class="p-0 m-0">On Website</p>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
   @include('home/footer')

    <script src="home/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>
    <script src="home/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>