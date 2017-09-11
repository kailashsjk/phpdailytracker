<?php
ob_start ();
session_start ();
include ("UserHeader.php");
include ("config.php");
if ($_SESSION ["logged"] != "yes") {
	header ( "location:index.php" );
}

$userName = $_SESSION ["Username"];
$loginId = $_SESSION ["LoginId"];








?>

<script src="datetimepicker_css.js"></script>
<tr align="center">
<td>

<form method="post" action="">


<table>

			<tr>
				<td height="35px" align="center">Date</td>
				<td><input type="text" id="demo1" name="date" maxlength="25" size="25"/>
        		<img src="images2/cal.gif" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer"/></td>
			</tr>	
			<tr>
			<td></td>
			<td height="40px" align="center"><input type="submit" name="Submit"
			value="Submit" style="height: 35px; width: 100px;"></td>
		</tr>
</form>

</table>

</td>

</tr>

	<tr>
		<td>

			<table width="100%" border="1" cellspacing="0" cellpadding="2">

				
				
				<?php 
				error_reporting(0);
				$date = $_POST["date"];
				$res = explode ( "-", $date );
				$changedDate = $res [2] . "-" . $res [0] . "-" . $res [1];
				
				if($_POST["Submit"]){
					
					$sqlQuery = "select * from report_tracker where LoginId='$loginId' and TaskDate='$changedDate'";
					$resultQuery = mysqli_query ( $conn, $sqlQuery );
					$count = mysqli_num_rows ( $resultQuery );?>
					
				<tr>
					<td><b>TaskId</b></td>
					<td class="te"><b>UserName </b></td>
					<td class="te"><b>Task Name </b></td>
					<td class="te"><b>Group Name</b></td>
					<td class="te"><b>Task Date</b></td>
					<td class="te"><b>Task Start Time</b></td>
					<td class="te"><b>Task End Time</b></td>

					<td class="te"><b>User Start Time</b></td>
					<td class="te"><b>User End Time</b></td>
					<td class="te"><b>Status</b></td>
				</tr>
					
				
           <?php while($result=mysqli_fetch_array($resultQuery)){?>
                
               <tr>         
            		<?php
												
												$loginId = $result ["LoginId"];
												$taskId = $result ["TaskId"];
												?>
            	<td><?php echo $result["TaskId"]; ?></td>
					<td><?php echo $result["UserName"]; ?></td>
					<td><?php echo $result["TaskName"]; ?></td>
					<td><?php echo $result["GroupName"]; ?></td>
					<td><?php echo $result["TaskDate"]; ?></td>
					<td><?php echo $result["TaskStartTime"]; ?></td>
					<td><?php echo $result["TaskEndTime"]; ?></td>

					<td><?php echo $result["UserStartTime"]; ?></td>
					<td><?php echo $result["UserEndTime"]; ?></td>
					<td><?php echo $result["Status"]; ?></td>

				</tr>
           <?php } ?> 
            <?php } ?> 
           
           
			</table>
		</td>
	</tr>

	
</table>







</body>
</html>