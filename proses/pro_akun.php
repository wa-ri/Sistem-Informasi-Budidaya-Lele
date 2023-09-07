<?php 	
session_start();
include_once("../admin/proses/koneksi.php");
date_default_timezone_set("Asia/Jakarta");
$pro=$_GET['pro'];

@$session=$_SESSION['sess_cus_id'];
@$akn_nama=$_GET['akn_nama'];
@$akn_jk=$_GET['akn_jk'];
@$akn_tempat_lahir=$_GET['akn_tempat_lahir'];
@$akn_tgl_lahir=$_GET['akn_tgl_lahir'];
@$akn_alamat=$_GET['akn_alamat'];
@$akn_tlp=$_GET['akn_tlp'];

switch ($pro) {
	case 'select_up':
		$select_up=mysql_query("SELECT * FROM tbl_customer WHERE cus_id='$session'") or die(mysql_error());
		$array=mysql_fetch_array($select_up);
		$extract=extract($array);
		echo $cus_nama."|".$cus_tempat_lahir."|".$cus_tgl_lahir."|".$cus_tlp."|".$cus_alamat."|".$cus_jk."|";
	break;

	case 'update':
		$qr=mysql_query("UPDATE tbl_customer SET cus_nama='$akn_nama',cus_tempat_lahir='$akn_tempat_lahir',cus_tgl_lahir='$akn_tgl_lahir',cus_tlp='$akn_tlp',cus_alamat='$akn_alamat',cus_jk='$akn_jk' WHERE cus_id='$session'") or die(mysql_error());	
	break;


}


 ?>