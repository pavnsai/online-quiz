<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	//check to see if score is set_error_handler
	if(!isset($_SESSION['score'])) {
			$_SESSION['score']=0;
	}
	if($_POST) {
		
	$number=$_POST['number'];
	$selected_choice=$_POST['choice'];
	$next=$number+1;
	
	$query="SELECT * FROM questions";
	$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;
	
	$query="SELECT * FROM choices WHERE question_number=$number AND is_correct=1";
	
	$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$row=$result->fetch_assoc();
	$correct_choice=$row['id'];
	
	if($correct_choice==$selected_choice){
		$_SESSION['score']++;
	
	}
	if($number==$total){
		header('location:final.php');
		exit();
		
	}
	else{
		header("location:question.php?n=".$next);
	}
	
		}
	
	
	
	
	?>