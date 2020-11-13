
<?php
include("header.php");


if(isset($_GET['iid']))
{
$ui_ds=$_GET['iid'];
$find_u="select * from tbl_service where service_id='$ui_ds'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);

$service_id2=$row_d['service_id'];
$service_title=$row_d['service_title'];



}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service List's
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Service</a></li>
        <li class="breadcrumb-item active">Service List</li>
      </ol>
    </section>

<?php if(isset($_GET['iid']))
{
  ?>
    <!-- Main content -->
   <!-- Main content -->
        <section class="content">
     
     <!-- Basic Forms -->
      <div class="box bg-hexagons-dark">
      
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post">
      <div class="row">

             
                            <div class="col-md-12 col-xl-12">
                <div class="form-group">
                  <label>Service  Title</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" value="<?php echo $service_title ?>" name="service_title" required="required">
                </div>
              </div>

              
                            
             
               <div class="col-md-12 col-xl-12">
                <div class="form-group">
              <center>
                  <input type="submit" class="btn btn-info" name="br_sub" value="Updated">
                </center>
                </div>
              </div>


               
      
        </div>
      </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>

      <?php }?>


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
              <th>Title</th>
        
         
            
              
              
       


						<th>Action</th>
         
							
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_service ";
$run_us=mysqli_query($con,$feth_user);



while($rows=mysqli_fetch_array($run_us))
{
$service_id=$rows['service_id'];
$service_title=$rows['service_title'];




echo "


							<td>$service_id</td>
          
							<td>$service_title</td>
       
   

            

        
              
           
       <td>

       <a href='?iids=$service_id'>Delete</a> 
| 
 <a href='?iid=$service_id'>Update </a>
    
             
							

                              

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

	$del_cat="delete from tbl_service where service_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('Service Successfully Deleted')</script>";
	echo "<script>window.open('service_list.php','_self')</script>";
}

else {
		echo "<script>alert('Service Not Successfully Deleted')</script>";
	echo "<script>window.open('service_list.php','_self')</script>";
}

}


if(isset($_POST['br_sub']))
{
  $service_title=$_POST['service_title'];





  
$inh="update tbl_service set service_title='$service_title' where service_id='$service_ids'";
$run_cat=mysqli_query($con,$inh);
if($run_cat)
{
   echo "<script>alert('Service Successfully Updated')</script>";
    echo "<script>window.open('service_list.php','_self')</script>";
}

else {
   echo "<script>alert('Service Not Successfully Updated')</script>";
    echo "<script>window.open('service_list.php','_self')</script>";
}



}


  ?>
