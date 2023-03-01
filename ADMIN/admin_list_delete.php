<?php
include 'connection.php';

    if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM `admin_ragistration` WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    if ($data) {
    header('location:admin_ragistration_list.php');
    }
}
?>