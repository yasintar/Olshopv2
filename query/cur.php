<?php
						include('../config.php');
						$sql = "SELECT * FROM order_brg order by od_id";
						$res = mysqli_query($conn, $sql);
						//if(mysqli_num_rows($sql) > 0){
						$no = 1;
						// while($data = $res->fetch_object()){
						// 	$odid = $data->od_id;
						// 	$byrid = $data->byr_id;
						// 	$pblid = $data->pbl_id;
						// 	$jlh = $data->od_jumlah;
						// 	$ttl = $data->od_total;
						// 	$tglbeli = $data->od_tglbeli;
						// 	$ttlpajak = $data->od_total_pjk;
						// 	echo '
						// 		<tr bgcolor="#fff">
						// 			<td align="center">'.$odid.'</td>
						// 			<td align="center">'.$byrid.'</td>
						// 			<td align="center">'.$pblid.'</td>
						// 			<td align="center">'.$jlh.'</td>
						// 			<td align="center">'.$ttl.'</td>
						// 			<td align="center">'.$tglbeli.'</td>
						// 			<td align="center"><strong>'.$ttlpajak.'</strong></td>
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