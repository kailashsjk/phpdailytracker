<?php
include ("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Tracker</title>
<link rel="stylesheet" href="/Tracker/admin/Css/menu.css">
<link rel="stylesheet" href="/Tracker/admin/Css/Styles.css">
</head>
<body>
	<table width="80%" align="center" bgcolor="#D3D3D3">
		<tr>
			<td align="center"><h1>Tracker</h1></td>
		</tr>
		<tr>
			<td>
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
							<li><a href="ViewUser.php">Edit/Delete User</a></li>
							<li><a href="MailToUser.php">Mail User</a></li>
						</ul></li>
					<li><a href="#">Task</a>
						<ul>
							<li><a href="CreateTask.php">CreateTask</a></li>
							<li><a href="DisplayTask.php">View Task</a></li>
							<li><a href="ViewTask.php">Edit/Delete Task</a></li>
						</ul></li>
					<li><a href="Report.php">Report</a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</td>
		</tr>