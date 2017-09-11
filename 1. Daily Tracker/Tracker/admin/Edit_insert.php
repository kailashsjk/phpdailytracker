<?php
include ("config.php");

$groupname = $_POST ["txtGroupName"];
$hiddenGroupName = $_POST ["hiddenId"];

$sqlQuery = "update group_tracker set groupname='$groupname' where groupname='$hiddenGroupName'";
$updatedb = mysqli_query ( $conn, $sqlQuery );

if ($updatedb) {
	header ( "location:ViewGroup.php?msg=update" );
} else {
	header ( "location:ViewGroup.php?msg=error" );
}

?>


