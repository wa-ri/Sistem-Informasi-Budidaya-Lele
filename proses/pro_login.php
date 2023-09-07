<?php 
session_start();
include_once("../admin/proses/koneksi.php");



@$lgn_nama=$_GET['lgn_nama'];
@$lgn_pass=$_GET['lgn_pass'];


$login=mysql_query("SELECT * FROM tbl_customer WHERE cus_nama='$lgn_nama' AND cus_tgl_lahir='$lgn_pass'")or die(mysql_error());
	// $array=mysql_fetch_array($login);
	if(mysql_num_rows($login)>0){
		$array=mysql_fetch_array($login);

		$_SESSION['sess_cus_id']=$array['cus_id'];

		$_SESSION['sess_cus_user']=$array['cus_nama'];
	}else{
		echo"Maaf User Tidak Ditemukan";
		// echo $lgn_nama."|".$lgn_pass;
	}




 ?>
