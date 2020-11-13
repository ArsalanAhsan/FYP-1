<?php

session_start();
include("../function/function.php");

if(!isset($_SESSION['uemail']))
{
  echo "<script>window.open('admin_login.php','_self')</script>";
}
date_default_timezone_set("Asia/Karachi");

?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:10:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>MazdorJee - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    
	<!--amcharts -->
	<link href="lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">

    <script src="https://kit.fontawesome.com/51238610b6.js" crossorigin="anonymous"></script>
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index-2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
      
		
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index-2.html">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>MazdoorJee </b></span>
			</a>
		</div>
        <div class="image">
          <img src="images/techtrixlogo3.png" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin Panel</p>
			
            <a href="admin_logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="index.php">
          <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>User's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user_list.php">User List</a></li>
          
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>Service's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_service.php">Add Service</a></li>
            <li><a href="service_list.php">Service List</a></li>
          
           
          </ul>
        </li>


 <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>Work's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_work.php">Add Works</a></li>
            <li><a href="work_list.php">Work List</a></li>
          
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>Engine's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_engine.php">Add Engine</a></li>
            <li><a href="engine_list.php">Engine List</a></li>
          
           
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>Worker's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_worker.php">Add Worker</a></li>
            <li><a href="worker_list.php">Worker List</a></li>
          
           
          </ul>
        </li>


         <li class="treeview">
          <a href="#">
           <i class="fas fa-tachometer-alt"></i>
            <span>Booking's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="unconfirm_booking.php">UnConfirmed Booking</a></li>
            <li><a href="confirm_booking.php">Confirmed Booking</a></li>
           
          
           
          </ul>
        </li>


        
        
      </ul>
    </section>
  </aside>