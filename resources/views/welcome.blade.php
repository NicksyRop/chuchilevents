<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churchil Events</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
</head>
<script
src="https://kit.fontawesome.com/8afaa071c9.js"
crossorigin="anonymous"
></script>
<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg sticky-top  navbar-dark">
            <div class="container-fluid">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.html">
                        <img src="{{asset('images/download.jpeg')}}" height="50px" alt="Chruchil Logo">

                      </a>
                    </div>
                  </nav>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  float-end  mb-2 mb-lg-0">

                  <li class="nav-item dropdown mr-4" style="width: 120px;">
                    <a class="nav-link btn btn-outline-light text-white" href="{{route('login')}}">Login</a>

                  </li>

                  <li class="nav-item" style="width: 120px;">
                    <a class="nav-link btn btn-outline-light text-white" href="{{route('register')}}">Register</a>
                  </li>

                </ul>

              </div>
            </div>
          </nav>
          <!-- jumbotron -->
          <div class="jumbotron">
              <div class="row">
                  <div class="col-12 col-md-7 text-center text-md-start">
                    <h1 class="text-white">Churchi Events </h1>
                    <p class="lead">Kenyas Laugh Industry</p>

                    <a class="btn btn-outline-light btn-lg mt-4 py-3 px-4 mb-5 mb-md-0" href="/events" role="button">Book Now</a>
                  </div>
                  <div class="col-12 col-md-5">

                    <img src="{{asset('images/church3.png')}}" alt="Dan's meet yogurt" class="img-fluid">
                  </div>
              </div>


          </div>
          <!-- Founder message -->
          <div class="row mt-4">
              <div class="col-12 col-md-4">
                    <img src="{{asset('images/download.jpeg')}}" class="img-fluid rounded" alt="Dan walter scot">
              </div>
              <div class="col-12 col-md-8 bg-white p-5 d-flex align-items-center border border-dark mt-4 rounded">
                <section>
                        <h2>Message from our founder</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repudiandae assumenda voluptas molestias. Rerum, fuga distinctio. Sapiente doloremque aperiam tempore vitae, porro temporibus eum quo, quaerat corporis explicabo necessitatibus incidunt eius aliquam dolor perspiciatis a pariatur quod illum, minima saepe ut nesciunt. Suscipit, odit molestias? Consequuntur quam, vel quos reprehenderit animi quas eius sit fugit maxime numquam distinctio! Unde, delectus.</p>
                </section>
              </div>
          </div>


          <!-- corousel -->
          <div id="carouselExampleControls" class="carousel slide d-none d-md-block carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img src="{{asset('images/lee-blanchflower-1dW1vEJLlCQ-unsplash.jpg')}}" class="d-block w-100" alt="Images of yougurt packs">
              </div>
              <div class="carousel-item" data-bs-interval="100">
                <img src="{{asset('images/slim-emcee-jzdOX0XkXr8-unsplash.jpg')}}" class="d-block w-100" alt="Images of yougurt packs">
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- cards -->
          <div class="mycardgroup">
              <div class="mycard">
                <img src="{{asset('images/download.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/events" class="btn btn-primary stretched-link">Book Now</a>
                </div>
              </div>
              <div class="mycard">
                <img src="{{asset('images/download.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/events" class="btn btn-primary stretched-link">Book Now</a>
                </div>
              </div>
              <div class="mycard">
                <img src="{{asset('images/download.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/events" class="btn btn-primary stretched-link">Book Now</a>
                </div>
              </div>
          </div>

          <footer>
              <p class="text-center">Designed in <i class="fas fa-heart"></i> by Nickson Kipkorir</p>

          </footer>










    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
