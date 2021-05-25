<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TutorKids</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<body>
<?php 
include 'nav.php';
 ?>

 <div class="container">
 	<h1>My Profile</h1>
 </div>

 <div class="profile-data">

 	<div class="profile-image">
 		<img src="Images/Tutor.png"  height="30" >
 	</div>
 	<form>
 		<div class="input-group">
 			<label>Email</label>
 			<input type="text" name="email" value="Hazim@gmail.com" readonly />
 		</div>
 		<div class="name-group">
 			<div class="input-group">
 				<label>Firstname</label>
 				<input type="text" name="fname" value="Hazim" readonly />
 			</div>
 			<div class="input-group">
 				<label>Lastname</label>
 				<input type="text" name="lname" value="Azis" readonly/>
 			</div>
 		</div>

 		<br><br>

 	<div>
 		<div class="input-group">
 			<label>Mobile</label>
 			<input type="text" name="mobileNo" value="014-23234555" readonly/>
 		</div>

 		<br><br>

 		<div class="input-group">
 			<label>Address</label>
 			<input type="text" name="add1" value="No 13" readonly/>
 		</div>

 		<div class="input-group">
 			<label>Zipcode</label>
 			<input type="text" name="zip" value="75450" readonly/>
 		</div>

 		<div class="input-group">
 			<label>City</label>
 			<input type="text" name="city" value="Melaka" readonly/>
 		</div>

 		<div style="display: flex;">
			<div class="input-group">
				<label for="country">Country</label>
				<select id="country" name="country">
					<option value="select country">Select Country</option>
					<option value="malaysia">Malaysia</option>
				</select>
			</div>

			<div class="input-group">
				<label for="state">State</label>
				<select id="state" name="state">
					<option value="select state">Select State</option>
					<option value="selangor">Selangor</option>
					<option value="negeri sembilan">Negeri Sembilan</option>
					<option value="johor">Johor</option>
					<option value="melaka">Melaka</option>
					<option value="kl">Kuala Lumpur</option>
					<option value="perak">Perak</option>
					<option value="kedah">Kedah</option>
					<option value="penang">Pulau Pinang</option>
					<option value="kelantan">Kelantan</option>
					<option value="pahang">Pahang</option>
					<option value="terengganu">Terengganu</option>
					<option value="sabah">Sabah</option>
					<option value="sarawak">Sarawak</option>
					<option value="labuan">Labuan</option>
					
				</select>
			</div>	
 		</div>
 	</div>

 	<div class="input-group">
 			<label>Academic Qualification</label>
 			<input type="text" name="academic" value="Bachelor Degree in English" readonly/>
	</div>

	<div class="input-group">
 			<label>Upload Certificate</label>
 			<button onclick="window.location.href='#'">Add Certificate</button>
	</div>

	<button class="btn-save" name="Save">Save</button>
 	</form>
 </div>
</body>
</html>
