<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
.left {
    background-color: #222;
    color: #8b8b8b;
    height: 20rem;
}

.right {
    color: red;
}
</style>

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
                <a class="navbar-brand" href="index1.php"
                    style="font-size: 20px;font-weight: 500;color: aliceblue;">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px;font-weight: 500;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="select_properties.php" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                                PROPERTIES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">APARTMENT</a></li>
                                <li><a class="dropdown-item" href="#">CONDO</a></li>
                                <li><a class="dropdown-item" href="#">Single-family Home</a></li>
                                <li><a class="dropdown-item" href="#">Multi-family Home</a></li>
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



    <!-- this os a heading about agent section -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 col-sm-10 col-xl-10">
                    <h3 class="heading mt-5 mb-5">PROPERTIES</h3>

                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xl-2">
                    <p class="agent mt-5"><a href="index1.php" style="color:#5ac763;"><i class="fa fa-home"
                                aria-hidden="true"></i> </a> <span> /</span> Properties</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Google map  -->
    <section>
        <div class="map mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14226.429522799497!2d75.71549087762831!3d26.947658666662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db30a6225f177%3A0xe28177eff75a1f67!2sDomino&#39;s%20Pizza!5e0!3m2!1sen!2sin!4v1675166449963!5m2!1sen!2sin"
                width="100%" style="border:0; height:30rem;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xl-9">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-sm-10 col-xl-10">
                                <p style="color:#a2a2a2;">15 Properties Found</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xl-2">
                                <h6>Most Recent</h6>
                            </div>
                        </div>
                        <hr>
                        <!-- pagination  -->
                        <nav aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="select_properties.php">1</a></li>
                                <li class="page-item"><a class="page-link" href="properties_page1.php">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="select_properties.php">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="row mt-5">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h-10.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;" style="border-radius:8px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">426 Aliso Ave, Newport Beach, CA</h5>
                                        <p class="card-text" style="color:#a2a2a2;" style="color:#a2a2a2;">Authentic Custom Victorian Beauty</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h-11.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">65 Cape Andover, Newport Beach, CA</h5>
                                        <p class="card-text" style="color:#a2a2a2;">Historic Willmore Area</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h-13.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">2139 Anniversary Ln, Newport Beach, CA</h5>
                                        <p class="card-text" style="color:#a2a2a2;">Cozy Home with New Kitchen</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h-14.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">118 Apolena Ave, Newport Beach, CA</h5>
                                        <p class="card-text" style="color:#a2a2a2;">New Paint and Appliances</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h15.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">1214 Rutland, Newport Beach, CA
                                        </h5>
                                        <p class="card-text" style="color:#a2a2a2;">Get Happy Valley Investment</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
                                <div class="card" style="width: 18rem; border:none;">
                                    <img src="img/h-12.jpg" class="card-img-top" alt="img/home1.jpeg"
                                        style="border-radius:6px;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#2fbcd6;">44 Sea Island, Newport Beach, CA</h5>
                                        <p class="card-text" style="color:#a2a2a2;">Charming 4 Bedroom Home</p>
                                        <p>2 Beds| 2 Baths | 1418FT <sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- pagination  -->
                    <nav aria-label="pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="select_properties.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="properties_page1.php">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="select_properties.php">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>




                <div class="col-md-3 col-lg-3 col-sm-3 col-xl-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                            <div class="card" style="background-color:#f7f7f8;">
                                <div class="card-body">
                                    <h6 class="heading mb-4 mt-2">PROPERTY SEARCH</h6>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Enter your address">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Property Status</option>
                                                <option value="1">For Sale</option>
                                                <option value="2">For Rent</option>
                                                <option value="3">Recently Sold</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Property Type</option>
                                                <option value="1">Condo</option>
                                                <option value="2">Single-Family-Home</option>
                                                <option value="3">Multi-Family-Home</option>
                                                <option value="3">Apartment</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Any Pries</option>
                                                <option value="1">$1,000</option>
                                                <option value="2">$2,000</option>
                                                <option value="3">$3,000</option>
                                                <option value="4">$4,000</option>
                                                <option value="5">$5,000</option>
                                                <option value="6">$10,000</option>
                                                <option value="7">$50,000</option>
                                                <option value="8">$100,000</option>
                                                <option value="9">$500,000</option>
                                                <option value="10">$1000,000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Any Pries</option>
                                                <option value="1">$1,000</option>
                                                <option value="2">$2,000</option>
                                                <option value="3">$3,000</option>
                                                <option value="4">$4,000</option>
                                                <option value="5">$5,000</option>
                                                <option value="6">$10,000</option>
                                                <option value="7">$50,000</option>
                                                <option value="8">$100,000</option>
                                                <option value="9">$500,000</option>
                                                <option value="10">$1000,000</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>City</option>
                                                <option value="1">Jaipur</option>
                                                <option value="2">Jodhpur</option>
                                                <option value="3">Kota</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>State</option>
                                                <option value="1">Rajasthan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Zip</option>
                                                <option value="1">$1,000</option>
                                                <option value="2">$2,000</option>
                                                <option value="3">$3,000</option>
                                                <option value="4">$4,000</option>
                                                <option value="5">$5,000</option>
                                                <option value="6">$10,000</option>
                                                <option value="7">$50,000</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Beds</option>
                                                <option value="1">1+</option>
                                                <option value="2">2+</option>
                                                <option value="3">3+</option>
                                                <option value="4">4+</option>
                                                <option value="5">5+</option>
                                                <option value="6">6+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Baths</option>
                                                <option value="1">1+</option>
                                                <option value="2">2+</option>
                                                <option value="3">3+</option>
                                                <option value="4">4+</option>
                                                <option value="5">5+</option>
                                                <option value="6">6+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <select class="form-select form-select-md mt-4"
                                                style="border:none;background: #d9d9d9;"
                                                aria-label=".form-select-lg example">
                                                <option selected>Property Size</option>
                                                <option value="1">250+FTP</option>
                                                <option value="2">500+FTP</option>
                                                <option value="3">1000+FTP</option>
                                                <option value="4">1250+FTP</option>
                                                <option value="5">1500+FTP</option>
                                                <option value="6">1750+FTP</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                            <button type="submit" class="button mt-5 mb-5"
                                                style="border-radius: 6px;background-color: #5ac763;height: 3rem; width:100%; border:none;">sumbit
                                                form</button>
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


    <!-- Find out what your home is really worth! -->

    <section id="make">
        <div class="container mt-5">
            <div class="row" style="padding-bottom:2rem;">
                <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10">
                    <div class="heading mt-5" style="color: aliceblue;font-size: 27px;font-weight: 400;">
                        Get a <a href="#" style="color: aliceblue;">Free 1-Hour </a> Consultation.<span
                            style="font-size: 22px;color: #ffffffb8;"> Find out what your home is really worth!</span>
                    </div>

                </div>

                <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
                    <button type="button" class="btn btn-dark mt-5">Make Appointment</button>
                </div>
            </div>

        </div>

    </section>

    <!-- footer -->
    <section id="footer" style="margin-top:3%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4" style="padding-bottom: 8rem;">
                            <div class="left_footer">
                                <img src="img/today task.png" alt="" style="width: 80%; margin-top: 12%;">
                                <pre style="    color: #a9abad;font-size: 15px; margin-top: 5%;">3252 Stone Mountain Ave
Los Angeles, CA 90028</pre>

                                <p style="color: #a9abad;font-size: 15px; margin-top: 5%;">(800) 536-3531</p>
                                <a href="#"
                                    style="color: #5ac763;font-size: 15px; text-decoration:none">contact@your-realtor.com</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4" style="background-color:  #302f2fa3;">
                            <h3 style="color: aliceblue; margin-top: 16%;">BROWSE NEIGHBORHOODS</h3>
                            <ul class="list"
                                style="color: #5ac763;font-size: 15px;text-decoration: none; margin-top: 5%; line-height: 29px;">
                                <li>Balboa</li>
                                <li>Ladera Ranch</li>
                                <li>University Park</li>
                                <li>Santa Rosa Valley</li>
                                <li>Arts District</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4" style="background-color: #302f2fa3;">
                            <h3 style="color: aliceblue; margin-top: 16%;">LISTING AGENTS</h3>
                            <ul class="list"
                                style="color: #5ac763;font-size: 15px;text-decoration: none; margin-top: 5%; line-height: 29px;">
                                <li>Chelsea Huntington</li>
                                <li>Jane Doe</li>
                                <li>Jane Doe</li>
                                <li>Laura Mills</li>
                                <li>Stephanie Raines</li>
                            </ul>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>