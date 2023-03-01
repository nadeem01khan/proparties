<?php
include 'connection.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $data="SELECT * FROM `appointment` WHERE `id`='$id'";
    $sql1=mysqli_query($conn,$data);
    $row=mysqli_fetch_assoc($sql1);
}

?>

<?php include 'header1.php'?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
    body {
        font-family: 'Lato', sans-serif;
    }

    h1 {
        margin-bottom: 40px;
    }

    label {
        color: #333;
    }

    .btn-send {
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        width: 80%;
        margin-left: 3px;
    }

    .help-block.with-errors {
        color: #ff5050;
        margin-top: 5px;

    }

    .card {
        margin-left: 10px;
        margin-right: 10px;
    }

    .error{
        color:red;
    }
    </style>
</head>

<body>
<div class="container">
        <div class=" text-center mt-5 ">
            <h1>Meeting Appoint Update Form</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="form" role="form" method="post" action="appointment.php">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Name</label>
                                                <input id="form_name" type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Email</label>
                                                <input class="form-control" type="email" name="email" value="<?php echo $row['email']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                                    class="form-control" type="number" name="phone" value="<?php echo $row['phone']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="form-label">Meeting Date</label>
                                                <input class="form-control" type="text" name="metting_date" value="<?php echo $row['metting_date']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="form-label">Meeting Time</label>
                                                <input class="form-control" type="text" name="metting_time" value="<?php echo $row['metting_time']?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="form-label">message</label>
                                                <input type="text" name="message" class="form-control" value="<?php echo $row['message']?>" id="">                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xl-3 col-lg-3"></div>
                                        <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6">
                                            <div class="form-button mt-3">
                                            <button id="submit" type="submit" name="update" class="btn btn-primary">update</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include 'footer1.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#form').validate({
                rules:{
                    name:{
                        required:true,
                    },
                    email:{
                        required:true,
                    },
                    phone:{
                        required:true,
                    },
                    metting_date:{
                        required:true,
                    },
                    metting_time:{
                        required:true,
                    },
                    message:{
                        required:true,
                    }
                },
                messages:{
                    name:{
                        required:"please enter your name",
                    },
                    email:{
                        required:"please email address your ",
                    },
                    phone:{
                        required:"please enter phone number",
                    },
                    metting_date:{
                        required:"please enter metting date",
                    },
                    metting_time:{
                        required:"please select metting time",
                    },
                    message:{
                        required:"please enter your messages",
                    }
                }
            });
        });
    </script>