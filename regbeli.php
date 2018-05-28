<?php
	
	include ("config.php");

	if(isset($_POST["blj"])){
		$pid = $_POST["odid"];
		$namap = $_POST["namap"];

	 	$sqlx = "SELECT * FROM pembeli where pbl_nama = '$namap'";
	 	$resq = mysqli_query($conn, $sqlx);
		$datax = $resq->fetch_object();
		$idpbl = $datax->pbl_id;

	 	ob_start();
		include ("beli.php");
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
	 			('$pid', '$idbyr', '$idpbl', '$totalx', '$itotal', '$date', 0)";

	 	
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
?> 