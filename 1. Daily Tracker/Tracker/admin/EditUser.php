<?php
ob_start ();
session_start ();
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}
error_reporting ( 0 );

include ("config.php");

include ("header.php");

$loginid = $_GET ["editId"];
$sqlQuery = "select * from user_tracker where LoginId='$loginid'";
$selectEditDb = mysqli_query ( $conn, $sqlQuery );
$resultArray = mysqli_fetch_array ( $selectEditDb );

$sqlSelectQuery = "select GroupName from group_tracker";
$selectGroupdb = mysqli_query ( $conn, $sqlSelectQuery );

?>

<tr>
	<td>
		<form name="Insert_User" action="EditUser_insert.php" method="post"
			onSubmit="return val();">

			<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">




				<tr>
					<td colspan="2" align="center" class="heading">Please Enter User
						Details</td>
				</tr>
				<tr>
					<td align="center" height="45px">User Name :</td>
					<td><input type="text" name="txtUserName"
						value="<?php echo $resultArray["UserName"]; ?>" /></td>
				</tr>
				<tr>
					<td align="center" height="45px">Email Id :</td>
					<td><input type="text" name="txtEmailId" value="<?php echo $resultArray["emailId"]; ?>" /></td>
				</tr>

				<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><select name="cboGroupName">
							<option value="<?php echo $resultArray["GroupName"]; ?>"><?php echo $resultArray["GroupName"]; ?></option>
							<option value="0">Select Value</option>
					<?php while($result=mysqli_fetch_array($selectGroupdb)){?>
					<option value="<?php echo $result["GroupName"]; ?>"><?php echo $result["GroupName"]; ?></option><?php } ?>
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





