<?php
ob_start();
session_start();
include ("config.php");
if($_SESSION["logged"]!="yes"){
	header("location:index.php");
}
include("UserHeader.php");

?>
		<tr>
			<td>
				<form name="Change_Password" action="ChangePassword.php" method="post"
					onSubmit="return val();">
					<table width="300px" height="250px" align="center" border="0"
						cellpadding="0" cellspacing="0">
					<?php
					error_reporting ( 0 );
					if ($_GET ["msg"] == "error") {
						?>
                    	<tr>
							<td align="center" style="color: #0033FF;" height="25px"
								colspan="2"><b>Password does not exist</b></td>
						</tr>
                	<?php } ?>
                	
                	<?php
					error_reporting ( 0 );
					if ($_GET ["msg"] == "update") {
						?>
                    	<tr>
							<td align="center" style="color: #0033FF;" height="25px"
								colspan="2"><b>Password Updated</b></td>
						</tr>
                	<?php } ?>
					<tr>
							<td height="35px" align="center">Current Password :</td>
							<td><input type="password" width="150px" name="txtcurrPassword" value="" /></td>
						</tr>
						<tr>
							<td height="35px" align="center">New Password:</td>
							<td><input type="password" width="150px" name="txtNewPassword" value="" /></td>
						</tr>
						
						<tr>
							<td align="right" height="45"></td>
							<td height="40px"><input type="submit" name="cmdSubmit"
								value="Submit" style="height: 35px; width: 100px;"></td>
						</tr>
					</table>
				</form>
			</td>
		</tr>

	</table>
