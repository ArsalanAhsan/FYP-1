<?php 
session_start();
include("function/function.php");
$cat_types="select * from tbl_engine where service_id='".$_POST['cattype_id']."'";
$run_type=mysqli_query($con,$cat_types);
$output='<option value="" hidden>Select Engine</option>';
while($row=mysqli_fetch_array($run_type)){
			$cat_type_id=$row['engine_id'];
		$cat_type_title=$row['engine_title'];
	$output.= "<option value='$cat_type_id' style='color:black'>$cat_type_title</option>";
	
}
echo $output;



?>
