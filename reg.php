<?php

	if(isset($_POST["blj"])){

		include ("config.php");
	 	
	 	$sql3 = "INSERT INTO pembeli (pbl_id, pbl_nama, pbl_alamat, pbl_telp, pbl_email, pbl_status) VALUES 
	 			('".$_POST['pid']."', '".$_POST['namap']."', '".$_POST['alamatp']."', '".$_POST['telpp']."', '".$_POST['emailp']."', 'pelanggan')";
	 	mysqli_query($conn, $sql3) or die("Error, query failed! 1");

	 	$sqle = "SELECT * FROM bayar where byr_bank = '".$_POST['bayar']."' ";
		$rese = mysqli_query($conn, $sqle);
		$data = $res->fetch_object();
		$idbyr = $data->byr_id;

		$totalx = 0;
		foreach ($_SESSION["cart_item"] as $item){
			$totalx += $item["quantity"];
		}
		$date = date('Y-m-d');
	 	$sql2 = "INSERT INTO order_brg VALUES
	 			('".$_POST['odid']."', '$idbyr',  '$totalx', '$item_total', '$date', 0)";

	 	mysqli_query($conn, $sql2) or die("Error, query failed! 2");


    	foreach ($_SESSION["cart_item"] as $item){
    		$it = $item["brg_id"];
    		$it2 = $item["quantity"]; 
			$sql = "INSERT INTO detail_order VALUES( '".$_POST['odid']."','$it','$it2')";

			mysqli_query($conn, $sql) or die("Error, query failed! 3");
		}

		echo "berhasil";
		

	}
	header("location: index.php");
	#window.history.go(-1);
	// echo "<meta http-equiv='refresh' content='index.html'>";
?> 