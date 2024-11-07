<?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
        <h1><span> Add Supplier:</span></h1>
        <div id="data">To view list of suppliers <a style="text-decoration:none" href="viewlist.php?list=supplier">Click Here</a><br /><br />
       		<?php 
			if(isset($_GET['success'])){
				$result=mysqli_query($connect,"INSERT INTO supplier VALUES(NULL,'{$_POST['sname']}','{$_POST['saddress']}','{$_POST['sdealer']}','{$_POST['sphone']}','{$_POST['semail']}')");
				if(!$result)echo "Addition not successful";
	   			else echo"Addition of supplier data successful";
			}
			else{
				echo "<form method='post' action='addsupplier.php?success=1'>
					  <table>
					    <tr><td style='padding:5px'>Name: </td><td><input name='sname' type='text' required /></td></tr>
						<tr><td style='padding:5px'>Address: </td><td><input name='saddress' type='text' required/></td></tr>
						<tr><td style='padding:5px'>Dealer: </td><td><input name='sdealer' type='text'required /></td></tr>
						<tr><td style='padding:5px'>Phone: </td><td><input name='sphone' placeholder='+251..' type='text'required /></td></tr>
						<tr><td style='padding:5px'>Email: </td><td><input name='semail' placeholder='name@email.com' type='email' required/></td></tr>
						<tr><td style='padding:5px' colspan='2'><input type='submit' value='submit' /></td></tr>
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