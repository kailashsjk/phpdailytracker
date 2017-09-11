<?php 
ob_start();
session_start();

include ("header.php");
if($_SESSION["logged"]!="yes"){
header("location:index.php");
}
include("config.php");

$sqlQuery="select * from user_tracker";
 
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
                        <td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>User Detail Deleted Successfully</b></td>
                    </tr>
                <?php } ?> 
                
                 <?php
                 error_reporting(0);
                 if($_GET["msg"]=="update"){ ?>
                	<tr>
     					<td align="center" style="color:#0033FF;" height="25px" colspan="2"><b>User Details Updated Successfully</b></td>
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
                <td class="te"><b>User Name</b></td>
                <td class="te"><b>LoginId </b></td>
                <td class="te"><b>Password </b></td>
                <td class="te"><b>Group Name </b></td>
                <td class="te"><b>Email Id </b></td>
              </tr>
              
           <?php while($result=mysqli_fetch_array($resultQuery)){?>
              
               <tr>
               
                <td class="te"><?php echo $result["UserName"]; ?></td>
                <td class="te"><?php echo $result["LoginId"]; ?></td>
                <td class="te"><?php echo $result["Password"]; ?></td>
                <td class="te"><?php echo $result["GroupName"]; ?></td>
                <td class="te"><?php echo $result["emailId"]; ?></td>
                <td><a href="EditUser.php?editId=<?php echo $result["LoginId"]; ?>" onclick="return confirm('Are you sure you want to make changes to the user?')">Edit</a></td>
                
                
                
             <td><a href="DeleteUser.php?deleteId=<?php echo $result["LoginId"]; ?>" onclick="return confirm('Are you sure you want to delete the user?')">Delete</a></td>            
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        