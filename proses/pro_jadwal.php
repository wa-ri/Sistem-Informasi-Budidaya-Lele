<?php 
session_start();
include_once("../admin/proses/koneksi.php");
$pro=$_GET['pro'];
@$session=$_SESSION['sess_cus_id'];


switch ($pro) {
	

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='tb display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>Tanggal Panen</b></th>
 						<th><b>Pemilik Kolam</b></th>
 						<th><b>No Tlp.</b></th>
 						<th><b>Alamat</b></th>
 						<th><b>Status Panen</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
	 		$query=mysql_query("SELECT * FROM tbl_jadwal
								INNER JOIN tbl_tempat_budidaya ON tbl_jadwal.bdy_id=tbl_tempat_budidaya.bdy_id 
								 ORDER BY tbl_jadwal.jdl_tgl ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
	 						<td>".$no."</td>
	 						<td>".$jdl_tgl."</td>
	 						<td>".$bdy_pemilik."</td>
	 						<td>".$bdy_tlp."</td>
	 						<td>".$bdy_alamat."</td>
	 						<td>".$jdl_status."</td>
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
