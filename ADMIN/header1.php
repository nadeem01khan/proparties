<?php 
session_start();
if (!isset($_SESSION['key'])) {
    header("Location:admin_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link"   href="logout.php" role="button">
        <i class="fa fa-sign-out " aria-hidden="true">?</i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link"> 
    <lord-icon
    src="https://cdn.lordicon.com/hbvyhtse.json"
    trigger="hover"
    colors="primary:#e4e4e4"
    scale="60"
    style="width:32px;height:32px;     margin-left: 18px;margin-bottom: -10px;">
</lord-icon>
<!-- login wale ka name show krne ke liye  -->
<span class="brand-text font-weight-light" style="margin-left:5px;"><?php echo $_SESSION['name']?></span>    

      <!-- login krne wale ka name  -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="admin_ragistration_list.php" class="nav-link">
            <i class="fa fa-male ml-2" aria-hidden="true"></i>
              <p class="list ml-3">
                Web List
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="agent_list.php" class="nav-link">
              <i class="nav-icon far fa fa-address-card"></i>
              <p>
                Agent List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Gallrer_list.php" class="nav-link">
              <i class="nav-icon  far fa-image"></i>
              <p>
                Gallery List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="appointment_meeting_list.php" class="nav-link">
            <i class="fa fa-book ml-1" aria-hidden="true"></i>
              <p class="list ml-2">
                Appointment  List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="properties_list.php" class="nav-link">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>Properties list</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Web_contact_list.php" class="nav-link">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>Web Contect Data</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">