<?php
ob_start ();
session_start ();
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}
error_reporting ( 0 );
include ("config.php");
include ("header.php");
$groupName = $_GET ["editId"];
$sqlQuery = "select GroupName from group_tracker where GroupName='$groupName'";
$selectEditDb = mysqli_query ( $conn, $sqlQuery );

$resultQuery = mysqli_fetch_array ( $selectEditDb );

?>

<tr>
	<td>
		<form name="Insert_Group" action="Edit_insert.php" method="post"
			onSubmit="return val();">

			<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">




				<tr>
					<td colspan="2" align="center" class="heading">Please Enter Group
						Details</td>
				</tr>
				<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><input type="text" name="txtGroupName"
						value="<?php echo $resultQuery["GroupName"]; ?>" /></td>
				</tr>

				<tr>
					<td align="right" height="45"></td>

					<input type="hidden" name="hiddenId"
						value="<?php echo $groupName; ?>">

					<td height="40px"><input type="submit" name="cmdSubmit" class="sub"
						value="Submit" style="height: 45px; width: 100px;"></td>


				</tr>


			</table>
		</form>

	</td>

</tr>





