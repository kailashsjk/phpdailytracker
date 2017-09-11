<?php
include ("config.php");

$userName = $_POST ["txtUserName"];

$groupname = $_POST ["cboGroupName"];
$emailId=$_POST["txtEmailId"];
$loginid = $_POST ["hiddenId"];

$sqlQuery = "update user_tracker set UserName='$userName',GroupName='$groupname',emailId='$emailId' where LoginId='$loginid'";
$updatedb = mysqli_query ( $conn, $sqlQuery );

if ($updatedb) {
	header ( "location:ViewUser.php?msg=update" );
} else {
	header ( "location:ViewUser.php?msg=error" );
}

?>


