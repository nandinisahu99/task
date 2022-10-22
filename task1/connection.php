<?php
session_start();
$username="";
$email="";
$n=array(); 
$db = mysqli_connect('localhost', 'root', '', 'login');

if (isset($_POST['reguser'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']); 
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  

  if (empty($username)) 
  { array_push($n, "Invalid username"); }
  if (empty($email)) 
  { array_push($n, "Invalid email"); }
  if (empty($password1)) 
  { array_push($n, "Invalid password"); }
  if ($password1 != $password2)
  { array_push($n, "Mismatch");}

  $userdetail = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $userdetail);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($n, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($n, "email already exists");
    }
  }
  if (count($n) == 0) {
  	$password =md5($password1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	header('location: login.php');
  }
}


if (isset($_POST['loginuser'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($n, "Invalid Username");
  }
  if (empty($password)) {
  	array_push($n, "Invalid Password");
  }

  if (count($n) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: osoc.php');
  	}else {
  		array_push($n, "Wrong username/password");
  	}
  }
}
?>