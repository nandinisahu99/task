<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
  <div class="lform1">
  	<h1>REGISTER NOW</h1>
  <form method="post" action="registration.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	  <label>Password</label>
  	  <input type="password" name="password1">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2">
  	  <button type="submit" class="button" name="reguser">Register Now</button>
  	<p>Already a member? <a href="login.php">Sign In</a></p>
</div>
</div>
  </form>
</body>
</html>