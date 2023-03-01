<?php

include 'connection.php';


    if (isset($_GET['id'])) {

    $id=$_GET['id'];
    $sql="DELETE FROM `appointment` WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    if ($data) {
    header('Location:appointment_meeting_list.php');
    }
}
?>