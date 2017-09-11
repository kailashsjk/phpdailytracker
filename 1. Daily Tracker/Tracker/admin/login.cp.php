<?php
include ("config.php");
ob_start ();
session_start ();

if ($_POST ["cmdSubmit"]) {
	
	$usrid = $_POST ["txtuserName"];
	$upwd = $_POST ["txtpwd"];
	
	$sqlQuery = "select * from admin_tbl where username='$usrid' and password='$upwd'";
	$sqladmin = mysqli_query ( $conn, $sqlQuery );
	
	if (mysqli_num_rows ( $sqladmin )) {
		
		$resAdmin = mysqli_fetch_array ( $sqladmin );
		$_SESSION ["logged"] = "yes";
		$_SESSION ["username"] = $resAdmin ["username"];
		header ( "location:AdminHome.php" );
	} else {
		header ( "location:index.php?log=error" );
	}
}

?>