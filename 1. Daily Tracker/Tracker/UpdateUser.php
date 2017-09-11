<?php
error_reporting(0);
// Check if button name "Submit" is active, do this 
if($_POST["Submit"]){
	
	
for($i=0;$i<2;$i++){ 
	
	$StartTime=$_POST['timepicker1'][$i];
	$EndTime=$_POST['timepicker2'][$i];
	
	/* echo $StartTime." "."/".$EndTime; */
$sql1="UPDATE report_tracker SET UserStartTime='$StartTime', UserEndTime='$EndTime', UserDate='NOW()' WHERE LoginId='$loginId[$i]' and TaskId='$taskId[$i]'";
$result1=mysqli_query($conn, $sql1);

}
 } 

if($result1){
header("location:UserHome.php");
}

?>

