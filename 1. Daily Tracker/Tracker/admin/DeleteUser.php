<?php
ob_start ();
session_start ();
include ("config.php");

$loginId = $_GET ["deleteId"];

$sqlQuery = "delete from user_tracker where LoginId='$loginId'";
$resultQuery = mysqli_query ( $conn, $sqlQuery );

header ( "location:ViewUser.php?msg=delete" );

?>