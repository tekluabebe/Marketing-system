<?php
require_once("include/connection.php");
	if(isset($_GET['pid'])){
		$plist = mysqli_query($connect,"select product_name, market_price, quantity from product where product_id='{$_GET['pid']}'");
		while($row = mysqli_fetch_array($plist)){
			echo"{$row['product_name']},{$row['market_price']},{$row['quantity']}";
		}
	}
	else if(isset($_GET['pname'])){
		$plist = mysqli_query($connect,"select product_id, market_price, quantity from product where product_name='{$_GET['pname']}'");
		while($row = mysqli_fetch_array($plist)){
			echo"{$row['product_id']},{$row['market_price']},{$row['quantity']}";
		}
	}
?>