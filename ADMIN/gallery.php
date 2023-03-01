<?php
include 'connection.php';


if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];

    if ($_FILES["image"]["name"] == '') {
        $filename=$_POST['img'];
    }else{
        $filename = $_FILES["image"]["name"];
    }

    // echo $filename;exit();
    $tempname = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tempname, "uplodes/".$filename); 
   //  image upload succefull 
    $status=$_POST['status'];

   $sql="UPDATE `gallrey_form_data` SET `name`='$name',`image`='$filename',`status`='$status' WHERE `id`='$id'";
   $result=mysqli_query($conn,$sql);

    if ($result) {
       header('location:Gallrer_list.php');
      }

    
}

?>