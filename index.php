<?php 
	session_start();

 ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SIBULE</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="vendors/datatables/media/css/dataTables.jqueryui.min.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Telpon: 012 44 5698 7456 896</p>
					<input type="text" id="sess_id" value="<?php echo @$_SESSION['sess_cus_id']; ?>" hidden="true"><input type="text" id="no_cart" class="no_cart" hidden="true">
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="?cs=registration">
								Masuk/Daftar
							</a>
						</li>
						<li>
							<a href="?cs=akun" class="akun not_next">
								Profil
							</a>
						</li>
						<!-- <li>
							<a href="?cs=contact">
								Contact Us
							</a>
						</li> -->
						<li>
							<a href="proses/pro_logout.php" class="valid" >
								Keluar
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="?cs=index">
						<img src="img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="?cs=home">Beranda</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="?cs=category">Kategori Produk</a>
												<li class="nav-item">
													<!-- <a class="nav-link" href="?cs=single-product">Product Details</a> -->
													<li class="nav-item">
														<!-- <a class="nav-link" href="?cs=checkout">Product Checkout</a> -->
														<li class="nav-item">
															<a class="nav-link not_next" id="cart" href="?cs=shop">List Pembelian</a>
														</li>
														<li class="nav-item">
															<!-- <a class="nav-link" href="?cs=confirmation">Confirmation</a> -->
														</li>
										</ul>
										</li>
										<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artikel</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a class="nav-link" href="?cs=blog">Artikel</a>
												</li>
												<!-- <li class="nav-item">
													<a class="nav-link" href="?cs=single-blog">Blog Details</a>
												</li> -->
											</ul>
										</li>
										<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Halaman</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a class="nav-link" href="?cs=index">Form Login</a>
													<li class="nav-item">
														<a class="nav-link" href="?cs=panen">Daftar Panen</a>
														<li class="nav-item">
															<!-- <a class="nav-link" href="?cs=elements">Elements</a> -->
														</li>
											</ul>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="?cs=contact">Kontak</a>
											</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<!-- <li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li> -->

									<hr>

									<li class="nav-item">
										<a href="?cs=akun" class="icons not_next">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="?cs=cart" class="icons cart not_next">
											<i class="lnr lnr lnr-cart" id="belanja"></i> 
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<?php include_once('halaman.php'); ?>

	<!--========================= gambar berjalan========= -->
	<div class="marquee">
		<marquee behavior="" direction="">
		<?php 
			include_once("admin/proses/koneksi.php"); 
			$m=mysql_query("SELECT * FROM tbl_produk 
							INNER JOIN tbl_kategori ON tbl_produk.pdk_ktg=tbl_kategori.ktg_id ORDER BY tbl_produk.pdk_id ASC")or die (mysql_error());
			while ($array2=mysql_fetch_array($m)) {
							extract($array2);

		?>

			<img class="img-fluid" src="admin/images/product/<?php echo $pdk_img ?>" alt="" style="width: 10%;height: 70px">


		<?php 
			}
		 ?>

		 </marquee>
	</div>



	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Info</h6>
						<p>SIBULE adalah sebuah platform berbasi web untuk sarana penjualan dan sumber informasi mengenai lele.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Email Berlangganan</h6>
						<p>Tetap update dengan produk-produk terbaru</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li>
								<img src="img/instagram/Image-01.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-02.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-03.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-04.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-05.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-06.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-07.jpg" alt="">
							</li>
							<li>
								<img src="img/instagram/Image-08.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Ikuti </h6>
						<p>Sosial Media</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<i class="fa fa-heart-o" aria-hidden="true"></i> by SIBULE|| Sistem Informasi Budaya Lele
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>
	<!-- build js -->
	<script src="js/jsfront.js"></script>
	<!-- bootstrap -->
	<script src="vendors/datatables/media/js/jquery.dataTables.min.js"></script>

</body>

</html>