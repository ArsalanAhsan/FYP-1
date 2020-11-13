
<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Confirmed Booking List's
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Confirmed Booking</a></li>
        <li class="breadcrumb-item active">Confirmed Booking List</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Hover Export Data Table</h3>
              <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					<thead>
						<tr>
							<th>Id</th>
              <th>User Id</th>
              <th>Service</th>
               <th>Work</th>
                    <th>City</th>
                    <th>Post Date</th>
        
         
            
              
              
       


						<th>Action</th>
         
							
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_booking where confirm_status='Confirm'";
$run_us=mysqli_query($con,$feth_user);



while($rows=mysqli_fetch_array($run_us))
{
$booking_id=$rows['booking_id'];
$user_id=$rows['user_id'];
$service_id=$rows['service_id'];
$work_id=$rows['work_id'];
$user_city=$rows['user_city'];
$booking_applydate=$rows['booking_applydate'];



$find_u="select * from tbl_service where service_id='$service_id'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);


$service_title=$row_d['service_title'];

$find_u2="select * from tbl_works where work_id='$work_id'";
$run_q2=mysqli_query($con,$find_u2);
$row_d2=mysqli_fetch_array($run_q2);


$work_title=$row_d2['work_title'];


echo "


							<td>$booking_id</td>
          
							<td>$user_id</td>
              <td>$service_title</td>
               <td>$work_title</td>
                <td>$user_city</td>
                 <td>$booking_applydate</td>
       
   

            

        
              
           
       <td>

       <a href='?iids=$booking_id' >Delete</a> 
| 
 <a href='booking_detail.php?iid=$booking_id'>Detail </a>
 | 
 <a href='booking_assign.php?iid3=$booking_id'>Assign </a>
    
             
							

                              

							</td>
						
						</tr>

";



}

?>


						
						
					</tbody>				  
					
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
         
       
			
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>
  <?php

if(isset($_GET['iids']))
{
	$catid=$_GET['iids'];

	$del_cat="delete from tbl_booking where booking_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('UnConfirm Booking Successfully Deleted')</script>";
	echo "<script>window.open('unconfirm_booking.php','_self')</script>";
}

else {
		echo "<script>alert('UnConfirm Booking Not Successfully Deleted')</script>";
	echo "<script>window.open('unconfirm_booking.php','_self')</script>";
}

}

if(isset($_GET['iid3']))
{
  $catid=$_GET['iid3'];

  $del_cat="update tbl_booking set confirm_status='Confirm' where booking_id='$catid'";
  $run_del=mysqli_query($con,$del_cat);

if($run_del)
{
  echo "<script>alert('UnConfirm Booking Successfully Confirm')</script>";
  echo "<script>window.open('unconfirm_booking.php','_self')</script>";
}

else {
    echo "<script>alert('UnConfirm Booking Not Successfully Confirm')</script>";
  echo "<script>window.open('unconfirm_booking.php','_self')</script>";
}

}

  ?>
