<!-- <?php 
	//require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
    	<h1><span>Add Promo:</span></h1>
        <div id="data">To view list of promos <a style="text-decoration:none" href="viewlist.php?list=promo">Click Here</a><br /><br />
        <?php 
			/*if(isset($_GET['success'])){
				$date = date($_POST['valid']);
				$time = date("y-m-d");
				if($date>$time){
				$result=mysqli_query($connect,"INSERT INTO promotion VALUES({$_POST['discount']},'{$_POST['valid']}',NULL,'')");
				if(!$result)echo "Addition not successful ".mysqli_connect_error($connect);
	   			else echo"Addition of promo data successful";
				}else echo "date error";
			}
			else{
				echo "<form method='post' action='addpromo.php?success=1'><table>
					  <tr><td style='padding:5px'>Discount:</td><td><input type='text' placeholder='%' name='discount' /></td></tr>
					  <tr><td style='padding:5px'>Valid Upto:</td><td><input type='text' name='valid' /></td></tr>
					  <tr><td style='padding:5px' colspan='2'><input type='submit' value='submit' /></td></tr>
					  </table></form>";	
			}*/
		?>
         </div>
    </div>
</div>
<!-- body ends -->  
<?php 
	//require_once("include/footer.php");
?> -->