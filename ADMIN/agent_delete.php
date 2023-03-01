<?php
include 'connection.php';

    if (isset($_GET['id'])) {

    $id=$_GET['id'];
    $sql="DELETE FROM `agent_data` WHERE `id`='$id'";
    $data=mysqli_query($conn,$sql);

    if ($data) {
    header('Location:agent_list.php');
    }
}
?>