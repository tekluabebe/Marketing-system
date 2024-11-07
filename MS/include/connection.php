<?php
//start connection

$connect = mysqli_connect('localhost','root','','supermarketing');
if(!$connect)
	die("Database connection Error".mysqli_connect_error());
 ?>