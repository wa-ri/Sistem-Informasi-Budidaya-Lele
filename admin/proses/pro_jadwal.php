<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];


@$pengguna=$_SESSION['sess_adm_id'];
@$jdl_id=$_GET['jdl_id'];
@$jdl_bdy_id=$_GET['jdl_bdy_id'];
@$jdl_tgl=$_GET['jdl_tgl'];
@$jdl_status="Selesai";



switch ($pro) {
	case 'insert':
			if($jdl_id==NULL){
				$insert=mysql_query("INSERT INTO tbl_jadwal VALUES(NULL,'$pengguna','$jdl_bdy_id','$jdl_tgl','')")or die(mysql_error());
			}else{
				$update=mysql_query("UPDATE tbl_jadwal SET jdl_status='$jdl_status' WHERE jdl_id='$jdl_id'")or die(mysql_error());
			}
			
	
		break;

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>Tanggal Panen</b></th>
 						<th><b>pemilik</b></th>
 						<th><b>Alamat</b></th>
 						<th><b>No Telp</b></th>
 						<th><b>Status Panen</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_jadwal INNER JOIN tbl_tempat_budidaya ON tbl_jadwal.bdy_id=tbl_tempat_budidaya.bdy_id ORDER BY tbl_jadwal.jdl_tgl ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$jdl_tgl."</td>
 						<td>".$bdy_pemilik."</td>
 						<td>".$bdy_alamat."</td>
 						<td>".$bdy_tlp."</td>
 						<td><b>".$jdl_status."</b></td>
 						
 						<td><button class='btn btn-danger' onclick='jdl_hapus(".$jdl_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='jdl_update(".$jdl_id.")'><span class='fa fa-fw fa-edit'></span> Update Status</button>
 						</td>
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

	case 'delete':
		$delete=mysql_query("DELETE FROM tbl_jadwal WHERE jdl_id='$jdl_id'") or die(mysql_error());
		break;

	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_jadwal INNER JOIN tbl_kategori ON tbl_jadwal.jdl_ktg=tbl_kategori.ktg_id WHERE tbl_jadwal.jdl_id='$jdl_id'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $jdl_id."|".$jdl_nama."|".$ktg_id."|".$ktg_nama."|".$jdl_harga."|";
		break;
}
 ?>
