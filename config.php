<?php
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_name = "olshop";


    // Create connection
	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if ($conn->connect_error) {
       	die("Connection failed: " . $conn->connect_error);
    }
	#else echo "Success ";
?>