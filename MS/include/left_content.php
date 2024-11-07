<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="menu.css">
</head>
<body>
<?php if(isset($_SESSION['username'])){
        	if($_SESSION["admin"]==0){
	          echo"<div class='lcontent'>
                <ul class='bmenu'>
                   
                    <li><a href='settings.php'>Settings</a></li>
                    <li><a href='transaction.php'>Transaction</a></li>  
					<li><a href='viewlist.php?list=Product'>Product list</a></span></h1>
					<li><a href='viewlist.php?list=Supplier'>Supplier list</a></span></h1>
					<li><a href='viewlist.php?list=Customer'>Customer list</a></span></h1>";
                 
			}
			elseif($_SESSION['admin']==1){
						echo "<div class='lcontent'>
						      <ul class='bmenu'>
							  <li><a href='indent.php'>Home</a></li>
							  <li><a href='settings.php'>Settings</a></li>
						      <li><a href='addproduct.php'>+ Product</a></li>
							  <li><a href='addsupplier.php'>+ Supplier</a></li>
							  <li><a href='addcustomer.php'>+ Customer</a></li>
							  <li><a href='viewtransaction.php'>+ view transaction</a></li> ";
			}
			else
			            echo "<div class='lcontent'>
						      <ul class='bmenu'>
							  <li><a href='indent.php'>Home</a></li>
							  <li><a href='settings.php'>Settings</a></li>
						      <li><a href='adddept.php'>+ Dept</a></li>
			                  <li><a href='addproduct.php'>+ Product</a></li>
							  <li><a href='addsupplier.php'>+ Supplier</a></li>
							  <li><a href='addcustomer.php'>+ Customer</a></li>";
						
					
    echo"</ul></div>";
          
} ?>
</body>
</html>
