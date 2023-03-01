<?php

include 'connection.php';


    if (isset($_GET['id'])) {

    $id=$_GET['id'];
    $sql="DELETE FROM `properties_form_data` WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    if ($data) {
    header('Location:properties_list.php');
    }
}
?>