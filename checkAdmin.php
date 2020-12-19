<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	$query = mysqli_query($con, "SELECT * FROM university_admin WHERE login='{$_POST["login"]}' and password = '{$_POST["password"]}'");
	$string = $query->fetch_assoc();
	if($string==null){
		header("Location: loginAdmin.php?error=Такого пользователя не существует!");
	}
	else{
		header("Location: accountUniversity.php");
		$_SESSION["admin_id"]=$string["id"];
	}
 ?>