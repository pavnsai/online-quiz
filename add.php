<?php include 'database.php'; ?>
<?php  
if(isset($_POST['submit'])) {
	//get post variable
	$question_number=$_POST['question_number'];
	$question_text=$_POST['question_text'];
	$correct_choice=$_POST['correct_choice'];
	//choice array
	$choices=array();
	$choices[1]=$_POST['choice1'];
	$choices[2]=$_POST['choice2'];
	$choices[3]=$_POST['choice3'];
	$choices[4]=$_POST['choice4'];
	$choices[5]=$_POST['choice5'];
	//question query
	$query="INSERT INTO questions(question_number,text) VALUES('$question_number','$question_text')";
	//Run query
	
	$insert_row=$mysqli->query($query) or die($mysqli->error.__LINE__);
	
	//validate insert_row
	if($insert_row) {
		foreach($choices as $choice=>$value){
			if($value!=''){
				if($correct_choice==$choice) {
					$is_correct=1;
				}
				else{
					$is_correct=0;
				}
				//choice query
				$query="INSERT INTO choices (question_number,is_correct,text)
				VALUES('$question_number','$is_correct','$value')";
				
				//run query
				$insert_row=$mysqli->query($query) or die($mysqli->error.__LINE__);
				//validate insert_row
				if($insert_row){
					continue;
					
				}else{
					die('Error :('.$mysqli->errno .') '.$mysqli->error);
				}
				
				
			}
		}
		$msg='questions has been added';
	}
	
	
	
}
$query="SELECT * FROM questions";
	$questions=$mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$questions->num_rows;
	$next=$total+1;

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" >
	<title>Online Examination </title>
	<link rel="stylesheet" href="style1.css" type="text/css" >
	<style>
	label{
		display:inline-block;
		width:100px;
	}
	input[type='text']{
		width:97%;
		padding:4px;
		border-radius:5px;
		border:1px #ccc solid;
	}
		
		input[type='number']{
		width:50px;
	
		padding:4px;
		border-radius:5px;
		border:1px #ccc solid;
	}
	</style>
</head>
<body style="background-image:none;background-color:#92a8d1;" >
	<header>
		<div class="container">
		<h1> Online Examination</h1>
		</div>
	</header>
	<main>
		<div class="container">
		<h2>Add a Question</h2>
		<?php 
		if(isset($msg)) {
			echo '<p>' .$msg.'</p>';
		}
		?>
		<form method="post" action="add.php">
		<p>
		<label>Question Number</label>
		<input type="number" value="<?php echo $next; ?>" name="question_number">
		</p>
		<p>
		<label>Question Text</label>
		<input type="text" name="question_text">
		</p>
		<p>
		<label>Choice #1</label>
		<input type="text" name="choice1">
		</p>
		<p>
		<label>Choice #2</label>
		<input type="text" name="choice2">
		</p>
		<p>
		<label>Choice #3</label>
		<input type="text" name="choice3">
		</p>
		<p>
		<label>Choice #4</label>
		<input type="text" name="choice4">
		</p>
		<p>
		<label>Choice #5</label>
		<input type="text" name="choice5">
		</p>
		<p>
		<label>Correct Choice Number</label>
		<input type="number" name="correct_choice">
		</p>
		<p>
		
		<input style="color:green" type="submit" name="submit" value="Submit">
		</p>
		</div>
	</main>
	
	<footer>
		<div class="container">
			<p style="color:black;">Copyright &copy;2018,examination</p>
			</div>
	
	</footer>
</body>
</html>