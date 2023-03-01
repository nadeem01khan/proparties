<?php 
include 'header1.php';
?>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="INSERT INTO `website_contact_data`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
    $data=mysqli_query($conn,$sql);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web contect form</title>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4"></div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
    <h3 class="heading ">Hey Baddy,</h3>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4"></div>
    </div>
</div>

<div class="container mt-5 ">
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
                                    <textarea id="" class="text mb-4" name="message" rows="8" cols="100"
                                        placeholder="Please enter your messages and feedback"
                                        style="background-color:#9db19b4f;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6"></div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
                            <button type="submit" name="submit" vallue="submit" class="button mb-3"
                                style="border-radius: 6px;background-color: #5ac763;height: 3rem; width:10rem; border:none;">sumbit
                                form</button>
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
                    </div>
            </form>
        </div>
</body>
</html>
<?php 
include 'footer1.php';
?>