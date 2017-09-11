<?php 
ob_start();
session_start();
include ("config.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}

$userName=$_SESSION["Username"];
$loginId=$_SESSION ["LoginId"];
$sqlQuery="select * from report_tracker where LoginId='$loginId' and Status='InComplete' and TaskDate=CURDATE()";
 
$resultQuery=mysqli_query($conn, $sqlQuery);


$count=mysqli_num_rows($resultQuery);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Tracker</title>
<link rel="stylesheet" href="/Tracker/Css/menu.css">
<link rel="stylesheet" href="/Tracker/Css/Styles.css">

<link rel="stylesheet" type="text/css"
	href="dist/jquery-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">
<style type="text/css">
body {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-size: 14px;
}

table {
	border-collapse: collapse;
}

th, td {
	border: 1px solid #ccc;
	padding: 6px 12px;
}

code {
	font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}

.clearfix:before, .clearfix:after {
	display: table;
	content: " ";
}

.clearfix:after {
	clear: both;
}

.navbar h3 {
	color: #f5f5f5;
	margin-top: 14px;
}

.hljs-pre {
	background: #f8f8f8;
	padding: 3px;
}

.footer {
	border-top: 1px solid #eee;
	margin-top: 40px;
	padding: 40px 0;
}

.input-group {
	width: 110px;
	margin-bottom: 10px;
}

.pull-center {
	margin-left: auto;
	margin-right: auto;
}

@media ( min-width : 768px) {
	.container {
		max-width: 730px;
	}
}

@media ( max-width : 767px) {
	.pull-center {
		float: right;
	}
}
</style>

</head>
<body>
	<table width="80%" align="center" bgcolor="#D3D3D3">
		<tr>
			<td align="center"><h1>Tracker</h1></td>
		</tr>
		<tr>
			<td>
					<ul id="menu">
					<li><a href="UserHome.php">Home</a></li>
					<li><a href="UserProfile.php">Change Password</a></li>
					
					
					<li><a href="#">View Task</a>
						<ul>
							<li><a href="ViewUserTask.php">View All Task</a></li>
							<li><a href="ByDate.php">By Date</a></li>
							
						</ul></li>
					
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</td>
		</tr>

<tr>

<td>Welcome <?php  echo $userName;?></td>
</tr>


				<?php
				
				error_reporting ( 0 );
				if ($_GET ["msg"] == "update") {
					?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>Report Updated Successfully</b></td>
				</tr>
                <?php } ?> 
                
<form method="post" action="">
	<tr>
    	<td>
    	 
    		<table width="100%" align="center" border="1" cellspacing="0" cellpadding="2" >
            
              <tr>  
              	<td><b>TaskId</b></td>            
             	<td class="te"><b>UserName </b></td>
                <td class="te"><b>Task Name </b></td>
                <td class="te"><b>Task Date</b></td>
                <td class="te"><b>Task Start Time</b></td>
                <td class="te"><b>Task End Time</b></td>
                <td class="te"><b>Group Name</b></td>  
                           
                <td class="te"><b>User Start Time</b></td>
                
                <td class="te"><b>User End Time</b></td>                              
                <td class="te"><b>Status</b></td>  
              </tr>
              
           <?php while($result=mysqli_fetch_array($resultQuery)){?>
                
               <tr>         
            		<?php 
            		
            		$loginId=$result["LoginId"]; 
           			$taskId[]=$result["TaskId"];
            		?>
            	<td ><?php echo $result["TaskId"]; ?></td>
                <td ><?php echo $result["UserName"]; ?></td>
                <td ><?php echo $result["TaskName"]; ?></td>
                <td ><?php echo $result["TaskDate"]; ?></td>
                <td ><?php echo $result["TaskStartTime"]; ?></td>
                <td ><?php echo $result["TaskEndTime"]; ?></td>
                <td ><?php echo $result["GroupName"]; ?></td>
                
                <td ><div class="input-group clockpicker pull-left"
						data-autoclose="true">
						<input type="text" class="form-control" style="width:100px;" name="timepicker1[]"
							value=""> <span class="input-group-addon"> <span
							class="glyphicon glyphicon-time"></span>
						</span>
					</div> &nbsp;</td>
					
              	<td><div class="input-group clockpicker pull-left"
						data-autoclose="true">
						<input type="text" class="form-control" style="width:100px;" name="timepicker2[]"
							value=""> <span class="input-group-addon"> <span
							class="glyphicon glyphicon-time"></span>
						</span>
					</div></td>
					  <td ><?php echo $result["Status"]; ?></td>
             </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>
	
	<tr>		
		<td height="40px" align="center"><input type="submit" name="Submit" value="Submit" style="height: 35px; width: 100px;"></td>
	</tr>
	</form>
</table>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="dist/jquery-clockpicker.min.js"></script>
	<script type="text/javascript">
$('.clockpicker').clockpicker()
	.find('input').change(function(){
		console.log(this.value);
	});
$('#single-input').clockpicker({
	placement: 'bottom',
	align: 'right',
	autoclose: true,
	'default': '20:48'
});


</script>
	<script type="text/javascript" src="assets/js/highlight.min.js"></script>
	<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>

<?php
error_reporting(0);
// Check if button name "Submit" is active, do this 
if($_POST["Submit"]){
	
	
for($i=0;$i<$count;$i++){ 
	
	$UserStartTime=$_POST['timepicker1'][$i];
	$UserEndTime=$_POST['timepicker2'][$i];
	
	
	if(($UserStartTime=="")||($UserEndTime=="")){
		
		continue;
	}

	
$sql1="UPDATE report_tracker SET UserStartTime='$UserStartTime', UserEndTime='$UserEndTime',UserDate=NOW() WHERE LoginId='$loginId' and TaskId='$taskId[$i]'";
$result1=mysqli_query($conn, $sql1);

$selectQuery="select * from report_tracker where LoginId='$loginId' and TaskId='$taskId[$i]'";


$resultQuery=mysqli_query($conn, $selectQuery);
$fetchResult=mysqli_fetch_array($resultQuery);


$taskStartTime=$fetchResult['TaskStartTime'];
$taskEndTime=$fetchResult['TaskEndTime'];



if(($taskEndTime==$UserEndTime)||($taskEndTime>$UserEndTime)){
	
	$updateStatusComplete="UPDATE report_tracker SET Status='Completed' WHERE LoginId='$loginId' and TaskId='$taskId[$i]'";
	$resultQueryComplete=mysqli_query($conn, $updateStatusComplete);
	
}

else if(($taskEndTime<$UserEndTime)){
	
	$updateStatusComplete="UPDATE report_tracker SET Status='Exceeded In Actual Time' WHERE LoginId='$loginId' and TaskId='$taskId[$i]'";
	$resultQueryComplete=mysqli_query($conn, $updateStatusComplete);
	
	
}

}
 } 

if($result1){
header("location:UserHome.php?msg=update");
}

?>



</body>
</html>