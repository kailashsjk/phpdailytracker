<?php

include ("config.php");

$taskName = $_POST ["task_name"];
$phpdate = $_POST ["date"];
$startTime = $_POST ["timepicker1"];
$endTime = $_POST ["timepicker2"];
$groupName = $_POST ["cboGroupName"];

$date = $phpdate;
$res = explode ( "-", $date );
$changedDate = $res [2] . "-" . $res [0] . "-" . $res [1];

$select_query = "SELECT TaskName,Date FROM task_tracker WHERE TaskName='$taskName' AND Date='$changedDate'";

$selectResult = mysqli_query ( $conn, $select_query );

if (mysqli_num_rows ( $selectResult )) {
	
	header ( "location:CreateTask.php?msg=exists" );
} else {
	$insert_query = "insert into task_tracker (TaskName,Date,StartTime,EndTime,AssignedGroupName) values('$taskName','$changedDate','$startTime','$endTime','$groupName')";
	
	$insertResult = mysqli_query ( $conn, $insert_query );
	
	$last_id = mysqli_insert_id ( $conn );

	
	$selectUserTask = "select LoginId,UserName from user_tracker where GroupName='$groupName'";
	
	$resultUserTask = mysqli_query ( $conn, $selectUserTask );
	
	while ( $result = mysqli_fetch_array ( $resultUserTask ) ) {
		
		$login = $result ["LoginId"];
		$userName = $result ["UserName"];
		$insert_report_query = "insert into report_tracker (GroupName,LoginId,UserName,TaskId,TaskName,TaskDate,TaskStartTime,TaskEndTime,Status) values ('$groupName','$login','$userName','$last_id','$taskName','$changedDate','$startTime','$endTime','InComplete')";
		$result_report_query = mysqli_query ( $conn, $insert_report_query );
	}
	
	header ( "location:CreateTask.php?msg=insert" );
}

?>