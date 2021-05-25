<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TutorKids</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
</head>
<body>
    <header>
    <?php 
    include 'nav.php';
    ?>
    </header>

    <div class="subject">
    	
    
	<div class="container">
		<div class="header">
			<h1>Subject
			
			</h1>
			<button class="btn-back" onclick="window.location.href='subject.php'">Back</button>
		</div>
	</div>

		
		<div class="form">
			<p>Select subject that you want to add.</p>

			<form action="addSubject.php" method="post">
				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="Bahasa Melayu" id="bm" onclick="ratefunction()" />
						<label for="bm">Bahasa Melayu</label>
					</div>
					<div class="rate" id="rateBm" style="display: block; width: 70%">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="English" id="bi" onclick="ratefunction()" />
						<label for="bi">English</label>
					</div>
					<div class="rate" id="rateEng" style="display: block;">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="Mathematics" id="math" onclick="ratefunction()"/>
						<label for="math">Mathematics</label>
					</div>
					<div class="rate" id="rateMath" style="display: block;">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="Science" id="sc" onclick="ratefunction()"/>
						<label for="sc">Science</label>
					</div>
					<div class="rate" id="rateSc" style="display: block;">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="History" id="his" onclick="ratefunction()"/>
						<label for="his">History</label>
					</div>
					<div class="rate" id="rateHist" style="display: block;">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<div class="item">
					<div class="column-input">
						<input type="checkbox" name="sub[]" value="Islamic Education" id="is" onclick="ratefunction()"/>
						<label for="is">Islamic Education</label>
					</div>
					<div class="rate" id="rateIs" style="display: block;">
						<label>Hourly Rate, RM&nbsp;</label>
						<input type="number" name="rate[]">
					</div>
					<br>
				</div>

				<button class="btn-save" name="Save">Save</button>
			</form>
		</div>
	</div>
<script type="text/javascript">
	function ratefunction(){
		var labelbm = document.getElementById("rateBm");
		var checkboxbm = document.getElementById("bm");
		var labelbi = document.getElementById("rateEng");
		var checkboxbi = document.getElementById("bi");
		var labelmath = document.getElementById("rateMath");
		var checkboxmath = document.getElementById("math");
		var labelsc = document.getElementById("rateSc");
		var checkboxsc = document.getElementById("sc");
		var labelhis = document.getElementById("rateHist");
		var checkboxhis = document.getElementById("his");
		var labelis = document.getElementById("rateIs");
		var checkboxis = document.getElementById("is");
		
		if (checkboxbm.checked == true) {
			labelbm.style.display = "block";
		}else {
			labelbm.style.display = "none";
		}

		if (checkboxbi.checked == true) {
			labelbi.style.display = "block";
		}else {
			labelbi.style.display = "none";
		}

		if (checkboxmath.checked == true) {
			labelmath.style.display = "block";
		}else {
			labelmath.style.display = "none";
		}

		if (checkboxsc.checked == true) {
			labelsc.style.display = "block";
		}else {
			labelsc.style.display = "none";
		}

		if (checkboxhis.checked == true) {
			labelhis.style.display = "block";
		}else {
			labelhis.style.display = "none";
		}

		if (checkboxis.checked == true) {
			labelis.style.display = "block";
		}else {
			labelis.style.display = "none";
		}

		
	}
</script>
</body>
</html>

<?php 
require 'db.php';

	if(isset($_POST['Save'])) {
		echo "<script>console.log('JAJAJA')</script>";

		$sub = $_POST['sub'];
		$rate = $_POST['rate'];

		echo "<script>console.log('".count($sub)."')</script>";
		echo "<script>console.log('".count($rate)."')</script>";

		for($i = 0; $i < count($sub); $i++) {
			echo $sub[$i] ." ".$rate[$i]."<br>";

			if($rate[$i] != "") {
				echo "<script>console.log('".$rate[$i]."')</script>";
			}

			/*$sql = "INSERT INTO subject(name, rate) VALUES('$sub[$i]', '$rate[$i]')";
			mysqli_query($conn, $sql) or die("Error" . mysqli_error($conn));*/
		}
	}
?>