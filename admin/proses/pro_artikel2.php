<?php 
session_start();
include_once("koneksi.php");
date_default_timezone_set("asia/jakarta");
@$date=date('Y-m-d');
@$sess=$_SESSION['sess_adm_id'];


@$atk_id=$_GET['atk_id'];
@$atk_judul=$_GET['atk_judul'];
@$atk_isi=$_GET['atk_isi'];
@$atk_gambar_name=$_FILES['atk_gambar']['name'];
@$atk_gambar_tmp=$_FILES['atk_gambar']['tmp_name'];


// =======================swicth

@$pro=$_GET['pro'];

switch ($pro) {
	case 'select':
		echo"
			<hr/><br/>
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>Tanggal Artikel</b></th>
 						<th><b>Judul Artikel</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_artikel ORDER BY atk_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$atk_tgl."</td>
 						<td>".$atk_judul."</td>
 						
 						<td><button class='btn btn-danger' onclick='atk_hapus(".$atk_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							<button class='btn btn-primary' onclick='atk_update(".$atk_id.")'><span class='fa fa-fw fa-edit'></span> Update Status</button>
 						</td>
 						</tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";


 			echo "<script>
			 	$(document).ready(function(){
			 		$('#stn_tabel').DataTable({
			 			'ordering':false,
			 			'scrollY':true
			 		});
			 	});
			 </script>";
 		break;
}

			
 ?>
