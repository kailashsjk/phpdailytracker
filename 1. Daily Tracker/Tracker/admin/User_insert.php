<?php
ob_start ();
session_start ();
include ("config.php");

$UserName = $_POST ["txtUserName"];
$groupName = $_POST ["cboGroupName"];
$emailId=$_POST["txtEmailId"];
function generate_random_letters($length) {
	$random = '';
	for($i = 0; $i < $length; $i ++) {
		$random .= chr ( rand ( ord ( '0' ), ord ( '9' ) ) );
	}
	return $random;
}

$unique = generate_random_letters ( 3 );

$loginId = $UserName . $unique;
function random_password($length = 8) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$password = substr ( str_shuffle ( $chars ), 0, $length );
	return $password;
}
$password = random_password ( 4 );


	
	$insertQuery = "insert into user_tracker (UserName,LoginId,Password,GroupName,emailId) values('$UserName','$loginId','$password ','$groupName','$emailId')";
	
	$insertResult = mysqli_query ( $conn, $insertQuery );
	
	header ( "location:CreateUser.php?msg=insert" );

?>