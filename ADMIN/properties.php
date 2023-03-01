<?php

include 'connection.php';



if (isset($_POST['update'])) {
    $id=$_POST['id']; 
    $name=$_POST['name'];
    $price=$_POST['price'];
 
    
   
    if ($_FILES["image"]["name"] == '') {
        $filename=$_POST['img'];
    }else{
        $filename = $_FILES["image"]["name"];
    }

    // echo $filename;exit();
    $tempname = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tempname, "properties_form_image/".$filename); 
    $discription=$_POST['discription'];
    $status=$_POST['status'];

    $sql="UPDATE `properties_form_data` SET `name`='$name',`price`='$price',`image`='$filename',`discription`='$discription',`status`='$status' WHERE `id`='$id'";

    $jenny=mysqli_query($conn,$sql);

    header('location:properties_list.php');

    
}


?>