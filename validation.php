<?php
	session_start();
	//header('location:login.php');
	$con = mysqli_connect("localhost", "root" );
	if($con){
		echo "connection successful";
	}else{
		echo "no connection";
	}
	mysqli_select_db($con, "sessionpractical");
	$name = $_POST['user'];
	$pass = $_POST['password'];
	$q = "select * from signin where name = '$name' && password = '$pass'";
	$result = mysqli_query($con, $q);
	var_dump ($result);
	$num = mysqli_num_rows($result);
	//reutrns the num_rows field of result (which is an object of mysqli_result maybe)
	if($num==1){
		$_SESSION['username']= $name;
		header('location:home.php');
	}else{
		header('location:login.php');
	}
?>