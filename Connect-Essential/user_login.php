<?php include("header.php");



//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
   $uname1=$_SESSION['user_first_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
   $uname2=$_SESSION['user_last_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
   $uemail=$_SESSION['user_email_address'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }


  
$uname=$uname1 . $uname2;

$ch="select * from tbl_user where user_email='$uemail'";
$run_ch=mysqli_query($con,$ch);
$row_ch=mysqli_num_rows($run_ch);

if($row_ch ==0)
{
	$u1=substr($uname,0,2);
	$p1=substr($uemail,0,2);
$r1=rand(1000,9999);
$myrefcode=$u1.$p1.$r1;
$ins_reg2="INSERT INTO tbl_user(user_name,user_email,user_wallet,reg_date,my_refcode) VALUES ('$uname','$uemail',50,NOW(),'$myrefcode')";
     	$run_reg2=mysqli_query($con,$ins_reg2);
}



$_SESSION['uemail']=$uemail;
echo "<script>window.open('index.php','_self')</script>";
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="btn btn-light"><img src="images/google.png" style="height:30px;width:35px">Login With Google</a>';
}



?>


<!--Page Title-->
    <section class="page-title">
		<div id="particles-js" class="particles-pattern"></div>
        <div class="auto-container">
			<div class="inner-container clearfix">
				<div class="pull-left">
					<h2>Login / Register</h2>
				</div>
                <div class="pull-right">
					<ul class="bread-crumb clearfix">
						<li><a href="index.html">Home</a></li>
						<li>Login / Register</li>
					</ul>
				</div>
            </div>
        </div>
		<!--Waves Container-->
        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
          </svg>
        </div>
        <!--Waves end-->
    </section>
    <!--End Page Title-->
	
	<!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                
                    <div class="sec-title">
                        <h2>Login Now</h2>
						<div class="separate"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post">
                    
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremail" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                     <input type="submit" class="theme-btn btn-style-three" value="Login" name="ulogin">
                                </div>
                               
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Or login with <?php echo $login_button ?>
                                
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>


     <?php
     
if(isset($_POST['ulogin']))
{
	$useremail=$_POST['useremail'];
	$userpassword=$_POST['userpassword'];

    $check="select * from tbl_user where user_email='$useremail' AND user_pass='$userpassword'";
    $run_check=mysqli_query($con,$check);
    $row_check=mysqli_num_rows($run_check);

    if($row_check !=0)
    {

$_SESSION['uemail']=$useremail;
    		echo "<script>alert('Login Successfully')</script>";
   	echo "<script>window.open('index.php','_self')</script>";


    }
    else
    {
    		echo "<script>alert('User Id And Password Is InCorrect')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
    }



}

     ?>           
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                
                    <div class="sec-title">
                        <h2>Register Here</h2>
						<div class="separate"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="uname" required="required" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="uemail" required="required" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="upassword" required="required" placeholder="Enter Password">
                            </div>

                             <div class="form-group">
                                <span class="adon-icon"></span>
                                <input type="text" name="urefcode"  placeholder="Enter Reference Code">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <input type="submit" class="theme-btn btn-style-three" value="Register" name="uregister">
                                </div>
                                <div class="form-group submit-text pull-right">
                                	* You must be a free registered to submit content.
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--End Register Section-->
	<?php

if(isset($_POST['uregister']))
{
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upassword=$_POST['upassword'];
	$urefcode=$_POST['urefcode'];

	$u1=substr($uname,0,2);
	$p1=substr($upassword,0,2);
$r1=rand(1000,9999);
$myrefcode=$u1.$p1.$r1;

   $check_email="select * from tbl_user where user_email='$uemail'";
   $run_email=mysqli_query($con,$check_email);
   $row_email=mysqli_num_rows($run_email);

   if($row_email ==0)
   {


     if($urefcode !=null)
     {

         $check_avail="select * from tbl_user where my_refcode='$urefcode'";
         $run_avail=mysqli_query($con,$check_avail);
         $row_avail=mysqli_num_rows($run_avail);

         if($row_avail !=0)
         {


$cn_avail=mysqli_fetch_array($run_avail);
$uid=$cn_avail['user_id'];
$ins_reg2="INSERT INTO tbl_user(user_name,user_email,user_pass,ref_code,ref_user_id,user_wallet,reg_date,my_refcode) VALUES ('$uname','$uemail','$upassword','$urefcode','$uid',50,NOW(),'$myrefcode')";
     	$run_reg2=mysqli_query($con,$ins_reg2);

    if($run_reg2)
    {
    	$_SESSION['uemail']=$uemail;
    	echo "<script>alert('Register Successfully ')</script>";
   	echo "<script>window.open('index.php','_self')</script>";
    } 	

    else
    {

    	echo "<script>alert('Register UnSuccessfully')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
    }




         }
         else
         {
         	  		echo "<script>alert('Reference Code Is InValid')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
         }


     }

     else
     {
     	$ins_reg="INSERT INTO tbl_user(user_name,user_email,user_pass,user_wallet,reg_date,my_refcode) VALUES ('$uname','$uemail','$upassword',50,NOW(),'$myrefcode')";
     	$run_reg=mysqli_query($con,$ins_reg);



     	if($run_reg)
     	{

     		$_SESSION['uemail']=$uemail;

     		echo "<script>alert('Register Successfully')</script>";
   	echo "<script>window.open('index.php','_self')</script>";
     	}
     	else
     	{
     		echo "<script>alert('Register UnSuccessfully')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
     	}


     }
     


   }


   else
   {

   	echo "<script>alert('Email Id Already Exist')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
   }



}

	?>

	<!-- Signup Section -->
	<section class="signup-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-2">
						<div class="image" data-depth="0.40">
							<img src="images/resource/signup.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Sign up for new update form us and get company News</h2>
							<div class="separate"></div>
						</div>
						
						<!-- Signup Form -->
						<div class="signup-form wow tada" data-wow-duration="1500ms">
							<form method="post">
								<div class="form-group clearfix">
									<input type="email" name="semail" value="" placeholder="Enter Your Email here" required>
									<input  type="submit" class="theme-btn send-btn flaticon-send" name="usubscribe">
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>

<?php
if(isset($_POST['usubscribe']))
{
	$semail=$_POST['semail'];

	$ins_sub="INSERT INTO tbl_subscriber(subscribe_email) VALUES ('$semail')";
	$run_sub=mysqli_query($con,$ins_sub);

	if($run_sub)
	{
			echo "<script>alert('Subscribe Successfully')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
	}
	else
	{
			echo "<script>alert('Subscribe UnSuccessfully')</script>";
   	echo "<script>window.open('user_login.php','_self')</script>";
	}
}

?>

<?php include("footer.php");?>
