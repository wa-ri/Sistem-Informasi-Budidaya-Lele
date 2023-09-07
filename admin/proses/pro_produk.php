<?php 
session_start();
include_once("koneksi.php");
$pro=$_GET['pro'];

@$pdk_id=$_POST['pdk_id'];
@$pdk_ktg_id=$_POST['pdk_ktg_id'];
@$pdk_nama=$_POST['pdk_nama'];
@$pdk_harga=$_POST['pdk_harga'];
@$pdk_gbr=$_FILES['pdk_gbr']['name'];
@$path=$_FILES['pdk_gbr']['tmp_name'];

switch ($pro) {
	case 'insert':
			if($pdk_id==NULL){
				$insert=mysql_query("INSERT INTO tbl_produk VALUES(NULL,'$pdk_ktg_id','$pdk_nama','$pdk_harga','$pdk_gbr')")or die(mysql_error());

				move_uploaded_file($path, "../images/product/".$pdk_gbr);
			}else{
				$update=mysql_query("UPDATE tbl_produk SET pdk_nama='$pdk_nama',pdk_harga='$pdk_harga',pdk_ktg='$pdk_ktg_id' WHERE pdk_id='$pdk_id'")or die(mysql_error());
			}

		break;

	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>Kategori</b></th>
 						<th><b>Nama</b></th>
 						<th><b>Harga</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON tbl_produk.pdk_ktg=tbl_kategori.ktg_id ORDER BY tbl_kategori.ktg_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$ktg_nama."</td>
 						<td>".$pdk_nama."</td>
 						<td>".$pdk_harga."</td>
 						
 						<td><button class='btn btn-danger' onclick='pdk_hapus(".$pdk_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='pdk_update(".$pdk_id.")'><span class='fa fa-fw fa-edit'></span> Update</button>
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
		$delete=mysql_query("DELETE FROM tbl_produk WHERE pdk_id='$pdk_id'") or die(mysql_error());
		break;

	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON tbl_produk.pdk_ktg=tbl_kategori.ktg_id WHERE tbl_produk.pdk_id='$pdk_id'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $pdk_id."|".$pdk_nama."|".$ktg_id."|".$ktg_nama."|".$pdk_harga."|";
		break;
}
 ?>
