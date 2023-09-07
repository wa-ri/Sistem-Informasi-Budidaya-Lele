<?php 
session_start();
include_once("../admin/proses/koneksi.php");
$pro=$_GET['pro'];
@$session=$_SESSION['sess_cus_id'];
@$no_cart=$_GET['no_cart'];

switch ($pro) {
	

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='tb display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>No Transaksi</b></th>
 						<th><b>Total</b></th>
 						<th><b>Status</b></th>
 						<th><b>Detail</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
	 		$query=mysql_query("SELECT * FROM tbl_pesan 
								LEFT JOIN tbl_pesan_detail ON tbl_pesan.psn_id=tbl_pesan_detail.psn_id 
								INNER JOIN tbl_produk ON tbl_produk.pdk_id=tbl_pesan_detail.pdk_id
								WHERE tbl_pesan.cus_id='$session' GROUP BY tbl_pesan.psn_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$psn_id."</td>
 						<td>Rp.".number_format($psn_total,0,',','.')."</td>
 						<td>".$psn_status."</td>


 						<td>
							<a href='?cs=d_beli&no_cart=".$psn_id."'> <button class='btn btn-primary' id='dbel'><span class='fa fa-fw fa-edit'></span> Detail</button> </a>
 						</td>
 						</tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";
 ?>
			 <script>
			 	$(document).ready(function(){
			 		$('.tb').DataTable({
			 			'ordering':false,
			 			'scrollY':true
			 		});
			 	});
			 </script>

 <?php

		break;

}
 ?>
