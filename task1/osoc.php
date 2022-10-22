<?php 
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="design.css">
</head>
<div class='btn'>
<a href="osoc.php?logout='1'" style="color: red;">logout</a>
</div>
<body class='os'>
<div class="osoc">
	<h1>WELCOME TO OSOC</h1>
</div>
</body>
</html>