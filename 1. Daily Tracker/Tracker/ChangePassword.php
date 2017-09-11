<?php
ob_start();
session_start();
include ("config.php");
if($_SESSION["logged"]!="yes"){
	header("location:index.php");
}

$loginId=$_SESSION ["LoginId"];
$currentPassword = $_POST ["txtcurrPassword"];
$NewPassword = $_POST ["txtNewPassword"];

echo $loginId;
echo $currentPassword;
echo $NewPassword;


$sqlQuery = "update user_tracker set Password='$NewPassword' where Password='$currentPassword' and LoginId='$loginId'";
$updatedb = mysqli_query ( $conn, $sqlQuery );

if ($updatedb) {
	header ( "location:UserProfile.php?msg=update" );
} else {
	header ( "location:UserProfile.php?msg=error" );
}

?>


