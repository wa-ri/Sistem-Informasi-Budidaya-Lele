<?php 
session_start();
include_once("koneksi.php");
date_default_timezone_set("asia/jakarta");
@$date=date('Y-m-d');
@$sess=$_SESSION['sess_adm_id'];


@$atk_id=$_POST['atk_id'];
@$atk_judul=$_POST['atk_judul'];
@$atk_isi=$_POST['atk_isi'];
@$atk_gambar_name=$_FILES['atk_gambar']['name'];
@$atk_gambar_tmp=$_FILES['atk_gambar']['tmp_name'];

	mysql_query("INSERT INTO tbl_artikel VALUES(NULL,'$sess','$atk_judul','$atk_isi','$atk_gambar_name','$date')")or die(mysql_error());
move_uploaded_file($atk_gambar_tmp, "../images/upload/".$atk_gambar_name);


			
 ?>
