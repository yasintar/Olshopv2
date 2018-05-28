<?php
	
	include ("config.php");

	if(isset($_POST["blj"])){
		$pid = $_POST["pid"];
		$namap = $_POST["namap"];
		$alamatp = $_POST["alamatp"];
		$telpp = $_POST["telpp"];
		$emailp = $_POST["emailp"];

	 	$sqlx = "INSERT INTO pembeli (pbl_id, pbl_nama, pbl_alamat, pbl_telp, pbl_email, pbl_status) 
	 		VALUES ('$pid', '$namap', '$alamatp', '$telpp', '$emailp', 'pelanggan')";
	 	mysqli_query($conn, $sqlx) or die(mysqli_error($conn));


	 	ob_start();
		include ("register.php");
		ob_end_clean();
	 	$sqle = "SELECT * FROM bayar where byr_bank = '".$_POST['bayar']."' ";
		$rese = mysqli_query($conn, $sqle);
		$data = $rese->fetch_object();
		$idbyr = $data->byr_id;

		$totalx = 0;
		foreach ($_SESSION["cart_item"] as $item){
			$totalx += $item["quantity"];
			$itotal = $_SESSION["itotal"];
		}
		$date = date('Y-m-d');
	 	$sql2 = "INSERT INTO order_brg VALUES
	 			('".$_POST['odid']."', '$idbyr', '$pid', '$totalx', '$itotal', '$date', 0)";

	 	
	 	mysqli_query($conn, $sql2) or die(mysqli_error($conn));


    	foreach ($_SESSION["cart_item"] as $item){
    		$it = $item["brg_id"];
    		$it2 = $item["quantity"]; 
			$sql = "INSERT INTO detail_order VALUES( '".$_POST['odid']."','".$it."','".$it2."')";
			$sqlyo = "UPDATE barang SET brg_stok = brg_stok-'$it2' where brg_id='$it'";

			mysqli_query($conn, $sql) or die("Error, query failed! 3");
			mysqli_query($conn, $sqlyo) or die("Error, query failed! 4");
		}



		echo "berhasil";
		

	}
	header("location: checkout.php?action=empty");
	#window.history.go(-1);
	// echo "<meta http-equiv='refresh' content='index.html'>";
?> 