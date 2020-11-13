<?php include("header.php");





?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Engine's    </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Engine's  </a></li>
        <li class="breadcrumb-item active">Add Engine's  </li>
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
                  <label>Engine  Title</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="eng_title" required="required">
                </div>
              </div>
                        <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Select Service </label>
                  <small class="sidetitle">xyz..</small>
                  <select class="form-control" name="service_id" required="required">
                    <option hidden="hidden">Select Service</option>
                    <?php 
                    $sel_ser="select * from tbl_service";
                    $run_service=mysqli_query($con,$sel_ser);
                    while($row_ser=mysqli_fetch_array($run_service))
                    {
                      $sid=$row_ser['service_id'];
                      $sname=$row_ser['service_title'];

                      echo "<option value='$sid'>$sname </option>";
                    }

                    ?>
                  </select>
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
  $service_id=$_POST['service_id'];
  $eng_title=$_POST['eng_title'];

  



  
$inh="insert into tbl_engine(engine_title,service_id) values ('$eng_title','$service_id')";
$run_cat=mysqli_query($con,$inh);


if($run_cat)
{
   echo "<script>alert('Engine Successfully Added')</script>";
    echo "<script>window.open('add_engine.php','_self')</script>";
}

else {
   echo "<script>alert('Engine Not Successfully Added')</script>";
    echo "<script>window.open('add_engine.php','_self')</script>";
}
}










  ?>