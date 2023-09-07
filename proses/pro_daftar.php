<?php 
session_start();
include_once("../admin/proses/koneksi.php");

@$pro=$_GET['pro'];

@$cus_nama=$_GET['cus_nama'];
@$cus_tempat_lahir=$_GET['cus_tempat_lahir'];
@$cus_tgl_lahir=$_GET['cus_tgl_lahir'];
@$cus_tlp=$_GET['cus_tlp'];
@$cus_alamat=$_GET['cus_alamat'];
@$cus_jk=$_GET['cus_jk'];



switch ($pro) {
	case 'insert':
		$insert=mysql_query("INSERT INTO tbl_customer VALUES (NULL, '$cus_nama','$cus_tempat_lahir','$cus_tgl_lahir','$cus_tlp','$cus_alamat','$cus_jk')") or die (mysql_error());
	break;
}



 ?>
