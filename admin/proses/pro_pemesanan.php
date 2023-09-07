<?php 
session_start();
include_once("koneksi.php");
date_default_timezone_set("asia/jakarta");
@$date=date('Y-m-d');
@$sess=$_SESSION['sess_adm_id'];

@$psn_id=$_GET['psn_id'];

@$pro=$_GET['pro'];

switch ($pro) {
	

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>No.Pesan</b></th>
 						<th><b>Cust. Nama</b></th>
 						<th><b>Tanggal Pesan</b></th>
 						<th><b>Total Pesan</b></th>
 						<th><b>Status pesan</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";

 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_pesan 
				INNER JOIN tbl_pesan_detail ON tbl_pesan.psn_id=tbl_pesan_detail.psn_id
				INNER JOIN tbl_customer ON tbl_pesan.cus_id=tbl_customer.cus_id
 				GROUP BY tbl_pesan.psn_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$psn_id."</td>
 						<td>".$cus_nama."</td>
 						<td>".$psn_tgl."</td>
 						<td>Rp.".number_format($psn_total,0,',','.')."</td>
 						<td>".$psn_status."</td>
 					

 						<td>
 							<a href='?cs=d_pesan&no_cart=".$psn_id."'> <button class='btn btn-success' ><span class='fa fa-fw '></span> Detail</button></a>";
 				?>

							<button class='btn btn-primary' onclick='psn_update("<?php echo $psn_id; ?>")'><span class='fa fa-fw fa-edit'></span> Update Status</button>
 				<?php
 					echo"</td>
 						</tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";
 ?>
			 <script>
			 	$(document).ready(function(){
			 		$('#stn_tabel').DataTable({
			 			'ordering':false,
			 			'scrollY':true
			 		});
			 	});
			 </script>

 <?php

		break;


		case 'update':
			$konf="Konfirmasi";
			$qy=mysql_query("UPDATE tbl_pesan SET psn_status='$konf' WHERE psn_id='$psn_id'") or die (mysql_error());
		break;
}
 ?>


