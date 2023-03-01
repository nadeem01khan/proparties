<?php
include 'connection.php';


    if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM `gallrey_form_data` WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    if ($data) {
    header('location:Gallrer_list.php');
    }
}
?>