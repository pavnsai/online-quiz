<?php include ('database.php'); ?>
<?php session_start(); ?>

<?php 
	//set question number_format
	$number =(int)$_GET['n'];
	//get question
	
	$query="SELECT * FROM questions";
	$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;
	
	
	$query="SELECT * FROM questions WHERE question_number=$number";
	$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$question =$result->fetch_assoc();
	
	
	//get choices
	$query="SELECT * FROM choices WHERE question_number=$number";
	$choices=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$questions =$result->fetch_assoc();
	
?>
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
		<div class="current"><p style="font-weight:bold;">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </p></div>
		<p class="question">
		<?php echo $question['text']; ?>
		</p>
		<form method="post" action="process.php">
		<ul style="list-style-type:none" class="choices">
		<?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" ><?php echo $row['text'] ?></li>
		<?php endwhile; ?>
		
		</ul>
		<input type="submit" value="Submit">
		<input type="hidden" name="number" value="<?php echo $number; ?>" >
		</form>
		</div>
	</main>
	
	<footer>
		<div class="container">
			<p style="color:black;">Copyright &copy;2018,examination</p>
			</div>
	
	</footer>
</body>
</html>