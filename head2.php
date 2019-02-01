<?php include ('database.php'); ?>
<?php 

//get total questions
$query="SELECT * FROM questions";
	$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows;

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
		
	<p style="font-size:20px; color:black;">	
			<strong>1.</strong> You are required to comply with the directions given by the head invigilator at the examination venue.<br>
			<strong>2.</strong>Your student identity card or other valid photo identification must be visible on your desk during the entire examination (Student ID App with photo is not valid as identification).<br>
			<strong>3.</strong>You are not permitted to leave the venue for a break before finishing the exam.<br>  
			<strong>4.</strong>You may keep food and drink on or by the desk during the entire examination. You may eat and drink whenever you want.<br>
			<strong>5.</strong>At a digital examination, it is your responsibility to submit your exam paper electronically. Before you leave the examination venue you MUST contact the head invigilator to register/confirm that you have submitted your examination.<br>    
			<strong>6.</strong>  Each question carries one mark.<br>
			<strong>7.</strong>  There is no Negative marking .<br>
			<strong>8.</strong>  Any kind of malpractice is strictly prohibited<br>
			<strong>9.</strong> Number of Questions:</strong><?php echo $total; ?><br>
			<strong>10.</strong> Total Time:</strong><?php echo $total*.5; ?> minutes<br></p>
			<a style="text-decoration:none;"href="question.php?n=1" class="start">Start Exam</a>
	</main>
	<footer>
		<div class="container">
			<p style="color:black;">Copyright &copy;2018,examination</p>
			</div>
	
	</footer>
</body>
</html>