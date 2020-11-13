
<?php
include("header.php");


if(isset($_GET['iid']))
{
$ui_ds=$_GET['iid'];

$fet_eng="select * from tbl_works where work_id='$ui_ds'";
$run_eng=mysqli_query($con,$fet_eng);
$row_eng=mysqli_fetch_array($run_eng);
$worktitle=$row_eng['work_title'];
$sid=$row_eng['service_id'];


$find_u="select * from tbl_service where service_id='$sid'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);


$service_titles=$row_d['service_title'];



}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Work List's
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Work</a></li>
        <li class="breadcrumb-item active">Work List</li>
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
                  <label>Work  Title</label>
                  <small class="sidetitle">xyz..</small>
                  <input type="text" class="form-control" value="<?php echo $worktitle ?>" name="work_title" required="required">
                </div>
              </div>
                        <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Select Service </label>
                  <small class="sidetitle">xyz..</small>
                  <select class="form-control" name="service_id" required="required">
                    <option value="<?php echo $sid ?>"><?php echo $service_titles ?></option>
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
              <th>Work Title</th>
              <th>Service</th>
        
         
            
              
              
       


            <th>Action</th>
         
              
            </tr>
          </thead>
          <tbody>

<?php 

$feth_user="select * from tbl_works ";
$run_us=mysqli_query($con,$feth_user);



while($rows=mysqli_fetch_array($run_us))
{
$work_id=$rows['work_id'];
$work_title=$rows['work_title'];
$service_id=$rows['service_id'];


$find_u="select * from tbl_service where service_id='$service_id'";
$run_q=mysqli_query($con,$find_u);
$row_d=mysqli_fetch_array($run_q);


$service_title=$row_d['service_title'];


echo "


              <td>$work_id</td>
          
              <td>$work_title</td>
              <td>$service_title</td>
       
   

            

        
              
           
       <td>

       <a href='?iids=$work_id'>Delete</a> 
| 
 <a href='?iid=$work_id'>Update </a>
    
             
              

                              

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

  $del_cat="delete from tbl_works where work_id='$catid'";
  $run_del=mysqli_query($con,$del_cat);

if($run_del)
{
  echo "<script>alert('Work Successfully Deleted')</script>";
  echo "<script>window.open('work_list.php','_self')</script>";
}

else {
    echo "<script>alert('Work Not Successfully Deleted')</script>";
  echo "<script>window.open('work_list.php','_self')</script>";
}

}


if(isset($_POST['br_sub']))
{
  $work_title=$_POST['work_title'];
   $ser_id=$_POST['service_id'];





  
$inh="update tbl_works set work_title='$work_title',service_id='$ser_id' where work_id='$ui_ds'";
$run_cat=mysqli_query($con,$inh);
if($run_cat)
{
   echo "<script>alert('Work Successfully Updated')</script>";
    echo "<script>window.open('work_list.php','_self')</script>";
}

else {
   echo "<script>alert('Work Not Successfully Updated')</script>";
    echo "<script>window.open('work_list.php','_self')</script>";
}



}


  ?>
