<?php
include ("config.php");

$groupName = $_POST ["txtGroupName"];


	
	$sqlQuery = "select GroupName from group_tracker where GroupName='$groupName'";
	
	$resultQuery = mysqli_query ( $conn, $sqlQuery );
	if (mysqli_num_rows ( $resultQuery )) {
		
		header ( "location:CreateGroup.php?msg=select" );
	} else {
		
		$insert_query = "insert into group_tracker (groupname) values('$groupName')";
		
		$insertResult = mysqli_query ( $conn, $insert_query );
		
		if($insertResult){
			header ( "location:CreateGroup.php?msg=insert" );
			
		}else{
			header ( "location:CreateGroup.php?msg=error" );
		}
		
		
	}


?>