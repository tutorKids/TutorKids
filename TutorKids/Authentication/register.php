<?php
	include ('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
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

		.input-field {
			width: 100%;
			outline: 0;
			padding: 7px;
			margin: 0px;
		}

		table {
	border-collapse: collapse;
	width: 30%;
}

th, td {
	padding: 15px;
}

	</style>
</head>
<body>
	<div class="mid">
		<div class="header" align="center">
			<td><h1>TutorKids</h1></td>
			<br></br>	
		</div>
		<div class="content">
			<table class="login" border="0" width="30%" align="center" cellpadding="0" cellspacing="0">
				<tr align="center">
					<td></td>
					<td><h3>Register Here!!</h3></td>
				</tr>

				<form action="register.php" method="post">
				<tr align="center">
					<td>First Name:</td>
					<td><input class="input-field" type="text" name="firstName" pattern="[a-zA-Z\s]+" title="Please enter alphabets only" placeholder="Please enter alphabets only" required autofocus></td>
				</tr>
				<tr align="center">
					<td>Last Name:</td>
					<td><input class="input-field" type="text" name="lastName" pattern="[a-zA-Z\s]+" title="Please enter alphabets only" placeholder="Please enter alphabets only" required autofocus></td>
				</tr>
				<tr align="center">
					<td>Birth Date:</td>
					<td><input class="input-field" type="date" name="birthDate" required></td>
				</tr>
				<tr align="center">
					<td>Username:</td>
					<td><input class="input-field" type="text" name="username" required></td>
				</tr>
				<tr align="center">
					<td>Password:</td>
					<td><input class="input-field" type="password" name="password" title="Minimum length is 8" placeholder="Minimum length is 8" minlength="8" required></td>
				</tr>
				<tr align="center">
					<td>Confirm Password:</td>
					<td><input class="input-field" type="password" name="confirmPassword" title="Minimum length is 8" placeholder="Minimum length is 8" minlength="8" required></td>
				</tr>

				<tr>
				<th colspan="2">
					<a href="home.php">
						<!-- <button type="button" name="back" class="btn">Back</button> -->
					</a>
					<input class="btn" type="submit" name="submit" value="Register" style="background-color: green">
				</th>
				</tr>
				</form>

			</table>
	</div>

</body>
</html>

<?php //untuk masukkan data dlm db

	if(isset($_POST['submit'])) {   //isset akan tngok klau tekan submit ada value(data) ke tak.klau xde akn p ke else

		$firstName = $_POST['firstName'];   //'name' amik kat form atas (x sama dgn db pun xpe,tpi kene sama dgn form)
		$lastName = $_POST['lastName'];
		$username = $_POST['username'];
		$birthDate = $_POST['birthDate'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		//function to connect db. $conn mesti sama dgn db.php
		$registration = mysqli_query($conn, "INSERT INTO student (firstName, lastName, birthDate, username, password, confirmPassword) VALUES ('$firstName', '$lastName', '$username', '$birthDate', '$password', '$confirmPassword')");

		if($registration == TRUE) {
			echo '<script language = "javascript">';
			echo 'alert("Registration success");';
			echo 'window.location.href = "login.php";'; //registration success akn p ke login page
			echo '</script>';
		}

		else
		{
			echo '<script language = "javascript">';
			echo 'alert("Registration Fail");';
			echo 'window.location.href = "register.php";';
			echo '</script>';

		}

		mysqli_close($conn);
	}


?>
