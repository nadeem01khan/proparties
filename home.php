<?php
include 'header.php';
?>

<section id="hero1">
        <div class="home">
            <div class="row">
                <div class="search">
                    <!-- <p style="margin-top: 9rem; font-style: italic; line-height: 10rem;">Find Your Home In <a
                            class="text" href="#"
                            style="text-decoration:none; color:rgb(0,208,130);font-size: 125%;font-weight: 600;">Los
                            Angeles.</a></p> -->

                </div>
                <div class="search_bar">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8">
                            <!-- <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    style="height:4rem;">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
        </div>

        </div>
        </div>
    </section>

    <!-- about realstates -->

    <section>
        <div class="container" style="padding-bottom: 2rem;">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8">
                    <h4 class="welcome mt-5" style="font-size: 17px;">WELCOME TO AVLAR</h4>
                    <h3 style="font-size: 32px;">We Are Los Angeles's Finest Real Estate Firm</h3>
                    <p style="margin-top: 2%;color: #8b8b8b;font-family: 'Roboto';font-size: 15px;line-height: 1.65;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestias dolores blanditiis
                        nesciunt doloremque modi eaque in, est voluptates! Quidem corporis quisquam vero inventore
                        ducimus, omnis magnam reiciendis odio vitae dicta atque ratione pariatur nesciunt dolorem
                        asperiores est repudiandae? In excepturi, ex impedit delectus voluptatem recusandae ipsam
                        officia blanditiis, amet sint perferendis voluptatibus. Officiis cum voluptatum voluptas, harum
                        omnis reprehenderit tenetur beatae nulla aut delectus numquam libero, quod autem dolor eum modi
                        expedita atque excepturi!</p>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
                    <div class="accordion mt-5" id="accordionExample">
                        <div class="accordion-item" style="background-color: #BDC0C2;">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Buying a home ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime ad, qui vitae
                                    minima provident dignissimos.<br>
                                    <p style="    color: #2fbcd6;font-weight: 700;padding-top: 13px;">We can help you
                                        get started</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="background-color: #BDC0C2;">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Selling a home?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat cumque beatae
                                        ipsam earum quisquam.</p>
                                    <p style="    color: #2fbcd6;font-weight: 700;padding-top: 13px;">Form marketing
                                        Closing</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="background-color: #BDC0C2;">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Need a loan?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis consequatur
                                        et autem nesciunt incidunt.</p>
                                    <p style="    color: #2fbcd6;font-weight: 700;padding-top: 13px;">Get the lowest APR
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- about card  -->

    <section id="card">
        <div class="container">
            <div class="heading">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                        <h6 style="margin-top: 4rem; color: #1b1d27; line-height: 1.4;">BROWSE LOS ANGELES NEIGHBORHOODS
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <?php
                                        $i=1;
                                        $sql1="SELECT * FROM gallrey_form_data";
                                        $result=mysqli_query($conn,$sql1);
                                        while ($row=mysqli_fetch_assoc($result)){ 
                                            
                                            ?>

                        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 ">
                            <div class="card bg-dark text-white mt-3">
                                <img src="uplodes/<?php echo $row['image']?>" alt="<?php echo $row['image']?>"
                                    class="card-img" style="height: 245px;">
                                <div class="card-img-overlay">
                                    <h5 style="padding-top: 11rem;"><?php echo $row['status']?></h5
                                        style="padding-top: 11rem;">
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- show home card  -->

    <section id="house">
        <div class="container mt-5">
            <div class="heading ">
                <h5>LATEST PROPERTIES</h5>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <?php
                        
                        $a=1;
                        $sql2="SELECT * FROM properties_form_data ";
                        $hey=mysqli_query($conn,$sql2);
                        while ($row=mysqli_fetch_assoc($hey)) {?>

                        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3">
                            <div class="card mt-4" style="border: none;">
                                <img src="properties_form_image/<?php echo $row['image']?>"
                                    alt="<?php echo $row['image']?>" class="card-img-top"
                                    style="border-radius: 5px; height: 205px;px;">
                                <div class="card-body">
                                    <a href="#" class="card-link"
                                        style="text-decoration: none;color: #2fbcd6; font-size: 18px; font-weight: 600;"><?php echo $row['discription']?></a><br>
                                    <a href="#" class="card-link" style="text-decoration: none; color: #a2a2a2;;">Ready
                                        to
                                        Purchase Today!</a>
                                    <pre style="margin-top: 10px;">2 Beds 2 Baths 1418FT <sup>2</sup></pre>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- OUR AGENTS  -->

    <section id="AGENTS">
        <div class="container mt-2">
            <h5 style="padding-top: 3rem;">OUR AGENTS</h5>
            <div class="row mt-1">
                <?php
                
                $a=1;
                $sql3= " SELECT * FROM agent_data";
                $jenny=mysqli_query($conn,$sql3);
                while ($row=mysqli_fetch_assoc($jenny)) {?>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3">
                    <div class="card mt-4">
                        <img src="agent_image/<?php echo $row['image']?>" class="card-img-top"
                            alt="<?php echo $row ['image']?>" style="height: 350px;">
                        <div class="card-body">
                            <a href="#" class=""
                                style="font-weight: 400;font-size: 20px;text-decoration: none;color: #2fbcd6; line-height: 1.4;"><?php echo $row['name']?></a><br>
                            <p
                                style="line-height: 1.4;font-size: 15px;color: #1b1d27;font-weight: 400;margin-top: 4px;">
                                <?php echo $row['category']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>