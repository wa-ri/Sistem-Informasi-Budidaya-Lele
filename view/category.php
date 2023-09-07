
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Kategori Produk</h2>
					<div class="page_link">
						<a href="#">Beranda</a>
						<a href="#">Kategori</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Category Product Area =================-->
	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="product_top_bar">
						<!-- <div class="left_dorp">
							<select class="sorting">
								<option value="1">Default sorting</option>
								<option value="2">Default sorting 01</option>
								<option value="4">Default sorting 02</option>
							</select>
							<select class="show">
								<option value="1">Show 12</option>
								<option value="2">Show 14</option>
								<option value="4">Show 16</option>
							</select>
						</div> -->
						<!-- <div class="right_page ml-auto">
							<nav class="cat_page" aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item blank">
										<a class="page-link" href="#">...</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">6</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div> -->
					</div>
					<div class="latest_product_inner row">
					<?php 
						include_once("admin/proses/koneksi.php");
						@$ktg_id=$_GET['ktg_id'];
						// @$ktg_id=NULL;
						if(empty($ktg_id)){
							$qw2=mysql_query("SELECT * FROM tbl_produk 
							INNER JOIN tbl_kategori ON tbl_produk.pdk_ktg=tbl_kategori.ktg_id ORDER BY tbl_produk.pdk_id ASC")or die (mysql_error());
							
						}else{
							$qw2=mysql_query("SELECT * FROM tbl_produk 
								INNER JOIN tbl_kategori ON tbl_produk.pdk_ktg=tbl_kategori.ktg_id WHERE tbl_kategori.ktg_id='$ktg_id' ORDER BY tbl_produk.pdk_id ASC")or die (mysql_error());
						 	
						}
						
						while ($array2=mysql_fetch_array($qw2)) {
							extract($array2);
						

					?>

					
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="admin/images/product/<?php echo $pdk_img ?>" alt="" style="width: 50%;height: 100px">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4><?php echo $pdk_nama; ?></h4>
								</a>
								<h5><?php echo "Rp.".number_format($pdk_harga,0,',','.') ; ?></h5>
								<a href="?cs=single-product&pdk_id=<?php echo $pdk_id; ?>"><button class="btn-primary">Detail Product</button></a>
							</div>
						</div>



					<?php
															    
						}

					?>


					
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-2.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
									<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
										<a href="#">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									<h4>Long Sleeve TShirt</h4>
								</a>
								<h5>$150.00</h5>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-3">
					<div class="left_sidebar_area">
						<aside class="left_widgets cat_widgets">
							<div class="l_w_title">
								<h3>Daftar Kategori</h3>
							</div>
							<div class="widgets_inner">
								<ul class="list">

									<?php 
										include_once("admin/proses/koneksi.php");
										$qw=mysql_query("SELECT * FROM tbl_kategori ORDER BY ktg_id ASC")or die (
											mysql_error());
										while ($array=mysql_fetch_array($qw)) {

											extract($array);

											echo "<li><a href='".$ktg_id."' class='opt'>".$ktg_nama."</a></li>";
										    
										}

									 ?>
						
								</ul>
							</div>
						</aside>
						<!-- <aside class="left_widgets p_filter_widgets">
							<div class="l_w_title">
								<h3>Product Filters</h3>
							</div>
							<div class="widgets_inner">
								<h4>Brand</h4>
								<ul class="list">
									<li>
										<a href="#">Apple</a>
									</li>
									<li>
										<a href="#">Asus</a>
									</li>
									<li class="active">
										<a href="#">Gionee</a>
									</li>
									<li>
										<a href="#">Micromax</a>
									</li>
									<li>
										<a href="#">Samsung</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Color</h4>
								<ul class="list">
									<li>
										<a href="#">Black</a>
									</li>
									<li>
										<a href="#">Black Leather</a>
									</li>
									<li class="active">
										<a href="#">Black with red</a>
									</li>
									<li>
										<a href="#">Gold</a>
									</li>
									<li>
										<a href="#">Spacegrey</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Price</h4>
								<div class="range_item">
									<div id="slider-range"></div>
									<div class="row m0">
										<label for="amount">Price : </label>
										<input type="text" id="amount" readonly>
									</div>
								</div>
							</div>
						</aside> -->
					</div>
				</div>
			</div>
<!-- 
			<div class="row">
				<nav class="cat_page mx-auto" aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">01</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">02</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">03</a>
						</li>
						<li class="page-item blank">
							<a class="page-link" href="#">...</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">09</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div> -->
		</div>
	</section>
	<!--================End Category Product Area =================-->

	