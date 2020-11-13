<?php include("header.php");

if(isset($_GET['iid']))
{
  $bid=$_GET['iid'];
  $feth_user="select * from tbl_booking where booking_id='$bid'";
$run_us=mysqli_query($con,$feth_user);

$rows=mysqli_fetch_array($run_us);

$booking_id=$rows['booking_id'];
$user_id=$rows['user_id'];
$service_id=$rows['service_id'];
$work_id=$rows['work_id'];
$user_city=$rows['user_city'];
$booking_applydate=$rows['booking_applydate'];

$user_email=$rows['user_email'];
$user_mobile=$rows['user_mobile'];
$user_address=$rows['user_address'];
$engine_id=$rows['engine_id'];
$booking_working_date=$rows['booking_working_date'];
$booking_timeslot=$rows['booking_timeslot'];
$assing_status=$rows['assing_status'];

$complete_status=$rows['complete_status'];
$confirm_status=$rows['confirm_status'];



$find_u="select * from tbl_service where service_id='$service_id'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);


$service_title=$row_d['service_title'];

$find_u2="select * from tbl_works where work_id='$work_id'";
$run_q2=mysqli_query($con,$find_u2);
$row_d2=mysqli_fetch_array($run_q2);


$work_title=$row_d2['work_title'];



$find_u3="select * from tbl_engine where engine_id='$engine_id'";
$run_q3=mysqli_query($con,$find_u3);
$row_d3=mysqli_fetch_array($run_q3);


$engine_title=$row_d3['engine_title'];


$find_u4="select * from tbl_user where user_id='$user_id'";
$run_q4=mysqli_query($con,$find_u4);
$row_d4=mysqli_fetch_array($run_q4);


$user_name=$row_d4['user_name'];





}



?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Booking Detail's    </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Booking Detail's  </a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box bg-hexagons-dark">
      
        <!-- /.box-header -->
        <div class="box-body">
         
			<div class="row">

            <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>User Name</b></label>
              <h4><?php echo $user_name?></h4>


            </div>
                     
             <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>User Email</b></label>
              <h4><?php echo $user_email?></h4>


            </div>

            <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>User Phone</b></label>
              <h4><?php echo $user_mobile?></h4>


            </div>

               <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>User City</b></label>
              <h4><?php echo $user_city?></h4>


            </div>

            <div class="col-sm-12">

<hr style="background-color: black;height:1px">
            </div>

            <div class="col-sm-6">
              <label class="label-control" style="font-size: 16px"><b>User Address</b></label>
              <h4><?php echo $user_address?></h4>


            </div>

  <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Booking Work Date</b></label>
              <h4><?php echo $booking_working_date?></h4>


            </div>
              <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Booking Time Slot</b></label>
              <h4><?php echo $booking_timeslot?></h4>


            </div>

            <div class="col-sm-12">

<hr style="background-color: black;height:1px">
            </div>
             <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Service</b></label>
              <h4><?php echo $service_title?></h4>


            </div>

              <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Work</b></label>
              <h4><?php echo $work_title?></h4>


            </div>

              <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Engine</b></label>
              <h4><?php echo $engine_title?></h4>


            </div>

              <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Booking Apply Date</b></label>
              <h4><?php echo $booking_applydate?></h4>


            </div>
            
            <div class="col-sm-12">

<hr style="background-color: black;height:1px">
            </div>

 <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Confirm Status</b></label>
              <h4><?php echo $confirm_status?></h4>


            </div>
             <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Assign Status</b></label>
              <h4><?php echo $assing_status?></h4>


            </div>

              <div class="col-sm-3">
              <label class="label-control" style="font-size: 16px"><b>Complete Status</b></label>
              <h4><?php echo $complete_status?></h4>


            </div>
                     
                                   
			
        </div>
     
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>

 
