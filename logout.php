<?php
 session_start();

 if(isset($_POST['logout'])){

 	$_SESSION = array();
 	session_destroy();
 	unset($_SESSION['user']);
 	
 	header("location: index.php");
 	exit();
 }


?>