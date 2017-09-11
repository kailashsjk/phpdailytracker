<?php
include ("config.php");
ob_start ();
session_start ();


	
	$usrid = $_POST ["txtuserName"];
	$upwd = $_POST ["txtpassword"];
	
	$sqlQuery = "select * from user_tracker where LoginId='$usrid' and Password='$upwd'";
	$sqladmin = mysqli_query ( $conn, $sqlQuery );
	
	if (mysqli_num_rows ( $sqladmin )) {
		
		$resAdmin = mysqli_fetch_array ( $sqladmin );
		$_SESSION ["logged"] = "yes";
		$_SESSION ["LoginId"] = $resAdmin ["LoginId"];
		$_SESSION["Username"]=$resAdmin["UserName"];
		
		header ( "location:UserHome.php" );
	} else {
		header ( "location:index.php?log=error" );
	}


?>