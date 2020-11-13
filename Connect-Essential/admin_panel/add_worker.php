<?php include("header.php");





?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Worker's    </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Worker's  </a></li>
        <li class="breadcrumb-item active">Add Worker's  </li>
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
                  <input type="text" class="form-control" name="worker_name" required="required">
                </div>
              </div>

                 <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Phone</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="worker_phone" required="required">
                </div>
              </div>

              
                <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Address</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="worker_address">
                </div>
              </div>
                <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Cnic</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="worker_cnic" >
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
  $worker_name=$_POST['worker_name'];
    $worker_phone=$_POST['worker_phone'];
      $worker_address=$_POST['worker_address'];
        $worker_cnic=$_POST['worker_cnic'];

  



  
$inh="insert into tbl_worker(worker_name,worker_phone,worker_address,worker_cnic,worker_join_date) values ('$worker_name','$worker_phone','$worker_address','$worker_cnic',NOW())";
$run_cat=mysqli_query($con,$inh);


if($run_cat)
{
   echo "<script>alert('Worker Successfully Added')</script>";
    echo "<script>window.open('add_worker.php','_self')</script>";
}

else {
   echo "<script>alert('Worker Not Successfully Added')</script>";
    echo "<script>window.open('add_worker.php','_self')</script>";
}
}










  ?>