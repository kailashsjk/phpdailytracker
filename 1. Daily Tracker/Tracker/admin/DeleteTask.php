<?php
ob_start ();
session_start ();
include ("config.php");

$deleteId=$_GET["deleteId"];



$sqlQuery = "delete from task_tracker where TaskId='$deleteId'";
$resultQuery = mysqli_query ( $conn, $sqlQuery );

	header ( "location:ViewTask.php?msg=delete" );

	


?>