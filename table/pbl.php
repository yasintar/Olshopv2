<?php
						include('../config.php');
						$sql = "SELECT * FROM pembeli";
						$res = mysqli_query($conn, $sql);
						//if(mysqli_num_rows($sql) > 0){
						$no = 1;
						// while($data = $res->fetch_object()){
						// 	$id = $data->pbl_id;
						// 	$nama = $data->pbl_nama;
						// 	$alamat = $data->pbl_alamat;
						// 	$telp = $data->pbl_telp;
						// 	$email = $data->pbl_email;
						// 	$stat = $data->pbl_status;
						// 	echo '
						// 		<tr bgcolor="#fff">
						// 			<td align="center">'.$id.'</td>
						// 			<td align="center">'.$nama.'</td>
						// 			<td align="center">'.$alamat.'</td>
						// 			<td align="center">'.$telp.'</td>
						// 			<td align="center">'.$email.'</td>
						// 			<td align="center">'.$stat.'</td>
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