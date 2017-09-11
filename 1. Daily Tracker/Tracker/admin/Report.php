<?php 
ob_start();
session_start();

include ("header.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}
include("config.php");

$sqlQuery="select * from report_tracker";
 
$resultQuery=mysqli_query($conn, $sqlQuery);

?>
<title>Display Form</title>

  	<tr>
    	<td>
    	 
    		<table width="100%" border="1" cellspacing="0" cellpadding="0" >
              
             
              <tr>
              
              	<td class="te"><b>UserName </b></td>
                <td class="te"><b>Task Name </b></td>
                <td class="te"><b>Task Date</b></td>
                <td class="te"><b>Task Start Time</b></td>
                <td class="te"><b>Task End Time</b></td>
                
                <td class="te"><b>UserDate</b></td>
                <td class="te"><b>User Start Time</b></td>
                <td class="te"><b>User End Time</b></td>
                <td class="te"><b>Group Name</b></td>                
                <td class="te"><b>Status</b></td>
              </tr>
              
           <?php while($result=mysqli_fetch_array($resultQuery)){?>
              
               <tr>
                <td class="te"><?php echo $result["UserName"]; ?></td>
                <td class="te"><?php echo $result["TaskName"]; ?></td>
                <td class="te"><?php echo $result["TaskDate"]; ?></td>
                <td class="te"><?php echo $result["TaskStartTime"]; ?></td>
                <td class="te"><?php echo $result["TaskEndTime"]; ?></td>
                <td class="te"><?php echo $result["UserDate"]; ?></td>
                <td class="te"><?php echo $result["UserStartTime"]; ?></td>
                <td class="te"><?php echo $result["UserEndTime"]; ?></td>
                <td class="te"><?php echo $result["GroupName"]; ?></td>
                <td class="te"><?php echo $result["Status"]; ?></td>        
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        