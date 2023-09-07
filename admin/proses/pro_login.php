<?php 
	session_start();
	include_once("koneksi.php");
	$lgn_user=$_POST['lgn_user'];
	$lgn_pass=$_POST['lgn_pass'];
	$login=mysql_query("SELECT * FROM tbl_pengelola WHERE png_nama='$lgn_user' AND png_tgl_lahir='$lgn_pass'")or die(mysql_error());
	// $array=mysql_fetch_array($login);
	if(mysql_num_rows($login)>0){
		$array=mysql_fetch_array($login);

		$_SESSION['sess_adm_id']=$array['png_id'];
		$_SESSION['sess_adm_status']=$array['png_level'];
		$_SESSION['sess_adm_user']=$array['png_nama'];
	}else{
		echo"Maaf User Tidak Ditemukan";
		echo $lgn_user."|".$lgn_pass;
	}
	
 ?>