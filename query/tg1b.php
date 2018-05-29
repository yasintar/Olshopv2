<?php
							include('../config.php');
							$sqle = "SELECT * FROM log_order_detail";
							$res = mysqli_query($conn, $sqle);

							//if(mysqli_num_rows($sql) > 0){
								//$no = 1;
								// while($datax = $res->fetch_object()){
								// 	$odid2 = $datax->od_id;
								// 	$brgid = $datax->brg_id;
								// 	$jlh2 = $datax->jumlah;
								// 	$tm = $datax->timestamps;
								// 	$stat = $datax->status_ubah;
								// 	echo '
								// 	<tr bgcolor="#fff">
								// 		<td align="center">'.$odid2.'</td>
								// 		<td align="center">'.$brgid.'</td>
								// 		<td align="center">'.$jlh2.'</td>
								// 		<td align="center">'.$tm.'</td>
								// 		<td align="center">'.$stat.'</td>
								// 	</tr>
								// 	';
								// 	//$no++;
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