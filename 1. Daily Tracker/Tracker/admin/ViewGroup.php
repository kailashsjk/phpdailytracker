<?php 
ob_start();
session_start();

include ("header.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}
include("config.php");

$sqlQuery="select * from group_tracker order by GroupName asc";
 
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
                 	<td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>Group Deleted Successfully</b></td>
              	</tr>
                <?php } ?>
                
                <?php
                 error_reporting(0);
                 if($_GET["msg"]=="update"){ ?>
                <tr>
     				<td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>Group Updated Successfully</b></td>
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
                
                	<td><b>Group Name</b></td>
               
              	</tr>
              
           		<?php while($result=mysqli_fetch_array($resultQuery)){?>
              
               <tr>
               
                <td class="te"><?php echo $result["GroupName"]; ?></td>
                <td><a href="editGroup.php?editId=<?php echo $result["GroupName"]; ?>" onclick="return confirm('Are you sure you want to make changes to the Group?')">Edit</a></td>
                <td><a href="deleteGroup.php?deleteId=<?php echo $result["GroupName"]; ?>" onclick="return confirm('Are you sure you want to delete the Group?')">Delete</a></td>            
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        