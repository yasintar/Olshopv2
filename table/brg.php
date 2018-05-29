<?php
						include('../config.php');
						$sql = "SELECT * FROM barang";
						$res = mysqli_query($conn, $sql);
						//if(mysqli_num_rows($sql) > 0){
						$no = 1;
						// while($data = $res->fetch_object()){
						// 	$brgid = $data->brg_id;
						// 	$ktgid = $data->ktg_id;
						// 	$nama = $data->brg_nama;
						// 	$harga = $data->brg_harga;
						// 	$stok = $data->brg_stok;
						// 	$ket = $data->brg_ket;
						// 	if($stok < 5){
						// 		$sqlea = "UPDATE barang set brg_stok = brg_stok+50 where brg_id = '$brgid'";
						// 		mysqli_query($conn, $sqlea) or die(mysqli_error($conn));
						// 	}
						// 	echo '
						// 		<tr bgcolor="#fff">
						// 			<td align="center">'.$brgid.'</td>
						// 			<td align="center">'.$ktgid.'</td>
						// 			<td align="center">'.$nama.'</td>
						// 			<td align="center">'.$harga.'</td>
						// 			<td align="center">'.$stok.'</td>
						// 			<td align="center">'.$ket.'</td>
						// 		</tr>
						// 	';
						// 	$no++;
						// }
						while($ex = $res->fetch_array(MYSQLI_ASSOC)){
							$exx[] = $ex;
						}
						$res = ["sEcho" => 1,
						"iTotalRecords" => count($exx),
						"iTotalDisplayRecords" => count($exx),
						"aaData" => $exx ];	
						echo json_encode($res);			
					?>