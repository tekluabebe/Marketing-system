<?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
    	<h1><span>Add Customer:</span></h1>
        <div id="data">To view list of customers <a style="text-decoration:none" href="viewlist.php?list=customer">Click Here</a><br /><br />
        <?php 
		if(isset($_GET['success'])){
			
				$result=mysqli_query($connect,"INSERT INTO customer VALUES(NULL,'{$_POST['fname']}','{$_POST['lname']}','{$_POST['cjoindate']}','{$_POST['caddress']}','{$_POST['cphone']}')");
				if(!$result)echo "Addition not successful";
	   			else echo"Addition of customer data successful";
			}
			else{
				$time = date("Y-m-d");
				echo "<form method='post' action='addcustomer.php?success=1'>
					<table>
						<tr><td style='padding:5px'>First Name: </td><td><input name='fname' type='text'required /></td></tr>
						<tr><td style='padding:5px'>Last Name: </td><td><input name='lname' type='text'required /></td></tr>
						<tr><td style='padding:5px'>Address: </td><td><input name='caddress' type='text'required /></td></tr>
						<tr><td style='padding:5px'>join-date: </td><td><input name='cjoindate' type='date'required/></td></tr>
						
						<tr><td style='padding:5px'>Phone no.</td><td><input type='number' placeholder='+251..'name='cphone' /></td></tr>
						<tr><td colspan='2'><input type='submit' value='submit' /></td></tr>
					</table></form>";
			}
        ?>
         </div>
    </div>
</div>
<!-- body ends -->
<?php 
	require_once("include/footer.php");
?>