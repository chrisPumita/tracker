<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <title>Bienvenidos a ProyectTraker</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Built with Blueprints app">
    <meta name="author" content="Bootstraptor.com">
    <link rel="icon" href="favicon.ico">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">

    <!-- Plugins -->
</head>
<body>

<nav class="navbar navbar-light bg-white  navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./assets/image/logo.png" height="50px" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav3">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Planes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <a class="btn btn-danger ml-md-3" href="login.php">Iniciar Sesión</a>
        </div>
    </div>
</nav>


<section class="pt-5 pb-5 bg-dark position-relative" style="min-height:75vh; background-image: url(./assets/image/fondo.jpg); background-size: cover;">
    <div class="bg-overlay"></div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/image/fondo.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <div class="container pt-5 pb-5 position-relative">
                    <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-7 text-center text-lg-left mb-5 mb-lg-0">
                            <h1 class="display-3 font-weight-bold text-white aos-init aos-animate" data-aos="fade-up">Eslogan bien chido</h1>
                            <div class="my-4 aos-init" data-aos="fade-up">
                                <p class="lead text-white">¡Que tus clientes sepan como va su proyecto!</p>
                            </div>
                            <div class="d-flex justify-content-center justify-content-lg-start aos-init" data-aos="fade-up">
                                <div class="d-flex mr-2">
                                    <i class="fas fa-star fa-lg text-warning m-1"></i>
                                    <i class="fas fa-star fa-lg text-warning m-1"></i>
                                    <i class="fas fa-star fa-lg text-warning m-1"></i>
                                    <i class="fas fa-star fa-lg text-warning m-1"></i>
                                    <i class="fas fa-star fa-lg text-warning m-1"></i>
                                </div>
                                <span class="text-white">(Average score: 4.9/5)</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-md-10">
                                    <form class="position-relative d-block aos-init aos-animate" data-aos="fade-up">
                                        <div class="form-group">
                                            <label class="text-white" for="course-name-1">Your Name</label>
                                            <input name="course-name" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Type your name">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-white" for="course-email-1">Email Address</label>
                                            <input name="course-email" id="course-email-1" type="email" class="form-control form-control-lg" placeholder="you@yoursite.com">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group mb-1">
                                                        <label class="text-white">Skill Level:</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group rounded bg-white p-2 border">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="course-radio-beginner-1" name="course-radio-1" class="custom-control-input">
                                                            <label class="custom-control-label" for="course-radio-beginner-1">Beginner</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group rounded bg-white p-2 border">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="course-radio-advanced-1" name="course-radio-1" class="custom-control-input">
                                                            <label class="custom-control-label" for="course-radio-advanced-1">Advanced</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-lg btn-success btn-block mb-2" type="submit">Regístrate</button>
                                            <small class="text-white">You’ll recieve your first lesson via email in less than a minute.</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/image/fondo.jpg"  alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>







    <!--
    <div class="container pt-5 pb-5 position-relative">
        <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-7 text-center text-lg-left mb-5 mb-lg-0">
                <h1 class="display-3 font-weight-bold text-white aos-init aos-animate" data-aos="fade-up">Eslogan bien chido</h1>
                <div class="my-4 aos-init" data-aos="fade-up">
                    <p class="lead text-white">¡Que tus clientes sepan como va su proyecto!</p>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-start aos-init" data-aos="fade-up">
                    <div class="d-flex mr-2">
                        <i class="fas fa-star fa-lg text-warning m-1"></i>
                        <i class="fas fa-star fa-lg text-warning m-1"></i>
                        <i class="fas fa-star fa-lg text-warning m-1"></i>
                        <i class="fas fa-star fa-lg text-warning m-1"></i>
                        <i class="fas fa-star fa-lg text-warning m-1"></i>
                    </div>
                    <span class="text-white">(Average score: 4.9/5)</span>
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-10">
                        <form class="position-relative d-block aos-init aos-animate" data-aos="fade-up">
                            <div class="form-group">
                                <label class="text-white" for="course-name-1">Your Name</label>
                                <input name="course-name" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Type your name">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="course-email-1">Email Address</label>
                                <input name="course-email" id="course-email-1" type="email" class="form-control form-control-lg" placeholder="you@yoursite.com">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-1">
                                            <label class="text-white">Skill Level:</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group rounded bg-white p-2 border">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="course-radio-beginner-1" name="course-radio-1" class="custom-control-input">
                                                <label class="custom-control-label" for="course-radio-beginner-1">Beginner</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group rounded bg-white p-2 border">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="course-radio-advanced-1" name="course-radio-1" class="custom-control-input">
                                                <label class="custom-control-label" for="course-radio-advanced-1">Advanced</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-lg btn-success btn-block mb-2" type="submit">Regístrate</button>
                                <small class="text-white">You’ll recieve your first lesson via email in less than a minute.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
</section>
<section class="pt-5 pb-5 bg-light" style="">
    <div class="container  pt-5 pb-5">
        <div class="row d-flex justify-content-between">
            <div class="col-md-6">
                <h3 class="display-4 font-weight-bold aos-init" data-aos="fade-up">Start building beautiful websites</h3>
                <p class="lead mt-4 aos-init" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                <div class="row row-grid">
                    <div class="col-xs-4 col-md-4 my-1 aos-init" data-aos="fade-up">
                        <img src="./assets/image/calendar.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-xs-4 col-md-4 my-1 aos-init" data-aos="fade-up">
                        <img src="https://via.placeholder.com/150x45/ccc/ffffff&text=IMG LOGO" alt="" class="img-fluid">
                    </div>
                    <div class="col-xs-4 col-md-4 my-1 aos-init" data-aos="fade-up">
                        <img src="https://via.placeholder.com/150x45/ccc/ffffff&text=IMG LOGO" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-5 aos-init" data-aos="fade-up">
                <div id="carouselExampleTestimonials" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="row   justify-content-center d-flex  ">
                                    <div class="col-md-12  card px-5 text-dark py-5">
                                        <div class="d-flex justify-content-center justify-content-lg-start">
                                            <div class="d-flex mr-2">
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                            </div>
                                        </div>
                                        <blockquote class="blockquote blockquote-reverse mt-4">
                                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                                            <div class="mt-3 d-flex align-items-center pt-2">
                                                <div class="mr-3">
                                                    <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                                                </div>
                                                <div class="d-block">
                                                    <p class="mb-0">User Name</p>
                                                    <p class="small">Designer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row   justify-content-center d-flex  ">
                                    <div class="col-md-12  card px-5 text-dark py-5">
                                        <div class="d-flex justify-content-center justify-content-lg-start">
                                            <div class="d-flex mr-2">
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                            </div>
                                        </div>
                                        <blockquote class="blockquote blockquote-reverse mt-4">
                                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                                            <div class="mt-3 d-flex align-items-center pt-2">
                                                <div class="mr-3">
                                                    <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                                                </div>
                                                <div class="d-block">
                                                    <p class="mb-0">User Name</p>
                                                    <p class="small">Designer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="row   justify-content-center d-flex  ">
                                    <div class="col-md-12  card px-5 text-dark py-5">
                                        <div class="d-flex justify-content-center justify-content-lg-start">
                                            <div class="d-flex mr-2">
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                                <i class="fas fa-star text-warning mr-1"></i>
                                            </div>
                                        </div>
                                        <blockquote class="blockquote blockquote-reverse mt-4">
                                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                                            <div class="mt-3 d-flex align-items-center pt-2">
                                                <div class="mr-3">
                                                    <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                                                </div>
                                                <div class="d-block">
                                                    <p class="mb-0">User Name</p>
                                                    <p class="small">Designer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                <h2 class="font-weight-bold"> Blueprints</h2>
                <p class="text-h3">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    <a href="http://bootstraptor.com">Duis mollis</a>.</p>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6   mt-4 mt-md-0">
                <img alt="image" class="img-fluid rounded d-block mx-auto shadow aos-init" data-aos="fade-right" data-aos-offset="300" src="http://via.placeholder.com/410x450/ccc/fff">
            </div>
            <div class="col-12 col-md-5">
                <h2 data-aos="fade-up" class="aos-init">Nice Heading</h2>
                <p class="text-h3 mt-3 lead aos-init" data-aos="fade-up">A collection of coded HTML and CSS elements to help your build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                <ol class="list-unstyled mt-4">
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Very Important Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6   mt-4 mt-md-0">
                <img alt="image" class="img-fluid rounded d-block mx-auto shadow aos-init" data-aos="fade-right" data-aos-offset="300" src="http://via.placeholder.com/410x450/ccc/fff">
            </div>
            <div class="col-12 col-md-5">
                <h2 data-aos="fade-up" class="aos-init">Nice Heading</h2>
                <p class="text-h3 mt-3 lead aos-init" data-aos="fade-up">A collection of coded HTML and CSS elements to help your build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                <ol class="list-unstyled mt-4">
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Very Important Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6   mt-4 mt-md-0">
                <img alt="image" class="img-fluid rounded d-block mx-auto shadow aos-init" data-aos="fade-right" data-aos-offset="300" src="http://via.placeholder.com/410x450/ccc/fff">
            </div>
            <div class="col-12 col-md-5">
                <h2 data-aos="fade-up" class="aos-init">Nice Heading</h2>
                <p class="text-h3 mt-3 lead aos-init" data-aos="fade-up">A collection of coded HTML and CSS elements to help your build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                <ol class="list-unstyled mt-4">
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Very Important Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                    <li class="d-flex mb-2 mt-2 aos-init" data-aos="fade-up">
                        <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Another Key Point</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h3 class="mb-5 display-5 font-weight-bold aos-init" data-aos="fade-up">Conoce nuestros planes</h3>

            <div class="col-12 col-md-12 d-flex   mt-4 mt-md-0">
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./assets/image/fondo.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div> <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./assets/image/fondo.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div> <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="./assets/image/fondo.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div> <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            </div> <!-- row.// -->

            </div>

        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h3 class="mb-5 display-5 font-weight-bold aos-init" data-aos="fade-up">Frequently asked questions (FAQ)</h3>

                <!-- Accordion -->
                <div class="container-fluid bg-gray" id="accordion-style-1">
                    <div class="container">
                        <section>
                            <div class="row">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="fa fa-amazon main"></i><i class="fa fa-angle-double-right mr-3"></i>How to pay amazon.
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/share/qb8D02" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>There are many more.
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/share/qb8D02" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <i class="fa fa-expeditedssl main"></i><i class="fa fa-angle-double-right mr-3"></i>How to enable two factor authentication.
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/share/qb8D02" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        <i class="fa fa-envelope main"></i><i class="fa fa-angle-double-right mr-3"></i>How to contact us.
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.<a href="https://www.fiverr.com/share/qb8D02" class="ml-3" target="_blank"><strong>View More designs <i class="fa fa-angle-double-right"></i></strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- .// Accordion -->
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5" style="">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="row text-center justify-content-center">
                        <div class="col-12 col-md-9 col-lg-7 aos-init" data-aos="fade-up">
                            <h3 class="mb-5 display-4 font-weight-bold">Ready to start?</h3>
                            <p class="text-h3 lead">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-4 aos-init" data-aos="fade-up">
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-md-10">
                                    <form>
                                        <div class="form-group">
                                            <label class=" " for="course-name-1">Your Name</label>
                                            <input name="course-name" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Type your name">
                                        </div>
                                        <div class="form-group">
                                            <label class=" " for="course-email-1">Email Address</label>
                                            <input name="course-email" id="course-email-1" type="email" class="form-control form-control-lg" placeholder="you@yoursite.com">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group mb-1">
                                                    <label class=" ">Skill Level:</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group rounded bg-white p-2 border">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="course-radio-beginner-1" name="course-radio-1" class="custom-control-input">
                                                        <label class="custom-control-label" for="course-radio-beginner-1">Beginner</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group rounded bg-white p-2 border">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="course-radio-advanced-1" name="course-radio-1" class="custom-control-input">
                                                        <label class="custom-control-label" for="course-radio-advanced-1">Advanced</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-lg btn-success btn-block mb-2" type="submit">Claim your free spot</button>
                                            <small class=" ">You’ll recieve your first lesson via email in less than a minute.</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-0 mt-0">
    <div class="footer text-white">
        <div class="   bg-dark pt-5 pb-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="card card-body border-0 mb-0 bd-white text-light px-md-5 py-md-4 shadow-lg aos-init" style="overflow:hidden" data-aos="zoom-out-down">
                            <div class="position-relative d-flex flex-column py-md-2 flex-md-row justify-content-between align-items-center">
                            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------       Carousel for developers      -------->
    <!------ Include the above in your HEAD tag -------->
    <div class="container">
                <div class="row blog">
    <h1>
      <div class="animated fadeInLeft">DEVELOPERS</div><div class="animated fadeInRight text-dark">TEAM</div>
    </h1>
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
    
                            <ol class="carousel-indicators">
                                <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol>
    
                            <!-- Carousel items -->
                            <div class="carousel-inner">
    
                                <div class="carousel-item active">
                                    <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
              <img src="./assets/image/dev1.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Christian René Pioquinto Hernández</h3>
                <span class="post">Project Manager</span>
              </div>
              <ul class="social">
                <li>
                  <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
              <img src="./assets/image/dev2.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">César Haziel Pineda Pacheco</h3>
                <span class="post">UNAM Developer </span>
              </div>
              <ul class="social">
                <li>
                 <!--  --> <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6" >
            <div class="our-team">
              <div class="pic">
                <img src="./assets/image/cico.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Luis Fernando Hernandez Ledezma</h3>
                <span class="post">UNAM Developer</span>
              </div>
              <ul class="social"> 
                <li>
                  <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>
    
    
     <!--    <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Dr. Georges WANET</h3>
                <span class="post">Docteur</span>
              </div>
              <ul class="social">
                <li>
                    <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->
    
    <div class="carousel-item">
    <div class="row">
    <div class="col-lg-1 col-md-6 col-sm-6"> </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
              <img src="./assets/image/dev3.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Emmanuel Martinez Hernandez</h3>
                <span class="post">UNAM Graphic Designer </span>
              </div>
              <ul class="social"> 
                <li>
                  <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6"> </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
              <img src="./assets/image/dev4.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Andrea Garcia Chavez</h3>
                <span class="post"> UNAM Graphic Designer </span>>
                <span>></span>>
              </div>
              <ul class="social">
                <li>
                <!--  -->  <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>
          <!--
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Dr. Saverio TOMASELLA</h3>
                <span class="post">Auteur et Chercheur - Brand Psychoanalysis</span>
              </div>
              <ul class="social">
                <li>
                    <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
              </div>
              <div class="team-content">
                <h3 class="title">Ray BENEDICKTUS</h3>
                <span class="post">Experienced Marketing Consultant</span>
              </div>
              <ul class="social">
                <li>
                    <a href="#" class="fa fa-envelope"></a>
                </li>
              </ul>
            </div>
          </div>-->
        </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->
    
                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->
    
                    </div>
                </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <a href="#">
                            <svg class="d-block mb-4" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                <path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path>
                                <path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path>
                            </svg>
                        </a>
                        <address class="color-light-20">
                            1600 Amphitheatre Parkway
                            <br> Mountain View, CA 94043
                        </address>
                        <ul class="list-unstyled list-light">
                            <li>
                                <a href="#">Disclaimer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <h4 class="my-2">Product</h4>
                        <ul class="list-unstyled list-light">
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Customers</a>
                            </li>
                            <li>
                                <a href="#">Store</a>
                            </li>
                        </ul>
                    </div>
                    <br style="clear:both" class="hidden-sm-up">
                    <div class="col-xs-6 col-sm-3">
                        <h4 class="my-2">Company</h4>
                        <ul class="list-unstyled list-light">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Press</a>
                            </li>
                            <li>
                                <a href="#">Events</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <h4 class="my-2">Connect</h4>
                        <ul class="list-unstyled list-light">
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="#">Social</a>
                            </li>
                            <li>
                                <a href="#">Community</a>
                            </li>
                        </ul>
                        <p class="color-light mt-2">Stay up-to-date!</p>
                        <form>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control form-control-sm" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="button">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row f-flex justify-content-center pb-4" style="">
                    <div class="col text-center  text-secondary my-1">
                        <p class="mt-2  text-white"> © Copyright 2021 • All Rights Reserved ProyectTraker |
                            <a class=" " href="#" data-toggle="modal" data-target="#exampleModalLong">Aviso de Privacidad|
                            <a class=" " href="#">Legales</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Aviso de privacidad simplificado de capacitaciones o eventos presenciales

                El Instituto Veracruzano de Acceso a la Información y Protección de Datos Personales, es el responsable del tratamiento de los datos personales que nos proporcione.

                Sus datos personales, serán utilizados para las siguientes finalidades: a) Registrar su inscripción a la modalidad de capacitación que haya elegido; b) generar listas de asistencias y validación de  las mismas; c) emisión de constancia de participación o asistencia de acuerdo a la modalidad de que se trate; d) establecer comunicación para dar seguimiento de los cursos o aclaración de dudas sobre sus datos, notificación de cancelación o cambio de horario, fecha o sede; y e) generar estadísticas para informes obligatorios del Instituto ante otros organismos públicos o privados.

                De manera adicional, utilizaremos su información personal para las siguientes finalidades que no son necesarias, pero que nos permiten y facilitan brindarle una mejor atención: a) envío de material de exposición o apoyo; y, b) invitaciones a futuros eventos.

                En caso de que no desee que sus datos personales sean tratados para las finalidades adicionales, usted puede manifestarlo en el correo electrónico capacitaciónivai@outlook.com

                Se informa que no se realizarán transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de información de una autoridad competente, debidamente fundados y motivados.

                Para mayor información acerca del tratamiento y de los derechos que puede hacer valer, usted puede acceder al aviso de privacidad integral de cursos o eventos a través de www.ivai.org.mx, en la sección de Avisos de Privacidad.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery is required -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    AOS.init({
        duration: 1200,
    })
</script>


</body>
</html>