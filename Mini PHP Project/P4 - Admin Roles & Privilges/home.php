<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        header('location: login.php');
    }

    if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] != '1'){
        header('location: personal info.php');
        // die();
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-Shop | Ecommerce</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Style.css" type="text/css">
    <!-- responcive css -->
    <link rel="stylesheet" href="responcive.css" type="text/css">
    <!-- Title Icon -->
    <link rel="shortcut icon" href="Image/favicon.png" type="image/x-icon">

</head>

<body>

    <!--======== Header section start =========-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="Image/ecommerce-logo-png-11.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="personal info.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 action-menu">
                        <form class="search-form">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success search-btn" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cart4 position-relative">
                                    <span style="font-size: 12px;"
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i>
                            </a>
                            <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--======== Header section end =========-->

    <!--======== Slider section start =========-->
    <section class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="container">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6 slider-text">
                                <h2 class="text-success">
                                    Order <span class="lighten">Online</span>, Save Your <span
                                        class="lighten">Time</span>
                                </h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel natus culpa omnis,
                                    labore illum id aliquam. Labore maiores architecto sed.</p>
                                <a href="#" class="btn-order-naw">Order naw <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="col-lg-6 slider-image">
                                <img src="Image/f1.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6 slider-text">
                                <h2 class="text-success">
                                    Order <span class="lighten">Online</span>, Save Your <span
                                        class="lighten">Time</span>
                                </h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel natus culpa omnis,
                                    labore illum id aliquam. Labore maiores architecto sed.</p>
                                <a href="#" class="btn-order-naw">Order naw <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="col-lg-6 slider-image">
                                <img src="Image/f3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--======== Slider section end =========-->

    

    <!--======== Footer section Start =========-->
    <footer class="border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="Image/ecommerce-logo-png-11.png" height="40" alt="">
                    <h4 class="mt-3">Get the app</h4>
                    <p>NEfresh App is now available on Google Play & App Store. Get it now.</p>
                    <img src="Image/store1.png" alt="">
                    <img src="Image/store2.png" alt="">
                </div>
                <div class="col-lg-3">
                    <h4>Information</h4>
                    <ul class="footer-list">
                        <li><a href="">About us</a></li>
                        <li><a href="">Shipping Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>User Area</h4>
                    <ul class="footer-list">
                        <li><a href="">My account</a></li>
                        <li><a href="">My Cart</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Checkout</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Contact Info</h4>
                    <p>07577985281</p>
                    <p>509 724 580 - issued in New York (NY) on 03/11/2019, expires 08/11/2023</p>
                    <p>support@eshop.com</p>
                </div>
            </div>
            <hr>
            <div class="copyright-text mt-3 text-center">
                <a href="">Copyright © 2021 <span class="text-dark fw-bold">Web</span>
                    <span class="text-danger fw-bold">Burden</span></a>
            </div>
        </div>
    </footer>
    <!--======== Footer section end =========-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>