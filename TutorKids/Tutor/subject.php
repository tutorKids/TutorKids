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
    <header>
    <?php 
    include 'nav.php'; ?>

	<div class="container">
		<div class="header">
			<h1>Subject</h1>
			<button onclick="window.location.href='addSubject.php'">Add Subject</button>
		</div>
	</div>

	<div>
    	<p>There is no subject.</p>
	</div>
</header>

</body>
</html>
