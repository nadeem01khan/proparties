<?php
session_start();
unset( $_SESSION["key"]);
unset( $_SESSION["name"]);
header('location:admin_login.php');
?>