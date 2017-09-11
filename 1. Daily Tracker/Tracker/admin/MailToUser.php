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
                <td><a href="MailUser.php?loginId=<?php echo $result["emailId"]; ?>">SendMail</a></td>
                        
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        