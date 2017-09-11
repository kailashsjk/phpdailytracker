<?php
ob_start ();
session_start ();
include ("config.php");
error_reporting ( 0 );
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}

$editId=$_GET["editId"];
$splitedTaskDate=explode("/",$editId);

$TaskId=$splitedTaskDate[0];
$Task=$splitedTaskDate[1];
$date=$splitedTaskDate[2];


$sqlQuery = "select GroupName from group_tracker";
$selectGroupdb = mysqli_query ( $conn, $sqlQuery );

$sqlQuery = "select * from task_tracker where TaskId='$TaskId' and TaskName='$Task' and Date='$date'";
$selectEditDb = mysqli_query ( $conn, $sqlQuery );
$resultArray = mysqli_fetch_array ( $selectEditDb );


?>


<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ClockPicker</title>
<link rel="stylesheet" href="/Tracker/admin/Css/menu.css">
<link rel="stylesheet" href="/Tracker/admin/Css/Styles.css">
<link rel="stylesheet" type="text/css"
	href="dist/jquery-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">
<script src="datetimepicker_css.js"></script>
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
				<td align="center" colspan="2"><h1>Tracker</h1></td>
			</tr>
			<tr>
				<td colspan="2">
					<ul id="menu">
					<li><a href="AdminHome.php">Home</a></li>
					<li><a href="#">Group</a>
						<ul>
							<li><a href="CreateGroup.php">CreateGroup</a></li>
							<li><a href="DisplayGroup.php">View Group</a></li>
							<li><a href="ViewGroup.php">Edit/Delete Group</a></li>
						</ul></li>
					<li><a href="#">User</a>
						<ul>
							<li><a href="CreateUser.php">CreateUser</a></li>
							<li><a href="DisplayUser.php">View User</a></li>
							<li><a href="ViewUser.php">Edit/Delet User</a></li>
							<li><a href="MailToUser.php">Mail User</a></li>
						</ul></li>
					<li><a href="#">Task</a>
						<ul>
							<li><a href="CreateTask.php">CreateTask</a></li>
							<li><a href="DisplayTask.php">Edit/Delet Task</a></li>
							<li><a href="ViewTask.php">View Task</a></li>
						</ul></li>
					<li><a href="Report.php">Report</a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
				</td>
			</tr>




		<tr>
		<td>
	
		<script src="/Tracker/admin/JavaScript/CustomerValidation.js"></script>
		<form name="Insert_Group" action="EditTask_insert.php"
			enctype="multipart/form-data" method="post" onSubmit="return val();">
		<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">
				
                 <?php
                 error_reporting ( 0 );
                 if($_GET["msg"]=="select"){ ?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>Task on particular Date already exist..</b></td>
				</tr>
                <?php } ?> 
              
				
				
				<tr>
					<td colspan="2" align="center" class="heading">Please Enter Task
						Details</td>
				</tr>
				
			<tr>
				<td height="35px" align="center">Task Name:</td>
				<td><input type="text" name="task_name" value="<?php echo $resultArray["TaskName"]; ?>"></td>
			</tr>	
				
			<tr>
				<td height="35px" align="center">Date</td>
				<td><input type="text" id="demo1" name="date" maxlength="25" size="25" value="<?php echo $resultArray["Date"]; ?>"/>
        		<img src="images2/cal.gif" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer"/></td>
			</tr>	

			<tr>
				<td height="35px" align="center">Start Time</td>
				<td><div class="input-group clockpicker pull-left"
						data-autoclose="true">
						<input type="text" class="form-control" name="timepicker1"
							value="<?php echo $resultArray["StartTime"]; ?>"> <span class="input-group-addon"> <span
							class="glyphicon glyphicon-time"></span>
						</span>
					</div></td>
			</tr>

			<tr>
				<td height="35px" align="center">End Time</td>
				<td><div class="input-group clockpicker pull-left"
						data-autoclose="true">
						<input type="text" class="form-control" name="timepicker2"
							value="<?php echo $resultArray["EndTime"]; ?>"> <span class="input-group-addon"> <span
							class="glyphicon glyphicon-time"></span>
						</span>
					</div></td>
			</tr>
			<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><select name="cboGroupName">
							<option value="<?php echo $resultArray["AssignedGroupName"]; ?>"><?php echo $resultArray["AssignedGroupName"]; ?></option>
							<option value="0">Select Value</option>
					<?php while($result=mysqli_fetch_array($selectGroupdb)){?>
					<option value="<?php echo $result["GroupName"]; ?>"><?php echo $result["GroupName"]; ?></option><?php } ?>
					</select></td>
				</tr>

			<tr>
				<td align="right" height="45"><input type="hidden" name="hiddenTask"
						value="<?php echo $Task; ?>">
						
						<input type="hidden" name="hiddenTaskId"
						value="<?php echo $TaskId; ?>">
						
						<input type="hidden" name="hiddenDate"
						value="<?php echo $date; ?>"></td>
				<td height="40px"><input type="submit" name="cmdSubmit"
					value="Submit" style="height: 35px; width: 100px;"></td>
			</tr>
			
			
			
			</table>
		</form>

	</td>

</tr>
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
</body>
</html>
