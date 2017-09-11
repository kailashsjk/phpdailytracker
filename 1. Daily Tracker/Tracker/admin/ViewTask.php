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
              
              <?php
    	 		error_reporting(0);
    	 		if($_GET["msg"]=="delete"){ ?>
                    <tr>
                        <td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>Task Detail Deleted Successfully</b></td>
                    </tr>
                <?php } ?> 
                
                 <?php
                 error_reporting(0);
                 if($_GET["msg"]=="update"){ ?>
                	<tr>
     					<td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>Task Details Updated Successfully</b></td>
              		</tr>
                <?php } ?>
                 
				<?php
                 error_reporting(0);
                 if($_GET["msg"]=="error"){ ?>
                	<tr>
     					<td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>Error in Update</b></td>
              		</tr>
                <?php } ?> 
              
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
                <td><a href="EditTask.php?editId=<?php echo $result["TaskId"]."/"; ?><?php echo $result["TaskName"]."/"; ?><?php echo $result["Date"];  ?>" onclick="return confirm('Are you sure you want to make changes to the Task?')">Edit</a></td>
                <td><a href="DeleteTask.php?deleteId=<?php echo $result["TaskId"]; ?>" onclick="return confirm('Are you sure you want to delete the Task?')">Delete</a></td>            
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        