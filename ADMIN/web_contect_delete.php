<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete="DELETE FROM `website_contact_data` WHERE `id`='$id'";
    $row=mysqli_query($conn,$delete);

    if($row){
        header('location:Web_contact_list.php');
    }
}

?>