<?php
include 'connection.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="UPDATE `website_contact_data` SET `name`='$name',`email`='$email',`phone`='$phone',`message`='$message' WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    header('location:Web_contact_list.php');
}



?>