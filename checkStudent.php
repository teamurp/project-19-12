<?php
	session_start(); 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	$query = mysqli_query($con, "SELECT * FROM students WHERE phone = '{$_POST["phone"]}' and password = '{$_POST["password"]}'");
	$stroka = $query->fetch_assoc();
	if($stroka!=null){
		header("Location: accountStudent.php");
		$_SESSION["id"]=$stroka["id"];
	}
	else{
		header("Location: loginStudent.php?error=Такого пользователя не существует!");
	}
 ?>