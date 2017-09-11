<?php
ob_start ();
session_start ();
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}
error_reporting ( 0 );

include ("config.php");

include ("header.php");

$loginid = $_GET ["loginId"];
$sqlQuery = "select * from user_tracker where emailId='$loginid'";
$selectEditDb = mysqli_query ( $conn, $sqlQuery );
$resultArray = mysqli_fetch_array ( $selectEditDb );

?>

<tr>
	<td>
		<form name="Mail_User" action="mailto:<?php echo $loginid; ?>" method="post"
			onSubmit="return val();">

			<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">




				<tr>
					<td colspan="2" align="center" class="heading">Please Send User
						Details</td>
				</tr>
				<tr>
					<td align="center" height="45px">User Name :</td>
					<td><input type="text" name="txtUserName" readonly="true"
						value="<?php echo $resultArray["UserName"]; ?>" /></td>
				</tr>
				<tr>
					<td align="center" height="45px">LoginId :</td>
					<td><input type="text" name="txtLoginId" readonly="true" value="<?php echo $resultArray["LoginId"]; ?>" /></td>
				</tr>
				<tr>
					<td align="center" height="45px">Password :</td>
					<td><input type="text" name="txtPassword" readonly="true" value="<?php echo $resultArray["Password"]; ?>" /></td>
				</tr>
				<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><select name="cboGroupName">
							<option value="<?php echo $resultArray["GroupName"]; ?>"><?php echo $resultArray["GroupName"]; ?></option>
							<option value="0">Select Value</option>
					
					</select></td>
				</tr>


				<tr>
					<td align="right" height="45"></td>

					<input type="hidden" name="hiddenId"
						value="<?php echo $loginid; ?>">

					<td height="40px"><input type="submit" name="cmdSubmit" class="sub"
						value="Submit" style="height: 45px; width: 100px;"></td>


				</tr>


			</table>
		</form>

	</td>

</tr>





