<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	$query = mysqli_query($con, "SELECT * FROM university_admin INNER JOIN universities ON university_admin.university_id = universities.id WHERE university_admin.id = {$_SESSION["admin_id"]}");
	$string = $query->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Профиль админа университета</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <a class="navbar-brand" href="index.php">Поступай легко!</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item ml-3">
	         <a href="accountStudent.php">Аккаунт студента</a>
	      </li>
	      <li class="nav-item ml-3">
	         <a href="accountUniversity.php">Аккаунт админа университета</a>
	      </li>
	      <li class="nav-item ml-3">
	        <a href="signOutAdmin.php" class="text-danger">Выйти</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="col-8 mx-auto">
		<?php 
			$query2 = mysqli_query($con, "SELECT * FROM students INNER JOIN applications ON students.id = applications.student_id WHERE applications.university_id={$string["university_id"]}");
		 ?>
		<h1>Добро пожаловать, <?php echo $string["login"] ?>!</h1>
		<h3>Ваш университет: <?php echo $string["name"] ?></h3>
		<h3>Заявки от абитуриентов:</h3>
		<?php 
			for ($i=0; $i < $query2->num_rows; $i++) { 
				# code...
				$string2 = $query2->fetch_assoc();
		 ?>
		<div>
			<h3>ФИО абитуриента: <?php echo $string2["fio"] ?></h3>
			<p>Возраст: <?php echo $string2["age"] ?></p>
			<p>Школа: <?php echo $string2["school"] ?></p>
			<input type="" name="" value="<?php echo $string2["id"] ?>" style="display: none"><button class="btn btn-info">Посмотреть портфолио</button>
		</div>
		<hr>
		<?php 
			}
		 ?>
	</div>
	
</body>
</html>