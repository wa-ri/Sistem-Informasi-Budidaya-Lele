<?php 
session_start();
include_once("../admin/proses/koneksi.php");
date_default_timezone_set("Asia/Jakarta");

// header
$date= date('Y-m-d'); //tgl pembanding
@$pro=$_GET['pro'];


@$no_cart=$_GET['no_cart'];
@$session=$_SESSION['sess_cus_id'];



switch ($pro) {
	case 'insert':
		$qa=mysql_query("SELECT SUM(psn_subtotal) as total FROM tbl_pesan_detail 
						WHERE psn_id='$no_cart' AND cus_id='$session'") or die (mysql_error());
		$arra=mysql_fetch_array($qa) or die (mysql_error());
		extract($arra);

		// echo $arra['total'];
		if(!empty($total)){
			$insert=mysql_query("INSERT INTO tbl_pesan VALUES ('$no_cart', '$session', '$date','$total','')") or die (mysql_error());
		}

		
	break;

	case 'show_keranjang':
		$qa=mysql_query("SELECT SUM(psn_subtotal) as total FROM tbl_pesan_detail 
						WHERE psn_id='$no_cart' AND cus_id='$session'") or die (mysql_error());
		$arra=mysql_fetch_array($qa) or die (mysql_error());
		extract($arra);
		echo $total;
		
	break;

}



 ?>
