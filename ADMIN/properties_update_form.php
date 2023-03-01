<?php
include 'connection.php';


if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $data="SELECT * FROM `properties_form_data` WHERE `id`='$id'";
    $sql1=mysqli_query($conn,$data);
    $row=mysqli_fetch_assoc($sql1);
}


?>

<?php include 'header1.php' ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>properties form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    html,
    body,
    .intro {
        height: 100%;
    }

    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    h1 {
        text-decoration: underline;
        color: black;
        font-size: 33px;
        font-weight: 800;
        font-style: normal;
    }

    #input {
        border-radius: 10px;
    }
    .error{
      color:red;
    }
    </style>
</head>

<body>
    <section class="intro">
        <div class="bg-image-vertical h-100" style="background-color: #EFD3E4;
          background-image: url(https://mdbootstrap.com/img/Photos/new-templates/search-box/img1.jpg);
        ">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body p-5">

                                    <h1 class="text-center"> Properties Update Form</h1>

                                    <form id="form" method="post" action="properties.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row" >
                                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6" >
                                                <div class="form-outline" style="margin-top:6rem;">
                                                    <input type="text" name="name" value="<?php echo $row['name']?>"
                                                        id="input" class="form-control" />
                                                    <label class="form-label" for="input">Name</label>
                                                </div>
                                            </div>

                                            <!-- Text input -->
                                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                                <div class="form-outline">
                                                    <img src="properties_form_image/<?php echo $row['image']?>" alt="" style="height: 6em;;" >
                                                    <input type="hidden" name="img" value="<?php echo $row['image']?>">
                                                    <input type="file" name="image"  value="<?php echo $row['image']?>"
                                                        class="form-control" id="input">
                                                    <label class="form-label" for="input">Image</label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input -->
                                        <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 ">
                                                <div class="form-outline ">
                                                    <input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="price" value="<?php echo $row['price']?>"
                                                        id="input" class="form-control" />
                                                    <label class="form-label" for="input">price</label>
                                                </div>
                                            </div>
                                            <!-- discription input -->
                                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                                <div class="form-outline">
                                                    <input type="disc" name="discription"
                                                        value="<?php echo $row['discription']?>" id="input"
                                                        class="form-control" />
                                                    <label class="form-label" for="input">Discription</label>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Message input -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                                                <div class="form-outline mb-4">
                                                    <textarea class="form-control" value="" id="input" name="status"
                                                        rows="4"><?php echo $row['discription']?></textarea>
                                                    <label class="form-label" for="input">Status</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="row">
                                        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>
                                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                        <button type="submit" name="update" value="update"
                                            class="btn btn-secondary btn-rounded btn-block">Upadate</button>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>
                                    </form>

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
            price: {
                required: true,
            },

            discription: {
                required: true,
            },
            status: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "please enter your name",
            },
            price: {
                required: "please enter price",
            },

            discription: {
                required: "please enter your discription",
            },
            status: {
                required: "please enter your status",
            },
        }
    });
});
</script>