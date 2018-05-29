<?php
							include('../config.php');
							$sql = "SELECT * FROM vibarang";
							$res = mysqli_query($conn, $sql);

							//if(mysqli_num_rows($sql) > 0){
								// $no = 1;
								// while($rows = $res->fetch_object()){
								// 	$id = $rows->brg_id;
								// 	$nama = $rows->brg_nama;
								// 	$jlh = $rows->jumlah_terjual;
								// 	echo '
								// 	<tr bgcolor="#fff" class="poto">
								// 		<td>'.$no.'</td>
								// 		<td align="center">'.$id.'</td>
								// 		<td align="center">'.$nama.'</td>
								// 		<td align="center">'.$jlh.'</td>
								// 		<td align="center"><img src="../images/'.$id.'.jpg"></td>
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