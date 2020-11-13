
<?php
include("header.php");


if(isset($_GET['iid']))
{
$ui_ds=$_GET['iid'];
$find_u="select * from tbl_bundles where bundle_id='$ui_ds'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);

$bundle_id=$row_d['bundle_id'];
$bundle_title=$row_d['bundle_title'];
$bundle_qty=$row_d['bundle_qty'];


}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bundle List's
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Bundle</a></li>
        <li class="breadcrumb-item active">Bundle List</li>
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
                  <label>Bundle  Title</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" value="<?php echo $bundle_title ?>" name="bundle_title" required="required">
                </div>
              </div>

               <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Bundle Quantity</label>
                  <small class="sidetitle">xyz..</small>
                  
                  <input type="text" class="form-control" value="<?php echo $bundle_qty ?>" name="bundle_qty" required="required">
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
              <th>Quantity</th>
         
            
              
              
       


						<th>Action</th>
         
							
						</tr>
					</thead>
					<tbody>

<?php 

$feth_user="select * from tbl_bundles ";
$run_us=mysqli_query($con,$feth_user);



while($rows=mysqli_fetch_array($run_us))
{
$bundle_id=$rows['bundle_id'];
$bundle_title=$rows['bundle_title'];
$bundle_qty=$rows['bundle_qty'];



echo "


							<td>$bundle_id</td>
          
							<td>$bundle_title</td>
              <td>$bundle_qty</td>
   

            

        
              
           
       <td>

       <a href='?iids=$bundle_id'>Delete</a> 
| 
 <a href='?iid=$bundle_id'>Update </a>
    
             
							

                              

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

	$del_cat="delete from tbl_bundles where bundle_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('Bundle Successfully Deleted')</script>";
	echo "<script>window.open('bundle_list.php','_self')</script>";
}

else {
		echo "<script>alert('Bundle Not Successfully Deleted')</script>";
	echo "<script>window.open('bundle_list.php','_self')</script>";
}

}


if(isset($_POST['br_sub']))
{
  $bundle_title=$_POST['bundle_title'];
   $bundle_qty=$_POST['bundle_qty'];




  
$inh="update tbl_bundles set bundle_title='$bundle_title',bundle_qty='$bundle_qty' where bundle_id='$ui_ds'";
$run_cat=mysqli_query($con,$inh);
if($run_cat)
{
   echo "<script>alert('Bundle Successfully Updated')</script>";
    echo "<script>window.open('bundle_list.php','_self')</script>";
}

else {
   echo "<script>alert('Bundle Not Successfully Updated')</script>";
    echo "<script>window.open('bundle_list.php','_self')</script>";
}



}


  ?>
