<?php
include 'connection.php';


if (isset($_POST['submit'])) {
     $name=$_POST['name'];
    //  image upload 
     $filename = $_FILES["image"]["name"];
     $tempname = $_FILES["image"]["tmp_name"];
     move_uploaded_file($tempname, "uplodes/".$filename); 
    //  image upload succefull 
     $status=$_POST['status'];

     $sql="INSERT INTO `gallrey_form_data`(`name`, `image`, `status`) VALUES ('$name','$filename','$status')";
     $ress=mysqli_query($conn,$sql);

     header('location:Gallrer_list.php');
}

?>

<?php include 'header1.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallrey upload photo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .intro {
        height: 100%;
    }

    @media (min-width: 550px) and (max-width: 750px) {
        .intro {
            height: 750px;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        .intro {
            height: 750px;
        }
    }

    .error {
        color: red;
    }

    .mask-custom {
        backdrop-filter: blur(15px);
        background-color: rgba(255, 255, 255, .2);
        border-radius: 3em;
        border: 2px solid rgba(255, 255, 255, .1);
        background-clip: padding-box;
        box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }

    #input{
        border-radius:10px;
    }

    h2{
        text-decoration: underline;
    color: black;
    font-size: 33px;
    font-weight: 800;
    font-style: normal;
    }
    </style>
</head>

<body>
    <section class="intro">
        <div class="bg-image h-100"
            style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img5.jpg');">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                            <div class="card mask-custom">
                                <div class="card-body p-5 text-white">

                                    <div class="my-4">

                                        <h2 class="text-center mb-5">Upload Gallrey</h2>

                                        <form id="form" method="post" enctype="multipart/form-data">
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-12 col-md-12 mb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="text" name="name" id="input"
                                                            placeholder="Enter name"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Example1">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12  ">
                                                    <div class="form-outline form-white mb-4">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" class="form-control" id="input">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- status input -->
                                            <div class="row mt-5">
                                                <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                                                <div class="form-outline form-white mb-4">
                                                <textarea type="status" name="status" id="input"
                                                    class="form-control form-control-lg" rows="4" ></textarea>
                                                <label class="form-label" for="form3Example4">status</label>
                                            </div>
                                                </div>
                                            </div>

                                            <!-- Submit button -->
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                <input type="submit" value="submit" name="submit"
                                                class="form-control btn btn-info mt-3" >
                                                </div>
                                                <div class="col-md-3"></div>
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
            status: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "please enter your ",
            },
            image: {
                required: "please upload ",
            },
            status: {
                required: "please enter your ",
            }
        }
    });
});
</script>