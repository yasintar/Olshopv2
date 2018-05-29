<?php
							include('../config.php');
							$sql = "SELECT * FROM log_pembeli";
							$res = mysqli_query($conn, $sql);

							//if(mysqli_num_rows($sql) > 0){
								$no = 1;
							
								// while($data2 = $res->fetch_object()){
								// 	$idpbl2 = $data2->pbl_id;
								// 	$nama2 = $data2->pbl_nama;
								// 	$alamat2 = $data2->pbl_alamat;
								// 	$telepon2 = $data2->pbl_telp;
								// 	$email2 = $data2->pbl_email;
								// 	$status2 = $data2->pbl_status;
								// 	echo '
								// 	<tr bgcolor="#fff">
								// 		<td align="center">'.$idpbl2.'</td>
								// 		<td align="center">'.$nama2.'</td>
								// 		<td align="center">'.$alamat2.'</td>
								// 		<td align="center">'.$telepon2.'</td>
								// 		<td align="center">'.$email2.'</td>
								// 		<td align="center">'.$status2.'</td>
								// 	</tr>
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