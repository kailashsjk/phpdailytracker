<?php
ob_start ();
session_start ();
include ("config.php");
include ("header.php");
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}

$sqlQuery = "select GroupName from group_tracker";
$selectGroupdb = mysqli_query ( $conn, $sqlQuery );

?>

<tr>
	<td>
		<form name="Insert_Group" action="User_insert.php"
			enctype="multipart/form-data" method="post" onSubmit="return val();">


			<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">
				<?php
				
				error_reporting ( 0 );
				if ($_GET ["msg"] == "insert") {
					?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>User Successfully Created</b></td>
				</tr>
                <?php } ?> 
		
				<tr>
					<td colspan="2" align="center" class="heading">Please Enter User
						Details</td>
				</tr>
				<tr>
					<td align="center" height="45px">User Name :</td>
					<td><input type="text" name="txtUserName" value="" /></td>
				</tr>
				
				<tr>
					<td align="center" height="45px">Email Id :</td>
					<td><input type="text" name="txtEmailId" value="" /></td>
				</tr>

				<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><select name="cboGroupName">
							<option value="0">Select value</option>
					<?php while($result=mysqli_fetch_array($selectGroupdb)){?>
					<option value="<?php echo $result["GroupName"]; ?>"><?php echo $result["GroupName"]; ?></option><?php } ?>
					</select></td>
				</tr>

				<tr>
					<td align="right" height="45"></td>
					<td height="40px"><input type="submit" name="cmdSubmit" class="sub"
						value="Submit" style="height: 45px; width: 100px;"></td>


				</tr>


			</table>
		</form>

	</td>

</tr>
</body>
</html>