<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	unset($_SESSION["id"]);
	header("Location: loginStudent.php");
 ?>