<?php
include 'connection.php';


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tempname, "agent_image/".$filename); 
    $category=$_POST['category'];
    $status=$_POST['status'];
    
    $sql="INSERT INTO `agent_data`(`name`, `image`, `category`, `status`) VALUES ('$name','$filename','$category','$status')";
    $hey=mysqli_query($conn,$sql);

    header('location:agent_list.php');

}



?>

<?php include 'header1.php' ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
    .intro {
        height: 100%;
    }

    .error {
        color: red;
    }

    .gradient-custom {
        /* fallback for old browsers */
        background: #fa709a;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1))
    }
    
    #input{
        border-radius:10px;
    }
    </style>
</head>

<body>
    <section class="intro">
        <div class="mask d-flex align-items-center h-100 gradient-custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card mt-5">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2" style="text-align: center;text-decoration: underline;font-size: 30px;font-weight: 700;font-style: normal;">Agent Registration Form</h3>

                                <form id="form" action="" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" id="input" name="name" class="form-control" />
                                                <label class="form-label" for="firstName">Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="file" name="image" id="input" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="category" id="input" class="form-control" />
                                                <label class="form-label" for="category">Category</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 mb-4">

                                            <div class="form-outline datepicker">
                                                <input type="text" name="status" class="form-control"
                                                id="input" />
                                                <label for="birthdayDate" class="form-label">Status</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-4">
                                                <input class="btn btn-warning btn-lg" type="submit" name="submit"
                                                    value="Submit" />
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
$(document).ready(function() {
    $('#form').validate({
        rules: {
            name: {
                required: true,
            },
            image: {
                required: true,
            },
            category: {
                required: true,
            },
            status: {
                required: true,
            },
        },

        messages: {

            name: {
                required: "Please enter a name",
                minlength: "Your name must consist of at least 2 characters"
            },
            image: {
                required: "please upload image",
            },
            category: {
                required: " Please enter a category",
            },
            status: {
                required: "Please enter your status",
            },
        },

    });
});
</script>