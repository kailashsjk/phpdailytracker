<?php 
ob_start();
session_start();

include ("header.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}
include("config.php");

$sqlQuery="select * from task_tracker";
 
$resultQuery=mysqli_query($conn, $sqlQuery);

?>
<title>Display Form</title>

  	<tr>
    	<td>
    	 
    		<table width="100%" border="0" cellspacing="3" cellpadding="2" background="">
                          
              <tr>
                <td class="te"><b>Task Name</b></td>
                <td class="te"><b>Date </b></td>
                <td class="te"><b>Start Time </b></td>
                <td class="te"><b>End Time </b></td>
                <td class="te"><b>Assigned Group</b></td>
              </tr>
              
           <?php while($result=mysqli_fetch_array($resultQuery)){?>
              
               <tr>
               
                <td class="te"><?php echo $result["TaskName"]; ?></td>
                <td class="te"><?php echo $result["Date"]; ?></td>
                <td class="te"><?php echo $result["StartTime"]; ?></td>
                <td class="te"><?php echo $result["EndTime"]; ?></td>
                <td class="te"><?php echo $result["AssignedGroupName"]; ?></td>
                          
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        