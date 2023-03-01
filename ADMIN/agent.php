<?php
include 'connection.php';


if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
  
    if ($_FILES["image"]["name"] == '') {
        $filename=$_POST['img'];
    }else{
        $filename = $_FILES["image"]["name"];
    }

    $tempname = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tempname, "agent_image/".$filename); 
    $category=$_POST['category'];
    $status=$_POST['status'];
    
    $sql1="UPDATE `agent_data` SET `name`='$name',`image`='$filename',`category`='$category',`status`='$status' WHERE `id`='$id'";
    $hey=mysqli_query($conn,$sql1);
    
    header('location:agent_list.php');

}



?>