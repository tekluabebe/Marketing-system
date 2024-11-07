<?php 
	require_once("include/header.php");
	//if(!isset($_POST['cid'])) header("Location: transaction.php");
?>

<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
      <h1><span>Sell Status:</span></h1>
        <div id="contentbox">
           <?php 
				$time = date("Y-m-d");
				$discount=0;
				//pids
				$pidlist= mysqli_query($connect,"select pid from transaction");		
				while($row = mysqli_fetch_array($pidlist))
					$pid[]=$row['pid'];
				$pids = implode(",",$pid);
				//total amount
				$data = mysqli_query($connect,"select sum(price) from transaction");
				$data = mysqli_fetch_array($data);
				$totamo = $data['sum(price)'];
				//$promo=$_POST['discount'];				
				// if($promo!=0){
				// 	$promolist = mysqli_query($connect,"select discount,valid_upto from promotion where promo_code='{$promo}'");
				// 	if(mysqli_num_rows($promolist)){
				// 		$promolist=mysql_fetch_array($promolist);
				// 		$time = date("Y-m-d");
				// 		$n=date($promolist['valid_upto']);
				// 		if($n>$time){
				// 			mysql_query("update promotion set count=count+1 where promo_code='{$promo}'");
				// 			echo "Discount ".$promolist['discount']."%";
				// 			$discount = ($totamo*$promolist['discount'])/100;
				// 			$totamo = $totamo-($totamo*$promolist['discount'])/100;
				// 		}
				// 	}
				// }
				//profit, profit-discount error
				$profit=0;
				$data = mysqli_query($connect,"select pid,quantity from transaction");
				while($row=mysqli_fetch_array($data)){
					$temp = mysqli_query($connect,"select market_price,quantity, product_name from product where product_id='{$row['pid']}'");
					$temp = mysqli_fetch_array($temp);
					if($row['quantity']>$temp['quantity'] || $row['quantity']<=0){
						echo"<script>if(alert('Quantity of {$temp['product_name']} is wrong'))</script>";						
						$flag=0;
					}
					else $flag=1;
					$profit+=$row['quantity']*$temp['market_price'];
				}
				$profit-=$discount;
				if($flag==1){
				// $cid = $_POST['cid'];
				// if($cid!=0){
				// 	$clist = mysqli_query($connect,"select first_name, last_name,cmoney_spent from customer where cid='{$cid}'");
				// 	$clist=mysqli_fetch_array($clist);
				// 	echo "Hello ".$clist['first_name']." ".$clist['last_name']." your previous balance is Rs. ". $clist['cmoney_spent']."<br />";
				// 	mysqli_query("update customer set cmoney_spent=cmoney_spent+'{$totamo}' where cid='{$cid}'");
				// 	echo "New balance: Rs. ";
				// 	echo $clist['cmoney_spent']+$totamo;
				// }
				
				$result = mysqli_query($connect,"insert into buy values(NULL,'{$time}','{$pids}',$totamo,$profit)");
				if(!$result) echo "Error in transaction. Please <a href='transaction.php'>retry</a>";
				else {
					echo"<div id='data'><br />Items Sold!!<br />Bill Value: Rs. {$totamo}";
					//lessen the quantity
					$data = mysqli_query($connect,"select pid,quantity from transaction");
				while($row=mysqli_fetch_array($data)){
					$temp = mysqli_query($connect,"update product set quantity = quantity-'{$row['quantity']}' where product_id='{$row['pid']}'");					
				}
					mysqli_query($connect,"truncate table transaction");
				}
				}else echo"Error with quantity values please check again... <a href='transaction.php'>Go Back</a>";
			?>
            </div>
        </div>
    </div>
</div>
<!-- body ends -->
<?php 
	require_once("include/footer.php");
?>