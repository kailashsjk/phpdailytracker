<?php
include ("config.php");
			$taskName=$_POST["task_name"];
			$date=$_POST["date"];
			$res = explode("-", $date);
			$startTime=$_POST["timepicker1"];
			$endTime=$_POST["timepicker2"];
			$groupName = $_POST ["cboGroupName"];
			$hiddenTaskName = $_POST ["hiddenTask"];
			$hiddenDate=$_POST["hiddenDate"];
			$hiddenTaskId=$_POST["hiddenTaskId"];

			
			if(strlen($res[0])!=4){
				$changedDate = $res[2]."-".$res[0]."-".$res[1];
				
				$sqlQuery = "select * from task_tracker where TaskName='$taskName' and Date='$changedDate' and TaskId!='$hiddenTaskId'";
			}
			else{
			
			
				$sqlQuery = "select * from task_tracker where TaskName='$taskName' and Date='$date' and TaskId!='$hiddenTaskId'";
			}

$resultQuery = mysqli_query ( $conn, $sqlQuery );
echo (mysqli_num_rows ( $resultQuery ));

if (mysqli_num_rows ( $resultQuery )) {

	header ( "location:EditTask.php?msg=select" );
} 
else {
	
			

			

			if(strlen($res[0])!=4){
			$changedDate = $res[2]."-".$res[0]."-".$res[1];
			echo $changedDate;
			$sqlQuery = "update task_tracker set TaskName='$taskName',Date='$changedDate',StartTime='$startTime',EndTime='$endTime',AssignedGroupName='$groupName' where TaskId='$hiddenTaskId' and TaskName='$hiddenTaskName' and Date='$hiddenDate'";
	
			}else{
	
			echo $date;
			$sqlQuery = "update task_tracker set TaskName='$taskName',Date='$date',StartTime='$startTime',EndTime='$endTime',AssignedGroupName='$groupName' where TaskId='$hiddenTaskId' and TaskName='$hiddenTaskName' and Date='$hiddenDate'";
	
			}

			$updatedb = mysqli_query ( $conn, $sqlQuery );

			if ($updatedb) {
			header ( "location:ViewTask.php?msg=update" );
			} else {
			header ( "location:ViewTask.php?msg=error" );
			} 
	}

?>

