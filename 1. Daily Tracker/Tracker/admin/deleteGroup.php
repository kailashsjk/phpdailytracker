<?php
ob_start ();
session_start ();
include ("config.php");

$deleteGroupName = $_GET ["deleteId"];

$sqlQuery = "delete from group_tracker where groupname='$deleteGroupName'";
$resultQuery = mysqli_query ( $conn, $sqlQuery );

header ( "location:ViewGroup.php?msg=delete" );

?>