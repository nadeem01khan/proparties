<?php
include 'connection.php';


if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $data="SELECT * FROM `gallrey_form_data` WHERE `id`='$id'";
    $sql1=mysqli_query($conn,$data);
    $row=mysqli_fetch_assoc($sql1);
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

    .mask-custom {
        backdrop-filter: blur(15px);
        background-color: rgba(255, 255, 255, .2);
        border-radius: 3em;
        border: 2px solid rgba(255, 255, 255, .1);
        background-clip: padding-box;
        box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }

    #input {
        border-radius: 10px;
    }

    h2 {
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

                                        <h2 class="text-center mb-5">Gallrey Update Form</h2>

                                        <form id="form" action="gallery.php" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-12 col-md-12 mb-2">
                                                    <div class="form-outline form-white">
                                                        <input type="text" name="name" id="input"
                                                            placeholder="Enter name" value="<?php echo $row['name']?>"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Example1">Name</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                        <img src="uplodes/<?php echo $row['image']?>" alt="" style="height:6rem;">
                                                        <input type="hidden" name="img" value="<?php echo $row['image']?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
                                                    <div class="form-outline form-white mb-4">
                                                
                                                        <input type="file" name="image" class="form-control"
                                                            value="<?php echo $row['image']?>" id="input">
                                                        <label for="">Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- status input -->
                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                                                    <div class="form-outline form-white mb-4 ">
                                                        <textarea type="statys" name="status" id="input" rows="4"
                                                            value=""
                                                            class="form-control form-control-lg"><?php echo $row['status']?></textarea>
                                                        <label class="form-label" for="input">status</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                <input type="submit" value="update" name="update"
                                                class="form-control btn btn-info mt-3" style="font-weight: 700;">
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