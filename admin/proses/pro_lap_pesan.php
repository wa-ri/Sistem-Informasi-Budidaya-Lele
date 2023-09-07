<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Laporan Pembelian|Puriasih </title>
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.png">
	<style>
		.content{
			margin-top: 100px;
			/*border: 1px solid black;*/
			width: 90%;
			margin-left: 5%;
		}
		.batas{
			margin-bottom: 100px;
		}

		.colom{
			border: 1px solid black;
		}
		.center{
			text-align: left;
		}
		.right{
			text-align: right;
		}
		.garis{
			border:0px;
			border-top: 3px double #8c8c8c;
		}
		.warna{
			background-color:#2EE615;
		}

		.warna2{
			background-color:#FF3232;
			border-radius: 5px;
		}
		.padding{
			letter-spacing: 5px;
		}

		.txt{
			color: white;
		}
		.view{
			border: 1px;
			background-color: #D6D5D5;
			height: auto;
			box-shadow: 10px 10px;
			border-radius: 20px;
		}
		.tebal{
			font-family: "Times New Roman", Times, serif;
		}
		.ss{
			text-align: center;
		}

		.colom>tr{
			border: 1px solid red;
		}

	</style>
</head>
<body>
	<?php 
		include_once("koneksi.php");

		date_default_timezone_set("asia/jakarta");
		$tgl=date('Y-m-d');

		@$lap_bl_p1=$_GET['lap_bl_p1'];
		@$lap_bl_p2=$_GET['lap_bl_p2'];


		
			$qry=mysql_query("SELECT * FROM tbl_pesan 
				INNER JOIN tbl_pesan_detail ON tbl_pesan.psn_id=tbl_pesan_detail.psn_id
				INNER JOIN tbl_produk ON tbl_produk.pdk_id=tbl_pesan_detail.pdk_id
				WHERE tbl_pesan.psn_tgl BETWEEN '$lap_bl_p1' AND '$lap_bl_p2' ORDER BY tbl_pesan.psn_id ASC ")or die(mysql_error());



	 ?>
	
	 <table width="98%" style="margin-left: 10px;font-size: 10pt" class="colom">
		<tr>
			<td colspan="13">Cetak: <?php echo $tgl; ?></td>
		</tr>
		<tr>
			<td colspan="13"> <hr class="garis" /></td>
		</tr>
		<tr>
			<td colspan="13" style="text-align: center" ><b>LAPORAN Pemesanan</b></td>
		</tr>
		<tr>
			<td colspan="13"><b>Periode: <?php echo $lap_bl_p1;  ?> s/d <?php echo $lap_bl_p2;  ?>
				</b></td>
		</tr>
		<tr>
			<td colspan="13"> <hr class="garis" /></td>
		</tr>
	 	<tr>
	 		<td class="center colom warna">No </td>
	 		<td class="center colom warna">No Faktur</td>
	 		<td class="center colom warna">Tanggal Pesan</td>
	 		
	 		<td class="center colom warna">Nama Product</td>
	 		<td class="center colom warna">Harga Beli</td>
	 		<td class="center colom warna">Jumlah Beli</td>
	 		<td class="center colom warna">Subtotal</td>
	 		
	 	</tr>	
	 	<?php 
	 		$no=1;
	 		$st=0;
	 		while ($ary=mysql_fetch_array($qry)){
	 			extract($ary);

	 	?>
	 			<tr>
	 				<td><?php echo $no; ?></td>
	 				<td><?php echo $psn_id; ?></td>
	 				<td><?php echo $psn_tgl; ?></td>
	 				<td><?php echo $pdk_nama; ?></td>
	 				
	 				<td><?php echo "Rp.".number_format($pdk_harga,0,',','.'); ?></td>
	 				<td><?php echo $psn_jumlah; ?></td>
	 				<td><?php echo "Rp.".number_format($psn_subtotal,0,',','.') ; ?></td>
	 			</tr>
	 	<?php
	 		$st=$st+$psn_subtotal;

	 		    $no++;
	 		}

	 	 ?>	

	 	<tr>
	 		<td colspan="6" class="ss"> <h3><b>Total</b></h3></td>
	 		<td><h3><b><?php echo "Rp.".number_format($st,0,',','.'); ?></b></h3></td>
	 		
	 	</tr>
		
	 </table>
</body>
</html>