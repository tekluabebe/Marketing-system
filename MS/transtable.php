<?php
require_once("include/connection.php");
echo"<script type='text/javascript' src='js/script.js'></script>
<style type='text/css'>
#list{
	width:50%;
}
#list a{
	color:#006b68;
}
#list a:hover{
	color:#006b68;
	text-decoration:underline;
}
#list th,td{
	padding:2px;
	text-align:center;
}

#list tr:nth-child(even){
	background-color: #CCC;
	opacity:0.5;
}
#list tr:nth-child(odd){
}
#list tr:nth-child(1){
	background-color:#006b68;
	opacity:0.5;
	color:#fff;
}
</style>";
$pname='';
$price = '';
$quan = '';
if(isset($_GET['id'])){
	mysqli_query($connect,"delete from transaction where id='{$_GET['id']}'");
}
if(isset($_GET['pid']) & isset($_GET['q'])){
	$pid = $_GET['pid'];
	$quan = $_GET['q'];
	$plist = mysqli_query($connect,"select product_name, market_price from product where product_id='{$pid}'");
	if(!$plist) die("error");
	if(mysqli_num_rows($plist)){	
		while($row = mysqli_fetch_array($plist)){
			$pname = $row['product_name'];
			$price = $row['market_price'];
			
			$price*=$quan;	
		}
	}
	mysqli_query($connect,"insert into transaction values('{$pname}',$pid,$quan,$price,NULL)");
}
	$translist = mysqli_query($connect,"select * from transaction");
	$transmax = mysqli_query($connect,"select sum(price) from transaction");
	$transmax = mysqli_fetch_array($transmax);
	if(mysqli_num_rows($translist)){
		echo "<table id='list' style='width:100%'>
		  <tr><th>Product Name</th><th>Quantity</th><th>Price</th><th>option</th></tr>";
		  
		while($row = mysqli_fetch_array($translist)){
			//transtable.php?id={$row['id']}
			echo "<tr><td>{$row['p_name']}</td><td>{$row['quantity']}</td><td>{$row['price']}</td>
			<td><a href='javascript:delData({$row['id']})'>Delete</a></td>
			</tr>";
		}echo "</table><table style='width:100%'><tr><td style='float:right'>Total Rs. {$transmax['sum(price)']}</td></tr></table>";
	
	}
	else echo "No items added yet.";
?>