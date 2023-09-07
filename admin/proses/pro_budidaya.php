<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];

@$bdy_id=$_GET['bdy_id'];
@$bdy_tlp=$_GET['bdy_tlp'];
@$bdy_nama=$_GET['bdy_nama'];
@$bdy_alamat=$_GET['bdy_alamat'];


switch ($pro) {
	case 'insert':
			if($bdy_id==NULL){
				$insert=mysql_query("INSERT INTO tbl_tempat_budidaya VALUES(NULL,'$bdy_nama','$bdy_alamat','$bdy_tlp')")or die(mysql_error());
			}else{
				$update=mysql_query("UPDATE tbl_tempat_budidaya SET bdy_pemilik='$bdy_nama',bdy_alamat='$bdy_alamat',bdy_tlp='$bdy_tlp' WHERE bdy_id='$bdy_id'")or die(mysql_error());
			}
			
	
		break;

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th> 						
 						<th><b>Nama</b></th>
 						<th><b>No Telp.</b></th>
 						<th><b>alamat</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_tempat_budidaya ORDER BY bdy_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$bdy_pemilik."</td>
 						<td>".$bdy_tlp."</td>
 						<td>".$bdy_alamat."</td>
 						
 						<td><button class='btn btn-danger' onclick='bdy_hapus(".$bdy_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='bdy_update(".$bdy_id.")'><span class='fa fa-fw fa-edit'></span> Update</button>
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
		$delete=mysql_query("DELETE FROM tbl_tempat_budidaya WHERE bdy_id='$bdy_id'") or die(mysql_error());
		break;

	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_tempat_budidaya WHERE bdy_id='$bdy_id'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $bdy_id."|".$bdy_pemilik."|".$bdy_tlp."|".$bdy_alamat."|";
		break;
}
 ?>
