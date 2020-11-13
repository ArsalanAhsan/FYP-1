<?php include("header.php");


if(isset($_GET['iid3']))
{
  $booking_id=$_GET['iid3'];
}


?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Booking Assign's    </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Booking Assign's  </a></li>
     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box bg-hexagons-dark">
      
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post">
			<div class="row">

            
                            <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Name</label>
                  <small class="sidetitle">xyz..</small>
                  <select class="form-control" name="worker_name" required="required">
                    <option>Select Worker</option>
                    <?php
                    $fet_worker="select * from tbl_worker";
                    $run_worker=mysqli_query($con,$fet_worker);
                    while($row_worker=mysqli_fetch_array($run_worker))
                    {
                      $worker_id=$row_worker['worker_id'];
                       $worker_name=$row_worker['worker_name'];

                       echo "<option value='$worker_id'>$worker_name </option>";

                    }
                    ?>
                  </select>
                </div>
              </div>

               <div class="col-md-12 col-xl-3">
                <div class="form-group">
                  <label>Total Price Bill</label>
                  <small class="sidetitle">xyz..</small>
                  
                 <input type="number" class="form-control" name="total_price" required="required">
                </div>
              </div>

                 <div class="col-md-12 col-xl-3">
                <div class="form-group">
                  <label>Assign Price</label>
                  <small class="sidetitle">xyz..</small>
                  
                 <input type="number" class="form-control" name="assign_price" required="required">
                </div>
              </div>

                     


             
               <div class="col-md-12 col-xl-12">
                <div class="form-group">
              <center>
                  <input type="submit" class="btn btn-info" name="br_sub">
                </center>
                </div>
              </div>


               
			
        </div>
      </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>

  <?php

if(isset($_POST['br_sub']))
{
  $bundle_title=$_POST['bundle_title'];
  $bundle_qty=$_POST['bundle_qty'];
  



  
$inh="insert into tbl_bundles(bundle_title,bundle_qty) values ('$bundle_title','$bundle_qty')";
$run_cat=mysqli_query($con,$inh);


if($run_cat)
{
   echo "<script>alert('Bundle Successfully Added')</script>";
    echo "<script>window.open('add_bundle.php','_self')</script>";
}

else {
   echo "<script>alert('Bundle Not Successfully Added')</script>";
    echo "<script>window.open('add_bundle.php','_self')</script>";
}
}










  ?>