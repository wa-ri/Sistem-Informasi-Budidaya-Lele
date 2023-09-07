<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];


switch ($pro) {
	

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>Nama</b></th>
 						<th><b>Jenis Kelamin</b></th>
 						<th><b>Tempat Lahir</b></th>
 						<th><b>Tanggal Lahir</b></th>
 						<th><b>Telpon</b></th>
 						<th><b>Alamat</b></th>
 						
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_customer ORDER BY cus_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
	 						<td>".$no."</td>
	 						<td>".$cus_nama."</td>
	 						<td>".$cus_jk."</td>
	 						<td>".$cus_tempat_lahir."</td>
	 						<td>".$cus_tgl_lahir."</td>
	 						<td>".$cus_tlp."</td>
	 						<td>".$cus_alamat."</td>
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
}
 ?>
