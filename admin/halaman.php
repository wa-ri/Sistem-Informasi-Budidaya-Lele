<?php 
@$cs=$_GET['cs'];
switch ($cs) {

	case 'Master-Pengelola':
		include_once('view/view-master/frm_pengelola.php');
		break;

	case 'Master-Produk':
		include_once('view/view-master/frm_produk.php');
		break;

	case 'Master-Kategori':
		include_once('view/view-master/frm_kategori.php');
		break;


	case 'Master-Lok-Budidaya':
		include_once('view/view-master/frm_budidaya.php');
		break;

	case 'Master-Customer':
		include_once('view/view-master/frm_customer.php');
		break;

	case 'Transaksi-Jadwal':
		include_once('view/view-transaksi/frm_jadwal.php');
		break;

	case 'Transaksi-Artikel':
		include_once('view/view-transaksi/frm_artikel.php');
		break;

	case 'Transaksi-Pemesanan':
		include_once('view/view-transaksi/frm_pemesanan.php');
		break;
	case 'd_pesan':
		include_once('view/view-transaksi/d_pesan.php');
		break;

	case 'lap_trans':
		include_once('view/view-laporan/lap_transaksi.php');
		break;


	default:
		include_once("dashboard.php");
		break;
}

 ?>