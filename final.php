<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" >
	<title>Online Examination </title>
	<link rel="stylesheet" href="style1.css" type="text/css" >
</head>
<body style="background-image:none;background-color:#92a8d1;" >
	<header>
		<div class="container">
		<h1> Online Examination</h1>
		</div>
	</header>
	<main>
		<div class="container">
		<h2>You're done</h2>
		<p>Congrats you have completed the exam</p>
		<p>Final score: <?php echo $_SESSION['score']; ?> </p>
		<a href="question.php?n=1" class="start">Try Again</a>
		
		</div>
	</main>
	
	<footer>
		<div class="container">
			<p style="color:black;">Copyright &copy;2018,examination</p>
			</div>
	
	</footer>
</body>
</html>
<?php session_destroy(); ?>