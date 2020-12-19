<?php 
	session_start();
	$uploadfile = 'img/' . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	mysqli_query($con, "INSERT INTO works (description, file, user_id) VALUES ('{$_POST["desc"]}', '{$uploadfile}', '{$_SESSION["id"]}')");
	header('Location: accountStudent.php');
 ?>