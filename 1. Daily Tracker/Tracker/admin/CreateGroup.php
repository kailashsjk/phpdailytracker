<?php
ob_start ();
session_start ();
include ("header.php");
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}
?>
<style>
#msg1 {
	color: red;
	font-size: 80%;
	font-family: "arial"
}


</style>
<tr>
	<td>
	
	<script src="/Tracker/admin/JavaScript/CustomerValidation.js"></script>
		<form name="Insert_Group" action="Group_insert.php"
			enctype="multipart/form-data" method="post" onSubmit="return val();">


			<table width="500px" align="center" border="0" cellpadding="0"
				cellspacing="0">
				<?php
				
				error_reporting ( 0 );
				if ($_GET ["msg"] == "insert") {
					?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>Group Successfully Created</b></td>
				</tr>
                <?php } ?> 
                
                 <?php if($_GET["msg"]=="select"){ ?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>GroupName already exist..</b></td>
				</tr>
                <?php } ?> 
                 <?php if($_GET["msg"]=="error"){ ?>
                    <tr>
					<td align="center" style="color: #0033FF;" height="25px"
						colspan="2"><b>Group cannot be created</b></td>
				</tr>
                <?php } ?> 
				
				
				<tr>
					<td colspan="2" align="center" class="heading">Please Enter Group
						Details</td>
				</tr>
				<tr>
					<td align="center" height="45px">Group Name :</td>
					<td><input type="text" name="txtGroupName" id='letters' required
								onblur="isAlphabet(document.getElementById('letters'), 'Letters Only Please')" onkeyup="validateName(this);" value="" /></td>
					<td id="msg1"></td>
				</tr>

				<tr>
					<td align="right" height="45"></td>
					<td height="40px"><input type="submit" name="cmdSubmit" class="sub" id="submit"
						value="Submit" style="height: 45px; width: 100px;"></td>


				</tr>


			</table>
		</form>

	</td>

</tr>
</body>
</html>