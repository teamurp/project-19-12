<?php 
 session_start();
 	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
 	mysqli_query($con, "INSERT INTO applications (student_id, university_id) VALUES ({$_SESSION["id"]}, {$_POST["univer_id"]})");
 	header("Location: accountStudent.php");
 ?>