<!-- <?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
<?php if(isset($_GET['list'])){
/*if(!strcmp(strtolower($_GET['list']),"product")){
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'>
				 <table id='itemList' ><tr><th>ID</th><th>Product name</th><th>Market Price</th><th>Options</th></tr>";
			$plist = mysqli_query($connect,"select product_id, product_name, supplier_id, market_price from product");
			while($row = mysqli_fetch_array($plist)){
				echo"<tr><td>{$row['product_id']}</td>
					 <td>{$row['product_name']}</td>";
			$slist = mysqli_query($connect,"select sdealer from supplier where sid='{$row['supplier_id']}'");
			$slist = mysqli_fetch_array($slist);
				echo"
					 <td>{$row['market_price']}</td>
					
					 <td><a href='editlist.php?name=product&id={$row['product_id']}'>Edit</a> ";
			}
        	echo"</tr></table></div></div>";
		
        }//end product
    }
        ?> -->