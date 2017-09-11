<?php
include ("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Tracker</title>
<link rel="stylesheet" href="/Tracker/Css/menu.css">
<link rel="stylesheet" href="/Tracker/Css/Styles.css">
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