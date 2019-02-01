<?php include('server.php'); ?>
<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	
	
<body>
<div class="header">
<h1>Home page</h1>
</div>

<div class="content">
	<?php if (isset($_SESSION['success'])): ?>
	<div class="error success">
	<h3>
	<?php echo $_SESSION['success'];
		unset($_SESSION['success']);
		?>
		</h3>
		</div>
		<?php endif ?>
		
		<?php if(isset($_SESSION["username"])): ?>
		<p style="color:white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p><a href="login.php?logout='1'" style="color:red;">Logout</a></p>
		<?php endif ?>
</div>

</body>


		</html>
	