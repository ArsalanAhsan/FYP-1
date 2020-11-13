
<?php
include("header.php");


if(isset($_GET['iid']))
{
$ui_ds=$_GET['iid'];
$find_u="select * from tbl_worker where worker_id='$ui_ds'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);

$worker_id=$row_d['worker_id'];
$worker_name=$row_d['worker_name'];
$worker_phone=$row_d['worker_phone'];
$worker_address=$row_d['worker_address'];
$worker_cnic=$row_d['worker_cnic'];



}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Worker List's
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Worker</a></li>
        <li class="breadcrumb-item active">Worker List</li>
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

             
                            <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Name</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" value="<?php echo $worker_name ?>" name="worker_name" required="required">
                </div>
              </div>

                 <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Phone</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" value="<?php echo $worker_phone ?>" name="worker_phone" required="required">
                </div>
              </div>

              
                <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Address</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="worker_address" value="<?php echo $worker_address ?>">
                </div>
              </div>
                <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Worker Cnic</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" name="worker_cnic" value="<?php echo $worker_cnic ?>" >
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
              <th>Name</th>
               <th>Phone</th>
                <th>Address</th>
                 <th>Cnic</th>
                  <th>Joining</th>

        
         
            
              
              
       


						<th>Action</th>
         
							
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_worker ";
$run_us=mysqli_query($con,$feth_user);



while($rows=mysqli_fetch_array($run_us))
{
$worker_id2=$rows['worker_id'];
$worker_name2=$rows['worker_name'];
$worker_phone2=$rows['worker_phone'];
$worker_address2=$rows['worker_address'];
$worker_cnic2=$rows['worker_cnic'];
$worker_join_date=$rows['worker_join_date'];




echo "


							<td>$worker_id2</td>
          
							<td>$worker_name2</td>
              <td>$worker_phone2</td>
              <td>$worker_address2</td>
              <td>$worker_cnic2</td>
              <td>$worker_join_date</td>
       
   

            

        
              
           
       <td>

       <a href='?iids=$worker_id2'>Delete</a> 
| 
 <a href='?iid=$worker_id2'>Update </a>
    
             
							

                              

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

	$del_cat="delete from tbl_worker where worker_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('Worker Successfully Deleted')</script>";
	echo "<script>window.open('worker_list.php','_self')</script>";
}

else {
		echo "<script>alert('Worker Not Successfully Deleted')</script>";
	echo "<script>window.open('worker_list.php','_self')</script>";
}

}


if(isset($_POST['br_sub']))
{
 $worker_name=$_POST['worker_name'];
    $worker_phone=$_POST['worker_phone'];
      $worker_address=$_POST['worker_address'];
        $worker_cnic=$_POST['worker_cnic'];

  



  
$inh="update tbl_worker set worker_name='$worker_name',worker_phone='$worker_phone',worker_address='$worker_address',worker_cnic='$worker_cnic' where worker_id='$worker_id'";
$run_cat=mysqli_query($con,$inh);
if($run_cat)
{
   echo "<script>alert('Worker Successfully Updated')</script>";
    echo "<script>window.open('worker_list.php','_self')</script>";
}

else {
   echo "<script>alert('Worker Not Successfully Updated')</script>";
    echo "<script>window.open('worker_list.php','_self')</script>";
}



}


  ?>
