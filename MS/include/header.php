<?php
session_start(); 
	require_once("connection.php");
	//check login
		//if from another page, check for session existence
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Supermarket Management</title>        
        <link rel="stylesheet" type="text/css" href="css/outline.css" />
        <link rel="stylesheet" type="text/css" href="css/menu.css" />		
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/design.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
</head>

<body>
<div class="container">
            <div class="header">
            <a href='index.php'><img src="images/logo.png" width="80" height="80" alt='Logo' /></a>
                <span class="right">
                    <?php if(isset($_SESSION['username']))
						echo "<a href='logout.php'>Logout</a>";
						else
						echo "<a href='login.php'>Log In</a>";
					?>|
                    <!-- <a href="mydetails.php">
                        <strong><?php// echo $_SESSION['username']?></strong>
                    </a> -->
                </span>
                <div class="clr"></div>
            </div>