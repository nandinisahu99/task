<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LoginForm</title>
  <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
  <div class="lform">
  	<h1>LOGIN</h1>
  <form method="post" action="login.php">
	<?php include('errors.php') ?>
	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" ></br>
  		<label>Password</label>
  		<input type="password" name="password"></br>
  		<button type="submit" class="button" name="loginuser">Login</button>
  	<p>Not yet a member? <a href="registration.php">Sign Up</a></p>
	  </div>
  </form>
</div>
</body>
</html>
