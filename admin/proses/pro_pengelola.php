<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];
@$pll_id=$_GET['pll_id'];
@$pll_nama=$_GET['pll_nama'];
@$pll_jk=$_GET['pll_jk'];
@$pll_tempat_lahir=$_GET['pll_tempat_lahir'];
@$pll_tgl_lahir=$_GET['pll_tgl_lahir'];
@$pll_alamat=$_GET['pll_alamat'];
@$pll_tlp=$_GET['pll_tlp'];
@$pll_lvl=$_GET['pll_lvl'];

switch ($pro) {
	case 'insert':
			if($pll_id==NULL){
				$insert=mysql_query("INSERT INTO tbl_pengelola VALUES(NULL,'$pll_nama','$pll_tempat_lahir','$pll_tgl_lahir','$pll_tlp','$pll_alamat', '$pll_lvl','$pll_jk')")or die(mysql_error());
			}else{
				$update=mysql_query("UPDATE tbl_pengelola SET png_nama='$pll_nama', png_jk='$pll_jk', png_tempat_lahir='$pll_tempat_lahir', png_tgl_lahir='$pll_tgl_lahir', png_tlp='$pll_tlp', png_alamat='$pll_alamat', png_level='$pll_lvl' WHERE png_id='$pll_id'")or die(mysql_error());
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
 						<th><b>Jenis Kelamin</b></th>
 						<th><b>Tempat Lahir</b></th>
 						<th><b>Tanggal Lahir</b></th>
 						<th><b>Telpon</b></th>
 						<th><b>Alamat</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_pengelola ORDER BY png_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$png_nama."</td>
 						<td>".$png_jk."</td>
 						<td>".$png_tempat_lahir."</td>
 						<td>".$png_tgl_lahir."</td>
 						<td>".$png_tlp."</td>
 						<td>".$png_alamat."</td>

 						<td><button class='btn btn-danger' onclick='png_hapus(".$png_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='png_update(".$png_id.")'><span class='fa fa-fw fa-edit'></span> Update</button>
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
		$delete=mysql_query("DELETE FROM tbl_pengelola WHERE png_id='$pll_id'") or die(mysql_error());
		break;

	case 'update':
		$update=mysql_query("UPDATE tbl_pllyawan SET png_nama='$pll_nama', png_jk='$pll_jk', png_tempat_lahir='$pll_tempat_lahir', png_tgl_lahir='$pll_tgl_lahir', png_tlp='$pll_tlp', png_alamat='$pll_alamat' WHERE png_id='$pll_id'") or die(mysql_error());
		break;

	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_pengelola WHERE png_id='$pll_id'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $png_nama."|".$png_jk."|".$png_tempat_lahir."|".$png_tgl_lahir."|".$png_tlp."|".$png_alamat."|".$png_level."|";
		break;
}
 ?>
