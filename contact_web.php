<?php

$servername="localhost";
$username="root";
$password="";
$dbname="jenny_websit";

$conn = new mysqli ($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="INSERT INTO `website_contact_data`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
    $data=mysqli_query($conn,$sql);
}



?>


<?php
include 'header.php';
?>


    <!-- this os a heading about agent section -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-11 col-sm-11 col-xl-11">
                    <h3 class="heading mt-5 mb-5">CONTACT</h3>

                </div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xl-1">
                    <p class="agent mt-5"><a href="index1.php" style="color:#5ac763;"><i class="fa fa-home"
                                aria-hidden="true"></i></a> <span> /</span> Contact</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Google map  -->
    <section>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14226.429522799497!2d75.71549087762831!3d26.947658666662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db30a6225f177%3A0xe28177eff75a1f67!2sDomino&#39;s%20Pizza!5e0!3m2!1sen!2sin!4v1675166449963!5m2!1sen!2sin"
                width="100%" style="border:0; height:30rem;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <!-- Send a message, our team is standing by. -->

    <section>
        <div class="container mb-5">
            <h3 class="heading mt-4 mb-5" style="text-align: center;color: #5ac763; font-weight: 400;">
                Send a message, our team is standing by.
            </h3>
            <p style="text-align:center; color:#8b8b8b;">Far far away, behind the word mountains, far
                from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            <p style="text-align:center; color:#8b8b8b;">Bookmarksgrove right at the coast of the Semantics, a large
                language ocean.</p>
        </div>
    </section>


    <!-- contect form  -->


    <section class="button mb-5">
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1"></div>
                    <div class="col-md-9 col-sm-9 col-lg-9 col-xl-9">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10">
                                <div class="row">
                                    <input type="text" name="name" id="" class="form-control mb-4 "
                                        placeholder="Enter your name" style="background-color:#9db19b4f; height:3rem;">
                                </div>
                                <div class="row">
                                    <input type="email" name="email" id="" class="form-control mb-4"
                                        placeholder="Enter your email address"
                                        style="background-color:#9db19b4f; height:3rem;">
                                </div>
                                <div class="row">
                                    <input type="number" name="phone" id="" class="form-control mb-4"
                                        placeholder="Enter your contect number"
                                        style="background-color:#9db19b4f; height:3rem;">
                                </div>

                                <div class="row">
                                    <textarea id="" class="text mb-4" name="message" rows="8" cols="50"
                                        placeholder="Please enter your messages and feedback"
                                        style="background-color:#9db19b4f;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>

                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1"></div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-xl-5">
                            <button type="submit" name="submit" vallue="submit" class="button mb-3"
                                style="border-radius: 6px;background-color: #5ac763;height: 3rem; width:10rem; border:none;">sumbit
                                form</button>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6"></div>
                    </div>
            </form>
        </div>
    </section>

<?php 
include 'footer.php';
?>





