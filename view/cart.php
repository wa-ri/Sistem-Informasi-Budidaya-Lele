
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>List Keranjang</h2>
					<div class="page_link">
						<a href="#">Beranda</a>
						<a href="#">Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">
						<div id="psn_view"></div>
					<table class="table">
						<thead>
							<tr>
								<th><b>No.</b></th> 						
		 						<th><b>product</b></th>
		 						<th><b>Price</b></th>
		 						<th><b>Qty</b></th>
		 						<th><b>Subtotal</b></th>
		 						<th><b>Aksi</b></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								@session_start();
								include_once("admin/proses/koneksi.php");
								@$sess=$_SESSION['sess_cus_id'];
								@$no_cart=$_GET['no_cart'];
								$no=1;
					 			$query=mysql_query("SELECT * FROM tbl_pesan_detail
													LEFT JOIN tbl_pesan ON tbl_pesan_detail.psn_id=tbl_pesan.psn_id 
													INNER JOIN tbl_produk ON tbl_pesan_detail.pdk_id=tbl_produk.pdk_id
													WHERE tbl_pesan_detail.psn_id='$no_cart' AND tbl_pesan_detail.cus_id='$sess' ")or die(mysql_error());

					 			while($array=mysql_fetch_array($query)){
 								extract($array);
							 ?>
									<tr>
									<td><?php echo $no; ?></td>
								<td>
									<div class="media">
										<div class="d-flex">
											<img src="admin/images/product/<?php echo $pdk_img ?>" alt="" style="width: 100px;height: 50px">
										</div>
										<div class="media-body">
											<p><?php echo $pdk_nama; ?></p>
										</div>
									</div>
								</td>
								<td>
									<h5><?php echo "Rp.".number_format($pdk_harga,0,',','.') ?></h5>
								</td>
								<td>
									<div class="product_count">

										<p><?php echo $psn_jumlah; ?></p>
										
									</div>
								</td>
								<td>
									<h5><?php echo "Rp.".number_format($psn_subtotal,0,',','.'); ?></h5>
								</td>

								<td><button class='btn btn-danger' onclick='psn_hapus(<?php echo $pdk_id;  ?>)'><span class='fa fa-fw fa-close'></span> Delete</button>
							
 						</td>
							
 						</td>

							</tr>




							 <?php


							 		$no++;
 								}
							 ?>




							


							<!-- =============== -->

							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="?cs=category">Lanjutkan Belanja</a>
										<a class="main_btn" href="#" id="checkout">Selesai Belanja</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->

	