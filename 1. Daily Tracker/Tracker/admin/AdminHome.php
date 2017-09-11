<?php 
ob_start();
session_start();
include("header.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}
?>

</body>
</html>