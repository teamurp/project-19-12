<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	unset($_SESSION["id"]);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 mx-auto">
		<h1>Авторизация админа университета</h1>
		<form action="checkAdmin.php" method="POST">
			<input class="form-control mt-3" type="" name="login" placeholder="login">
			<input class="form-control mt-3" type="" name="password" placeholder="password">
			<button class="btn btn-info mt-3">Залогиниться</button>
		</form>
		<p class="text-danger"><?php echo $_GET["error"] ?></p>
	</div>
</body>
</html>