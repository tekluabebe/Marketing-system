<?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
    <?php if(isset($_GET['list'])){
		//product
		if(!strcmp(strtolower($_GET['list']),"product")){
			
			if($_SESSION['admin']==0){

			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'>
		
				 <table id='itemList' ><tr><th>ID</th><th>Product name</th><th>supplier id</th><th>quantity</th><th>Market Price</th></tr>";
			$plist = mysqli_query($connect,"select product_id, product_name, supplier_id, quantity,market_price from product");
			while($row = mysqli_fetch_array($plist)){
				echo"<tr><td>{$row['product_id']}</td>
					 <td>{$row['product_name']}</td>
					 <td>{$row['supplier_id']}</td>
					 <td>{$row['quantity']}</td>
					  <td>{$row['market_price']}</td>";
					
					 
			}
        	echo"</tr></table></div></div>";
		}
			else{
				echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'>
		
				 <table id='itemList' ><tr><th>ID</th><th>Product name</th><th>supplier id</th><th>quantity</th><th>Market Price</th><th>Options</th></tr>";
			$plist = mysqli_query($connect,"select product_id, product_name, supplier_id,quantity, market_price from product");
			while($row = mysqli_fetch_array($plist)){
				echo"<tr><td>{$row['product_id']}</td>
					 <td>{$row['product_name']}</td>
					 <td>{$row['supplier_id']}</td>
					 <td>{$row['quantity']}</td> 
					 <td>{$row['market_price']}</td>
					 <td><a href='editlist.php?name=product&id={$row['product_id']}'>Edit</a> ";
			}
        	echo"</tr></table></div></div>";
			}
		

		}//end product
		//supplier
	elseif(!strcmp(strtolower($_GET['list']),"supplier")){
		if($_SESSION['admin']==0){
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Supplier name</th><th>Email</th><th>Phone</th></tr>";
			$slist = mysqli_query($connect,"select sid, sname, semail, sphone from supplier");
			while($row = mysqli_fetch_array($slist)){
				echo"<tr><td>{$row['sid']}</td>
					 <td>{$row['sname']}</td>
					
					 <td>{$row['semail']}</td>
					 <td>{$row['sphone']}</td>";
			}
        	echo"</tr></table></div></div>";  
		}
		else{
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Supplier name</th><th>Email</th><th>Phone</th><th>Options</th></tr>";
			$slist = mysqli_query($connect,"select sid, sname, semail, sphone from supplier");
			while($row = mysqli_fetch_array($slist)){
				echo"<tr><td>{$row['sid']}</td>
					 <td>{$row['sname']}</td>
					 <td>{$row['semail']}</td>
					 <td>{$row['sphone']}</td>
					 <td><a href='editlist.php?name=supplier&id={$row['sid']}'>Edit</a>";
			}
        	echo"</tr></table></div></div>";  
		}      		 
		}//end supplier
		//customer
	elseif(!strcmp(strtolower($_GET['list']),"customer")){
		if($_SESSION['admin']==0){
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Name</th><th>Join Date</th><th>Address</th><th>Phone</th></tr>";
			$slist = mysqli_query($connect,"select cid, first_name,last_name, cjoin_date, caddress,cphone from customer");
			while($row = mysqli_fetch_array($slist)){
				echo"<tr><td>{$row['cid']}</td>
					 <td>{$row['first_name']}&nbsp;{$row['last_name']}</td>";			
				echo"<td>{$row['cjoin_date']}</td>
					
					 <td>{$row['caddress']}</td>
					
					 <td>{$row['cphone']}</td>";
			}
		}
		else{
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbox'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Name</th><th>Join Date</th><th>Address</th><th>Phone</th><th>Options</th></tr>";
			$slist = mysqli_query($connect,"select cid, first_name,last_name, cjoin_date, caddress,cphone from customer");
			while($row = mysqli_fetch_array($slist)){
				echo"<tr><td>{$row['cid']}</td>
					 <td>{$row['first_name']}&nbsp;{$row['last_name']}</td>";			
				echo"<td>{$row['cjoin_date']}</td>
					
					 <td>{$row['caddress']}</td>
					
					 <td>{$row['cphone']}</td>
					 <td><a href='editlist.php?name=customer&id={$row['cid']}'>Edit</a>";
			}
		}
		}//end customer
		//employee
	// elseif(!strcmp(strtolower($_GET['list']),"employee")){
	// 		echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
	// 		echo"<div id='contentbox'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Name</th><th>Salary</th><th>Admin</th><th>DOB</th><th>Phone</th><th>Address</th><th>UID</th><th>Join Date</th><th>End Date</th></tr>";
	// 		$slist = mysqli_query($connect,"SELECT id, first_name, last_name, salary, admin, dob, phone_number, address, uid, join_date, end_date from employee");
	// 		while($row = mysqli_fetch_array($slist)){
	// 			echo"<tr><td>{$row['id']}</td>
	// 				 <td>{$row['first_name']}&nbsp;{$row['last_name']}</td>";
	// 			echo"<td>{$row['salary']}</td>
	// 				 <td>{$row['admin']}</td>
	// 				 <td>{$row['dob']}</td>
	// 				 <td>{$row['phone_number']}</td>
	// 				 <td>{$row['address']}</td>
	// 				 <td>{$row['uid']}</td>
	// 				 <td>{$row['join_date']}</td>
	// 				 <td>{$row['end_date']}</td>
	// 				 ";
	// 		}
	// 	}//end employee
	//promo
	// elseif(!strcmp(strtolower($_GET['list']),"promo")){
	// 		echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
	// 		echo"<div id='contentbo'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Discount</th><th>Valid upto</th><th>count</th></tr>";
	// 		$slist = mysqli_query($connect,"select promo_code, discount, valid_upto, count from promotion");
	// 		while($row = mysqli_fetch_array($slist)){
	// 			echo"<tr><td>{$row['promo_code']}</td>
	// 				 <td>{$row['discount']}</td>
	// 				 <td>{$row['valid_upto']}</td>
	// 				 <td>{$row['count']}</td>";
	// 		}
	// 	}//end promo
		//dept
		elseif(!strcmp(strtolower($_GET['list']),"dept")){
			echo"<h1><span>List of ".ucfirst($_GET['list'])."</span></h1>";
			echo"<div id='contentbo'><div id='data'><table id='itemList' ><tr><th>ID</th><th>Name</th><th>Manager</th></tr>";
			$dlist = mysqli_query($connect,"select dept_id, dept_name, manager_id from department");
			while($row = mysqli_fetch_array($dlist)){
				echo"<tr><td>{$row['dept_id']}</td>
					 <td>{$row['dept_name']}</td>";
				if($row['manager_id']){
					$elist = mysqli_query($connect,"select first_name, last_name from employee where id='{$row['manager_id']}'");
					$ename =  mysqli_fetch_array($elist);
					echo "<td>{$ename['first_name']}&nbsp;{$ename['last_name']}</td>";
				}
				else echo"<td>No one assigned</td>";
				//echo"<td><a href='editlist.php?name=dept&id={$row['dept_id']}'>Edit</a>";
			}
		}//end dept
	else echo"<h1><span><a href='viewlist.php?list=Product'>Product list</a></span></h1>
			  <h1><span><a href='viewlist.php?list=Supplier'>Supplier list</a></span></h1>
			  <h1><span><a href='viewlist.php?list=Customer'>Customer list</a></span></h1>
			  <h1><span><a href='viewlist.php?list=Employee'>Employee list</a></span></h1>";
	}//main
	else echo"<h1><span><a href='viewlist.php?list=Product'>Product list</a></span></h1>
			  <h1><span><a href='viewlist.php?list=Supplier'>Supplier list</a></span></h1>
			  <h1><span><a href='viewlist.php?list=Customer'>Customer list</a></span></h1>"
			//   <h1><span><a href='viewlist.php?list=Employee'>Employee list</a></span></h1>";
	?>
    </div>
</div>
<!-- body ends -->
<?php 
	//require_once("include/footer.php");
?>