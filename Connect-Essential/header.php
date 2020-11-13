<?php
session_start();
include("function/function.php");

?>

<!DOCTYPE html>
<html>

<!-- Mirrored from wp.efforttech.net/html/tecnic/tecnic/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Aug 2020 17:15:48 GMT -->
<head>
<meta charset="utf-8">
<title>MazdorJee | Homepage</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/theme-one.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body class="">

<div class="page-wrapper">
 	
    <!-- Preloader -->
	<div class="preloader">
		<div class="box"></div>
	</div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-three">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
				
					<!-- Top Left -->
					<div class="top-left pull-left">
						<!-- Page Nav -->
						<ul class="page-nav">
							<li>Start your project today <strong>+00-555-67-890</strong></li>
						</ul>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right">
					
						<!-- Info List -->
                        <ul class="info-list">
							<li><span class="icon flaticon-placeholder-filled-point"></span> 86 Brattle Street, Cambridge, MA 02138</li>
							<li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> <a href="mailto:tecnic_company@mail.com"> info@example.com</a></li>
						</ul>
						
                    </div>
					
                </div>
            </div>
        </div>
		
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
					<!-- Logo Box -->
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="images/header_before_scroll_wali.png" style="height: 80px" alt="" title=""></a></div>
						<div class="logo-light"><a href="index.html"><img src="images/header_before_scroll_wali.png" style="height: 80px;margin-top: -20px" alt="" title=""></a></div>
                    </div>
                   	
					<!-- Nav Outer -->
                   	<div class="nav-outer clearfix">
						
						<!-- Mobile Navigation Toggler For Mobile -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- End Mobile Navigation Toggler For Mobile -->
						
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current"><a href="index.php"><span data-hover="Home">Home</span></a>
                                      
                                    </li>
									
									
									<li class="dropdown"><a href="#"><span data-hover="Service's">Service's</span></a>
										<ul>
											<?php 

											$fet_ser="select * from tbl_service";
											$run_ser=mysqli_query($con,$fet_ser);
											while($row_ser=mysqli_fetch_array($run_ser))
											{
												$sid=$row_ser['service_id'];
												$sname=$row_ser['service_title'];

												echo "<li><a href=''>$sname</a></li>";
											}

											?>
											
											
										</ul>
									</li>
									
									<li class="dropdown"><a href="#"><span data-hover="Package's">Package's<sup>*</sup></span></a>
										<ul>
										<li>
												<?php 

											$fet_ser="select * from tbl_service";
											$run_ser=mysqli_query($con,$fet_ser);
											while($row_ser=mysqli_fetch_array($run_ser))
											{
												$sid=$row_ser['service_id'];
												$sname=$row_ser['service_title'];

												echo "<li><a href=''>$sname</a></li>";
											}

											?>
										</ul>
									</li>
									<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
								</ul>
							</div>
							
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
						
							<!-- Search Btn -->
							<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
							
							<!-- Quote Btn -->
							<div class="btn-box">

								<?php
								if(!isset($_SESSION['uemail']))
								{?>

								<a href="user_login.php" class="theme-btn btn-style-three"><span class="txt">Sign Up</span></a>
								<?php 
								}
								else
								{?>
<a href="user_dashboard.php" class="theme-btn btn-style-three"><span class="txt">DashBoard</span></a>
							<?php	}
								?>

								<a href="#booknow" class="theme-btn btn-style-four"><span class="txt">Book Now</span></a>
							</div>
								
						</div>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="images/header_space_remove_wali.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->