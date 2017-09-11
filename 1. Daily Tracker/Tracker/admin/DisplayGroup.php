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
           
              
              	<tr>
                
                	<td><b>Group Name</b></td>
               
              	</tr>
              
           		<?php while($result=mysqli_fetch_array($resultQuery)){?>
              
               <tr>
               
                <td class="te"><?php echo $result["GroupName"]; ?></td>
                     
              </tr>
           <?php } ?> 
			</table>
		</td>
	</tr>

        