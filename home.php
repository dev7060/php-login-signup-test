<?php
	session_start();
	if(!isset($_SESSION['username']))
		header('location:login.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
	</head>
	<body>
		<div class="container">
			<h2 class="text-center text-success">Welcome <? echo $_SESSION['username']; ?></h2>
			<a href="logout.php">LOGOUT</a>
		</div>
	</body>
</html>