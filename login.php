<?php include('server.php');  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	
	
<body>
<div class="loginbox">
<img src="avatar.png" class="avatar">
<h1>Login</h1>
<form method="post" action="login.php">
<?php include ('errors.php'); ?>

<div class="inputgroup">
<label>Username</label>
<input type="text" name="username">
</div>

<div class="inputgroup">
<label>Password</label>
<input type="password" name="password">
</div>

<div class="inputgroup">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p style="font-weight:bold;color:green">
Not a member?<a href="registration.php " style="color:red;">Sign up</a>
</p>
</form>
</div>
</body>


		</html>
	