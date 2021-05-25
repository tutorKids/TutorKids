<?php

include ('db.php');

if(isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$res = $conn->query("SELECT * FROM student where username = '$username' and password = '$password'");
	$row = $res->fetch_assoc();

	$username = $row['username'];
	$password = $row['password'];

	if($username==$username && $password==$password){

		session_start();
		$_SESSION['username']=$username;

		echo '<script>alert("Welcome");</script>';
		echo "<script>window.location.assign('home.php')</script>";

	}else{
		echo "<script>alert('Error');</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <link rel="icon" href="Logo/images.png" type="image/gif" sizes="16x16"> -->
	<title>Login</title>
	<!-- <link rel="stylesheet" href="style.css" type="text/css"> -->

	<style type="text/css">
		.btn {
			background: #1896e2;
			color: #fff;
			width: 40%;
			text-transform: uppercase;
			outline: 0;
			padding: 5px;
			margin: 5px;
			font-weight: bold;
			cursor: pointer;
		}

table {
	border-collapse: collapse;
	width: 30%;
}

th, td {
	padding: 15px;
}
}
	</style>
</head>

	<body class="bg-image">

		<div class="header" align="center">
			<td><h1>TutorKids</h1></td>
			<br></br>	
		</div>
		
	<h2 style="color: #148F77; text-align: center; ">LOGIN</h2>
	<p></p>

		<form method="post" >
		<table border="2" align="center">
			<tr>
				<th>Username :</th>
				<td>
					<input type="text" name="username" required>
				</td>
			</tr>

			<tr>
				<th>Password :</th>
				<td>
					<input type="password" name="password" pattern=".{6,}" required>
				</td>
			</tr>

			<tr>
				<th colspan="2">
					<input class="btn" type="submit" name="login" value="Login" style="background-color: green">
					</th>
				</tr>
  		</table>
				
	</form>
	</body>
</html>




