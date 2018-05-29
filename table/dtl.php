<?php
							include('../config.php');
							$sql = "SELECT * FROM detail_order";
							$res = mysqli_query($conn, $sql);

							//if(mysqli_num_rows($sql) > 0){
								//$no = 1;
								// while($data2 = $res->fetch_object()){
								// 	$odid2 = $data2->od_id;
								// 	$brgid = $data2->brg_id;
								// 	$jlh2 = $data2->jumlah;
								// 	echo '
								// 	<tr bgcolor="#fff">
								// 		<td align="center">'.$odid2.'</td>
								// 		<td align="center">'.$brgid.'</td>
								// 		<td align="center">'.$jlh2.'</td>
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