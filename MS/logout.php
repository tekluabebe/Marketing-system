<?php
session_start();
 if(isset($_SESSION['username'])){
        session_destroy(); 
		}
require_once("include/connection.php");
?>
<html>
    <head>
        <title>Supermarket Management</title>        
        <link rel="stylesheet" type="text/css" href="css/outline.css" />
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
    </head>
<body>
<div class="container">
            <div class="header">
                <a href="#">
                    <img src="images/logo.png" width="80" height="80" alt='Logo' />
                </a>
                <span class="right">
                    <?php echo "<a href='login.php'>Log In</a>"; ?>    
                </span>
                <div class="clr"></div>
            </div>
<div id="body">
	<div align="center">
    <div class="mcontent">
    	<?php if(isset($_SESSION['username'])){
        		echo "Logout Successful.<div id='data'>Click <a href='login.php'>here</a> to Login again</div>"; }
		   else echo "<h1><span>No session detected.</span></h1><div id='data'>  wellcome to supermarket management system to access any <br> Please login <a href='login.php'>here</a></div>";
		?>
    </div>
</div>
</div>
<div align="center">
<div class="image">
    <img src="images/download.webp" align="left" width ="700px" height="450px" alt=""/>
    <img src="images/download1.jpg" align="left" width ="750px" height="450px" alt=""/>

</div>
</div>
<!-- body ends -->
<?php 
	require_once("include/footer.php");
?>
</body>
</html>

