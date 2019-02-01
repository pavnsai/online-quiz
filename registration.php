<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>


<body>
<div class="loginbox">
<img src="avatar.png" class="avatar">
<h1>Register</h1>

<form method="post" action="registration.php">
<?php include ('errors.php'); ?>
<div class="inputgroup">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>" >
</div>
<div class="inputgroup">
<label>Email</label>
<input type="text" name="email" value="<?php echo $email; ?>" >
</div>
<div class="inputgroup">
<label>Password</label>
<input type="password" name="password_1">
</div>
<div class="inputgroup">
<label>Confirm Password</label>
<input type="password" name="password_2">
</div>
<div class="inputgroup">
<button type="submit" name="register" class="btn">Register</button>
</div>
<p style="font-weight:bold">
Already a member?<a href="login.php ">Sign in</a>
</p>
</form>
</div>

</body>



</html>
 