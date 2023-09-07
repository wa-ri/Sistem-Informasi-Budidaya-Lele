<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];
@$ktg_id=$_GET['ktg_id'];
@$ktg_nama=$_GET['ktg_nama'];


switch ($pro) {
	case 'insert':
			if($ktg_id==NULL){
				$insert=mysql_query("INSERT INTO tbl_kategori VALUES(NULL,'$ktg_nama')")or die(mysql_error());
			}else{
				$update=mysql_query("UPDATE tbl_kategori SET ktg_nama='$ktg_nama' WHERE ktg_id='$ktg_id'")or die(mysql_error());
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
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_kategori ORDER BY ktg_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$ktg_nama."</td>
 						
 						<td><button class='btn btn-danger' onclick='ktg_hapus(".$ktg_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='ktg_update(".$ktg_id.")'><span class='fa fa-fw fa-edit'></span> Update</button>
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
		$delete=mysql_query("DELETE FROM tbl_kategori WHERE ktg_id='$ktg_id'") or die(mysql_error());
		break;

	case 'update':
		$update=mysql_query("UPDATE tbl_kat SET png_nama='$ktg_nama', png_jk='$ktg_jk', png_tempat_lahir='$ktg_tempat_lahir', png_tgl_lahir='$ktg_tgl_lahir', png_tlp='$ktg_tlp', png_alamat='$ktg_alamat' WHERE png_id='$ktg_id'") or die(mysql_error());
		break;

	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_kategori WHERE ktg_id='$ktg_id'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $ktg_id."|".$ktg_nama."|";
		break;
}
 ?>
