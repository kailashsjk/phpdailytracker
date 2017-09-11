
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Tracker</title>
<link rel="stylesheet" href="/Tracker/Css/menu.css">
</head>
<body>
	<table width="80%" align="center" bgcolor="#D3D3D3">
		<tr>
			<td align="center"><h1>Tracker</h1></td>
		</tr>
		<tr>
			<td>
				<form name="User_Login" action="Userlogin.php" method="post"
					onSubmit="return val();">
					<table width="300px" height="250px" align="center" border="0"
						cellpadding="0" cellspacing="0">
					<?php
					error_reporting ( 0 );
					if ($_GET ["log"] == "error") {
						?>
                    	<tr>
							<td align="center" style="color: #0033FF;" height="25px"
								colspan="2"><b>Username or password does not exist</b></td>
						</tr>
                	<?php } ?>
					<tr>
							<td height="35px" align="center">UserName :</td>
							<td><input type="text" width="150px" name="txtuserName" value="" /></td>
						</tr>
						<tr>
							<td height="35px" align="center">Password:</td>
							<td><input type="password" width="150px" name="txtpassword" value="" /></td>
						</tr>
						<tr>
							<td align="right" height="45"></td>
							<td height="40px"><input type="submit" name="cmdSubmit"
								value="LogIn" style="height: 35px; width: 100px;"></td>
						</tr>
					</table>
				</form>
			</td>
		</tr>

	</table>

</body>
</html>