<?php
	session_start();
	session_destroy(); //disables the forward button too //on visiting home again -> login.php is redirected because of isset check //destroy deleted the $_SESSION array (maybe)
	header('location:login.php');
?>