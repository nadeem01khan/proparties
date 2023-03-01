<?php
include 'connection.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $metting_date=$_POST['metting_date'];
    $metting_time=$_POST['metting_time'];
    $message=$_POST['message'];
    
    $sql="UPDATE `appointment` SET `name`='$name',`email`='$email',`phone`='$phone',`metting_date`='$metting_date',`metting_time`='$metting_time',`message`='$message' WHERE `id`='$id'";
    $hey=mysqli_query($conn,$sql);

    header('location:appointment_meeting_list.php');

}
?>