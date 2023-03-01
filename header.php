<?php 
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login_web.php");
}

$servername="localhost";
$username="root";
$password="";
$dbname="jenny_websit";

$conn = new mysqli ($servername,$username,$password,$dbname);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page for house Selling</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section class="bg-dark text-light">
        <div class="khan">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 d-flex number1 ">

                        <i class="fa fa-mobile fa-lg mt-2" aria-hidden="true"></i>
                        <p class="phone ps-2 mt-1">(800)536-3532</p>

                        <i class="fa fa-envelope-o ps-5 mt-2 " aria-hidden="true"></i>
                        <p class="gmail ps-2 mt-1">contact@your-realtor.com</p>

                    </div>
                    <div class="col-4  number2"></div>
                    <style>
                    .khan {
                        border-bottom: 1px solid #8b8b8b;
                    }

                    .gmail:hover {
                        opacity: 0.7;
                    }

                    .phone:hover {
                        opacity: 0.7;
                    }

                    .favour:hover {
                        opacity: 0.7;
                    }

                    .submit:hover {
                        opacity: 0.7;
                    }

                    .login:hover {
                        opacity: 0.7;
                    }
                    </style>

                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 mt-1 d-flex number3">

                        <i class="fa fa-heart-o mt-1 " aria-hidden="true"></i>
                        <p class="favour ps-1">Your Favourites</p>

                        <i class="fa fa-dot-circle-o mt-1 ps-4" aria-hidden="true"></i>
                        <p class="submit ps-1 ">Submit a property</p>

                        <a class="fa fa-sign-in mt-1 ps-5" href="logout_web.php" aria-hidden="true"
                            style="font-size:25px;text-decoration: none; color: aliceblue;"></a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="avlar bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                    <div class="row  align-items-center">
                        <div class="col-8 mt-3 mb-3">
                            <img src="https://149353251.v2.pressablecdn.com/wp-content/themes/avlar-progression/images/logo.png"
                                width="294px" alt="">

                        </div>
                        <div class="col-md-2 mt-5">
                            <i class="bi-facebook bg-light" style="border-radius: 3px;"></i>
                            <i class="bi-twitter bg-light" style="border-radius: 3px; margin-left: 20px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- navbar start -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="home.php"
                    style="font-size: 20px;font-weight: 500;color: aliceblue;">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px;font-weight: 500;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="select_properties.php" role="button"
                                aria-expanded="false" style="color: aliceblue;">PROPERTIES</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="select_properties.php">PROPERTIES</a></li>
                                <li><a class="dropdown-item" href="apartment.php">Apartment</a></li>
                                <li><a class="dropdown-item" href="condo.php">Condo</a></li>
                                <li><a class="dropdown-item" href="single-family-home.php">Singl-Family-Home</a></li>
                                <li><a class="dropdown-item" href="MULTI-FAMILY-HOME.PHP">Multi-Family-Home</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="select_agent.php" style="color: aliceblue;">AGENT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                                MEGA MENU
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php" style="color: aliceblue;">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="SUMBIT_A_PROPERTIES.php" style="color: aliceblue;">SUBMIT A
                                PROPERTY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_web.php" style="color: aliceblue;">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- searcher bar -->
