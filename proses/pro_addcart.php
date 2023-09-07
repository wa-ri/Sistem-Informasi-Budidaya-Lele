<?php 
session_start();
include_once("../admin/proses/koneksi.php");
date_default_timezone_set("Asia/Jakarta");

// header
$date= date('Y-m-d'); //tgl pembanding

@$pro=$_GET['pro'];

@$pdk_id=$_GET['pdk_id'];
@$jumlah=$_GET['jumlah'];
@$no_cart=$_GET['no_cart'];
@$harga=$_GET['harga'];

@$kal=$jumlah*$harga;

@$session=$_SESSION['sess_cus_id'];



switch ($pro) {
	case 'insert':
		$insert=mysql_query("INSERT INTO tbl_pesan_detail VALUES ('$no_cart', '$session', '$pdk_id','$jumlah','$kal')") or die (mysql_error());
	break;

	case 'faktur':
		$query=mysql_query("SELECT MAX(psn_id) as faktur FROM tbl_pesan") or die(mysql_error());
		$array=mysql_fetch_array($query);
		// echo $array['faktur'];
		$hari=substr($array['faktur'],3,4); // 1904 tahun bullan PSN1905001
		// echo "-HARI=".$hari;
		$no=(int)substr($array['faktur'],7,3); //001 no faktur
		// echo "-NOMOR=".$no;
 		$tgl= date('ym'); //tgl pembanding
 		
 		if($tgl===$hari){
 			$tambah=$no+1;
 			if(strlen($tambah)==1){
 				$fak="PSN".$hari."00".$tambah;
 			}else if(strlen($tambah)==2){
 				$fak="PSN".$hari."0".$tambah;
 			}else{
 				$fak="PSN".$hari.$tambah;
 			}
 		}else{
 			$fak="PSN".$tgl."001";
 		}

 		echo $fak;

 		// echo "/".$date;
 		// // echo "/".$hari;

	break;

	case 'select':
		echo"
 			<table id='stn_tabel' class='display hov' width='100%'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th> 						
 						<th><b>product</b></th>
 						<th><b>Price</b></th>
 						<th><b>Qty</b></th>
 						<th><b>Subtotal</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM tbl_pesan_detail
								LEFT JOIN tbl_pesan ON tbl_pesan_detail.psn_id=tbl_pesan.psn_id 
								INNER JOIN tbl_produk ON tbl_pesan_detail.pdk_id=tbl_produk.pdk_id
								WHERE tbl_pesan_detail.psn_id='PSN1905001' AND tbl_pesan_detail.cus_id='1' ")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$pdk_nama."</td>
 						<td>".$pdk_harga."</td>
 						<td>".$psn_jumlah."</td>
 						<td>".$psn_subtotal."</td>
 						
 						<td><button class='btn btn-danger' onclick='psn_hapus(".$pdk_id.")'><span class='fa fa-fw fa-close'></span> Delete</button>
							
 						</td>
 						</tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 		case 'delete':
		$delete=mysql_query("DELETE FROM tbl_pesan_detail WHERE psn_id='$no_cart' AND cus_id='$session' AND pdk_id='$pdk_id'") or die(mysql_error());
		break;
}



 ?>
