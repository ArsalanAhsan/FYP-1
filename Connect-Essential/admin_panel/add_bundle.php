<?php include("header.php");





?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Bundle's    </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Bundle's  </a></li>
        <li class="breadcrumb-item active">Add Bundle's  </li>
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
                  <label>Bundle  Title</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="bundle_title" required="required">
                </div>
              </div>

               <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Bundle Quantity</label>
                  <small class="sidetitle">xyz..</small>
                  
                 <input type="number" class="form-control" name="bundle_qty" required="required">
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