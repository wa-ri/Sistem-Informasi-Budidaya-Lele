<?php 
include_once("proses/koneksi.php");
 ?>
<div id="v_dbel" style='margin: 10%'>
<?php
echo"
			<hr/><br/>
 			<table id='stn_tabel' class='tb display hov' width='100%' border='1'> 
 				<thead>
 					<tr align='left'>
 						<th><b>No.</b></th>
 						<th><b>No Transaksi</b></th>
 						<th><b>Product</b></th>
 						<th><b>Harga</b></th>
 						<th><b>Jumlah</b></th>
 						<th><b>Subtotal</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			
			
			@$no_cart=$_GET['no_cart'];
	 		$query=mysql_query("SELECT * FROM tbl_pesan 
								INNER JOIN tbl_pesan_detail ON tbl_pesan.psn_id=tbl_pesan_detail.psn_id 
								INNER JOIN tbl_produk ON tbl_produk.pdk_id=tbl_pesan_detail.pdk_id
								WHERE tbl_pesan_detail.psn_id='$no_cart'")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
	 						<td>".$no."</td>
	 						<td>".$psn_id."</td>
	 						<td>".$pdk_nama."</td>
	 						<td>Rp.".number_format($pdk_harga,0,',','.')."</td>
	 						<td>".$psn_jumlah."</td>
	 						<td>Rp.".number_format($psn_subtotal,0,',','.')."</td>
	 						
 						</tr>";

 						@$tot=@$tot+$psn_subtotal;
 					$no++;
 				}

 			echo "<tr><td colspan='5'>Total</td><td><b>Rp.".number_format(@$tot,0,',','.')."</b></td></tr>";
 					
 			echo"</tbody>";
 			echo"</table>";
?>

</div>

 <script>
			 	$(document).ready(function(){
			 		$('.tb').DataTable({
			 			'ordering':false,
			 			'scrollY':true
			 		});
			 	});
			 </script>