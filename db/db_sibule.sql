-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5220
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_sibule
CREATE DATABASE IF NOT EXISTS `db_sibule` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_sibule`;

-- Dumping structure for table db_sibule.tbl_artikel
CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `atk_id` int(11) NOT NULL AUTO_INCREMENT,
  `png_id` int(11) NOT NULL,
  `atk_judul` varchar(100) DEFAULT NULL,
  `atk_isi` text,
  `atk_gambar` text,
  `atk_tgl` date DEFAULT NULL,
  PRIMARY KEY (`atk_id`),
  KEY `fk_tbl_artikel_tbl_pengelola1_idx` (`png_id`),
  CONSTRAINT `fk_tbl_artikel_tbl_pengelola1` FOREIGN KEY (`png_id`) REFERENCES `tbl_pengelola` (`png_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_artikel: ~3 rows (approximately)
DELETE FROM `tbl_artikel`;
/*!40000 ALTER TABLE `tbl_artikel` DISABLE KEYS */;
INSERT INTO `tbl_artikel` (`atk_id`, `png_id`, `atk_judul`, `atk_isi`, `atk_gambar`, `atk_tgl`) VALUES
	(1, 1, 'CARA-CARA PEMBIBITAN', 'ASASASASASAASASASA', '2.jpg', '2019-05-20'),
	(2, 1, '3 Sistem Budidaya Lele Mutiara', 'Pertanianku â€” Sejak pertama kali diperkenalkan kepada masyarakat Indonesia, lele dumbo menjadi primadona di industri ikan konsumsi. Salah satu varietas yang termasuk lele dumbo unggulan ialah lele mutiara. Ada 3 sistem budidaya lele mutiara yang bisa Anda pilih dan sesuaikan dengan kondisi lingungan serta kantong Anda.Ketiga alternatif sistem budidaya yang bisa digunakan untuk pembesaran lele mutiara di antaranya sistem total akuakultur (TA), sistem akuaponik, dan sistem konvensional. Berikut ini penjelasan singkat sistem budidaya lele mutiara, mengutip buku Lele Mutiara.\r\n\r\nSistem total akuakultur (TA)\r\nSistem ini bermakna penerapan semua unsur yang memengaruhi produktivitas budidaya secara simultan dan sebaik mungkin. Dengan demikian, apabila timbul kendala yang dapat menurunkan produktivitas, bisa diatasi lebih dini. Pada sistem ini, usaha budidaya yang umumnya dikembangkan adalah usaha pembesaran.\r\n\r\nBeberapa hal yang perlu dilakukan dalam menerapkan teknologi TA pada pembesaran lele mutiara meliputi persiapan kolam, persiapan benih, persiapan pakan, manajemen pemeliharaan, dan kontrol harian.\r\n\r\nSistem akuaponik\r\nAkuaponik adalah sistem budidaya ikan dengan tanaman, biasanya tanaman sayur. Sistem ini terbukti hemat lahan dan air dengan produksi ganda, yakni ikan dan sayuran. Secara teknis, akuaponik mampu meningkatkan produksi lele.\r\n\r\nPrinsip sistem akuaponik hampir serupa dengan sistem total akuakultur. Perbedaannya hanya terdapat pada penggunaan tanaman sebagai filter. Penggunaan filter tersebut menjadikan pemakaian probiotik dapat dihlangkan pada sistem akuaponik.\r\n\r\nSistem konvensional\r\nUsaha budidaya lele mutiara yang bisa diaplikasikan pada sistem konvensional adalah pendederan dan pembesaran. Pendederan sendiri terdiri atas tiga tahap. Pendederan pertama dilakukan selama 2â€”3 minggu secara indoor, lalu dilanjutkan pendederan kedua selama 2â€”3 minggu secara outdoor. Pendederan ketiga juga dilakukan selama 2â€”3 minggu. Kemudian tahap berikutnya ialah pembesaran lele mutiara selama 50 hari.', '3-Sistem-Budidaya-Lele-Mutiara-Pilih-yang-Cocok-dengan-Kantong.jpg', '2019-05-21'),
	(3, 1, 'Ini Dia 4 Varietas Benih Lele ', 'Pertanianku â€” Dalam proses budidaya, agar didapat hasil panen yang maksimal, diperlukan benih unggul dan berkualitas. Alokasi biaya untuk pembelian benih ini berkisar 8â€”10% dari total biaya operasional. Porsi biaya benih memang tidak besar, tetapi menentukan hasil panen. Benih unggul dan berkualitas tentunya akan meningkatkan produksi dibanding penggunaan benih kualitas asalan.\r\nUntuk mendapatkan benih unggul dan terjamin kualitasnya, sebenarnya tidak susah. Anda bisa mendapatkannya di Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi atau Balai Benih Ikan (BBI) Cijengkol, Subang. Selain di instansi pemerintah, Anda juga bisa membelinya di para pembenih yang sudah berpengalaman dan tepercaya.\r\n\r\nSalah satu komoditas ikan air tawar yang banyak diburu orang adalah lele. Permintaan lele di pasaran, baik tradisional maupun modern cukup tinggi dan cenderung meningkat. Tidak hanya itu, kehadiran warung-warung makan pecel lele dan rumah makan khusus menjual lele juga menjamur. Sebagai informasi, untuk area Jabodetabek (Jakarta, Bogor, Depok, Tangerang, dan Bekasi) kebutuhan lele konsumsi lebih dari 100 ton per hari. Cukup menggiurkan ya!\r\n\r\nAgar membudidayakan berhasil, tentunya membutuhkan benih unggul dan berkualitas. Ada empat varietas benih lele unggul yang sudah teruji produktivitasnya. Berikut empat varietas yang dimaksud.\r\n\r\n1.Mutiara\r\nVarietas lele mutiara adalah hasil pemuliaan dengan metode seleksi Balai Penelitian Pemuliaan Ikan Sukamandi yang dirilis pada 2015 lalu. Pertumbuhan lele mutiara lebih cepat dan berdaya tahan lebih tinggi dibanding lele lainnya.\r\n\r\n2.Mandalika\r\nLele mandalika adalah hibirida hasil persilangan yang dilakukan oleh Balai Benih Ikan Batu Kumbung (Nusa Tenggara Barat). Varietas mandalika resmi beredar sejak 2014 di NTB, NTT, dan Bali.\r\n\r\n3.Dumbo\r\nLele dumbo yang masuk ke Indonesia pada 1986 ini merupakan hasil persilangan antara C. gariepinus jantan dan C. fuscus betina (asal Taiwan).\r\n\r\n4.Sangkuriang\r\nLele sangkuriang lahir dari serangkaian riset yang dilakukan oleh Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi. Sangkuriang merupakan perbaikan genetik melalui persilangan antara dumbo betina generasi kedua (F2) dan dumbo jantan generasi keenam (F6) yang menghasilkan dumbo jantan (F2-6). Dumbo jantan ini kemudian dikawinkan lagi dengan dumbo betina (F2) sehingga menghasilkan varietas sangkuriang.\r\n\r\nSelain keempat lele tadi, ada pula varietas yang telah beredar di masyarakat tetapi belum teruji kualitasnya secara resmi. Varietas itu adalah masamo, piton, kekar, dan paiton.', 'Ini-Dia-4-Varietas-Benih-Lele-Unggul.jpg', '2019-05-22'),
	(4, 1, 'Berkat Program Minopolitan Pro', 'Pertanianku â€“ Sektor perikanan menjadikan salah satu sumber prekonomian bangsa ini. Seperti ikan lele yang memiliki nilai ekomis yang cukup tinggi. Saat ini telah banyak berkembang teknologi pada budidaya ikan lele guna mendongkrak hasil produksi.\r\nSalah satu program yang mampu mendongkrak produksi lele adalah minapolitan. Mungkin sebagian besar masyarakat masih asing mendengar program minapolitan.\r\n\r\nMinapolitan salah satu program unggulan KKP yang bertujuan meningkatkan kesejahteraan nelayan dengan cara mendongkrak hasil produksi perikanan.\r\n\r\nSalah satu daerah minapolitan lele yang berhasil mengembangkan blue economy ini adalah Kabupaten Demak, Jawa Tengah.\r\n\r\nDirjen Perikanan Budidaya, Kementerian Kelautan dan Perikanan, Slamet Soebjakto, mengungkapkan, konsep minapolitan ini memiliki nilai ekonomis yang lebih efisien. Untuk mengaplikasikan program ini, membutuhkan daun jambu yang biasanya masyarakat Demak gunakan sebagai bahan pakan lele, demikian pula dengan limbah pengasapan.\r\n\r\nSementara itu, air limbah lele yang mengandung banyak lendir digunakan sebagai pupuk organik pohon jambu, pengganti pupuk kimiawi.\r\n\r\nâ€œBudidaya lele ini sangat mudah dikerjakan, teknologinya sederhana, modalnya sedikit, dan bisa mengentaskan kemiskinan. Budidaya lele salah satu penunjang ekonomi kerakyatan,â€ kata Slamet, seperti dilansir dari Kompas.\r\n\r\nMinapolitan jambu-lele-pengasapan di Demak menyerap tak kurang dari 590 tenaga kerja. Dari minapolitan lele, Demak bisa memproduksi tak kurang dari 14.432 ton lele, 150 ton jambu, dan 114 ton olahan lele asap.\r\n\r\nSepanjang tahun lalu, nilai ekonomis dari minapolitan lele mencapai miliaran rupiah, Rp223,2 miliar. Budidaya lele sendiri menghasilkan Rp218 miliar, jambu Rp2,5 miliar, dan olahan lele asap Rp4,3 miliar.\r\n\r\nDemak menjadi satu dari 30 kabupaten/lokasi minapolitan komoditas lele. Hingga 2013 KKP telah memetakan 115 kabupaten/lokasi minapolitan seluruh komoditas perikanan dan kelautan.\r\n\r\nSlamet menuturkan bahwa, prospek budidaya lele sangat menjanjikan. Kebiasaan masyarakat mengonsumsi ikan laut pun semakin bergeser ke konsumsi ikan air tawar, menyusul cuaca buruk yang belakangan terjadi sehingga menurunkan produktivitas perikanan tangkap.', 'Berkat-Program-Minopolitan-Lele-Produksi-Lele-Meningkat.jpg', '2019-05-23');
/*!40000 ALTER TABLE `tbl_artikel` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_customer
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_nama` varchar(20) DEFAULT NULL,
  `cus_tempat_lahir` varchar(25) DEFAULT NULL,
  `cus_tgl_lahir` date DEFAULT NULL,
  `cus_tlp` varchar(13) DEFAULT NULL,
  `cus_alamat` varchar(30) DEFAULT NULL,
  `cus_jk` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_customer: ~8 rows (approximately)
DELETE FROM `tbl_customer`;
/*!40000 ALTER TABLE `tbl_customer` DISABLE KEYS */;
INSERT INTO `tbl_customer` (`cus_id`, `cus_nama`, `cus_tempat_lahir`, `cus_tgl_lahir`, `cus_tlp`, `cus_alamat`, `cus_jk`) VALUES
	(1, 'ADMIN', 'KARAWANG', '1996-01-20', '0210012121', 'CIKAMPEK', 'L'),
	(2, 'ANDRE', 'BALI', '2019-05-24', '123111', 'BALI-BALI', 'P'),
	(3, 'DADAN', 'KARAWANG', '2019-05-24', '12121212', 'KARAWANG-CIKAMPEK', 'L'),
	(4, 'asas', 'asas', '2019-05-24', 'asas', 'asas', 'P'),
	(5, 'aaa', 'aaa', '2019-05-24', 'aaaa', 'aaa', 'P'),
	(6, 'asas', 'asas', '2019-05-24', 'asas', 'asa', 'P'),
	(7, 'asas', 'asas', '2019-05-24', 'asas', 'asas', 'P'),
	(8, 'asas', 'asas', '2019-05-24', 'asas', 'asas', 'L');
/*!40000 ALTER TABLE `tbl_customer` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_jadwal
CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `jdl_id` int(11) NOT NULL AUTO_INCREMENT,
  `png_id` int(11) NOT NULL,
  `bdy_id` int(11) NOT NULL,
  `jdl_tgl` varchar(45) DEFAULT NULL,
  `jdl_status` varchar(7) NOT NULL,
  PRIMARY KEY (`jdl_id`),
  KEY `fk_tbl_jadwal_tbl_pengelola1_idx` (`png_id`),
  KEY `Index 3` (`bdy_id`),
  CONSTRAINT `FK_tbl_jadwal_tbl_tempat_budidaya` FOREIGN KEY (`bdy_id`) REFERENCES `tbl_tempat_budidaya` (`bdy_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_jadwal_tbl_pengelola1` FOREIGN KEY (`png_id`) REFERENCES `tbl_pengelola` (`png_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_jadwal: ~4 rows (approximately)
DELETE FROM `tbl_jadwal`;
/*!40000 ALTER TABLE `tbl_jadwal` DISABLE KEYS */;
INSERT INTO `tbl_jadwal` (`jdl_id`, `png_id`, `bdy_id`, `jdl_tgl`, `jdl_status`) VALUES
	(3, 1, 3, '2019-05-31', 'Selesai'),
	(4, 1, 2, '2019-06-30', 'Selesai'),
	(5, 1, 4, '2019-07-31', 'Selesai'),
	(6, 1, 5, '2019-08-31', '');
/*!40000 ALTER TABLE `tbl_jadwal` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `ktg_id` int(11) NOT NULL AUTO_INCREMENT,
  `ktg_nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ktg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_kategori: ~7 rows (approximately)
DELETE FROM `tbl_kategori`;
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` (`ktg_id`, `ktg_nama`) VALUES
	(1, 'Pedaging Besar'),
	(2, 'Pedaging Sedang'),
	(3, 'Pedaging Kecil'),
	(4, 'Makanan Lele'),
	(5, 'Vitamin Lele'),
	(6, 'Bibit Lele'),
	(7, 'Lele Hias');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_pengelola
CREATE TABLE IF NOT EXISTS `tbl_pengelola` (
  `png_id` int(11) NOT NULL AUTO_INCREMENT,
  `png_nama` varchar(20) DEFAULT NULL,
  `png_tempat_lahir` varchar(25) DEFAULT NULL,
  `png_tgl_lahir` date DEFAULT NULL,
  `png_tlp` varchar(13) DEFAULT NULL,
  `png_alamat` varchar(30) DEFAULT NULL,
  `png_level` varchar(1) DEFAULT NULL,
  `png_jk` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`png_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_pengelola: ~2 rows (approximately)
DELETE FROM `tbl_pengelola`;
/*!40000 ALTER TABLE `tbl_pengelola` DISABLE KEYS */;
INSERT INTO `tbl_pengelola` (`png_id`, `png_nama`, `png_tempat_lahir`, `png_tgl_lahir`, `png_tlp`, `png_alamat`, `png_level`, `png_jk`) VALUES
	(1, 'Admin', 'Purwakarta', '1996-01-20', '021000', 'Purwakarta-Bungursari', '1', 'P'),
	(3, 'JUJU', 'Purwakarta', '1997-02-04', '08976654321', 'Jalan Cinta karya ,RT 12 RW 05', '2', 'P'),
	(4, 'DADAN WIJAYA', 'PURWAKARTA', '1994-02-23', '08123445677', 'ndonesia, Purwakarta, Purwakar', '2', 'L');
/*!40000 ALTER TABLE `tbl_pengelola` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_pesan
CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `psn_id` varchar(10) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `psn_tgl` date DEFAULT NULL,
  `psn_total` double DEFAULT NULL,
  `psn_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`psn_id`),
  KEY `fk_tbl_pesan_tbl_customer_idx` (`cus_id`),
  CONSTRAINT `fk_tbl_pesan_tbl_customer` FOREIGN KEY (`cus_id`) REFERENCES `tbl_customer` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_pesan: ~7 rows (approximately)
DELETE FROM `tbl_pesan`;
/*!40000 ALTER TABLE `tbl_pesan` DISABLE KEYS */;
INSERT INTO `tbl_pesan` (`psn_id`, `cus_id`, `psn_tgl`, `psn_total`, `psn_status`) VALUES
	('PSN1905001', 1, '2019-05-28', 28000, 'Konfirmasi'),
	('PSN1905002', 3, '2019-05-28', 40000, 'Konfirmasi'),
	('PSN1905003', 3, '2019-05-28', 25000, 'Konfirmasi'),
	('PSN1905004', 1, '2019-05-30', 105000, ''),
	('PSN1905005', 1, '2019-05-31', 70000, ''),
	('PSN1906001', 1, '2019-06-03', 50000, ''),
	('PSN1906002', 1, '2019-06-15', 80000, 'Konfirmasi');
/*!40000 ALTER TABLE `tbl_pesan` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_pesan_detail
CREATE TABLE IF NOT EXISTS `tbl_pesan_detail` (
  `psn_id` varchar(10) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `pdk_id` int(11) DEFAULT NULL,
  `psn_jumlah` int(11) DEFAULT NULL,
  `psn_subtotal` double DEFAULT NULL,
  KEY `fk_tbl_pesan_detail_tbl_pesan1_idx` (`psn_id`),
  KEY `fk_tbl_pesan_detail_tbl_produk1_idx` (`pdk_id`),
  KEY `Index 3` (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_pesan_detail: ~15 rows (approximately)
DELETE FROM `tbl_pesan_detail`;
/*!40000 ALTER TABLE `tbl_pesan_detail` DISABLE KEYS */;
INSERT INTO `tbl_pesan_detail` (`psn_id`, `cus_id`, `pdk_id`, `psn_jumlah`, `psn_subtotal`) VALUES
	('PSN1905001', 1, 19, 1, 25000),
	('PSN1905001', 1, 29, 6, 3000),
	('PSN1905002', 3, 32, 2, 40000),
	('PSN1905003', 3, 20, 1, 25000),
	('PSN1905004', 1, 25, 1, 45000),
	('PSN1905004', 1, 21, 1, 30000),
	('PSN1905004', 1, 26, 1, 30000),
	('PSN1905005', 1, 20, 1, 25000),
	('PSN1905005', 1, 32, 2, 40000),
	('PSN1905005', 1, 30, 10, 5000),
	('PSN1906001', 1, 19, 2, 50000),
	('PSN1906002', 0, 21, 1, 30000),
	('PSN1906002', 1, 19, 2, 50000),
	('PSN1906002', 1, 21, 1, 30000),
	('PSN1906003', 0, 20, 1, 25000);
/*!40000 ALTER TABLE `tbl_pesan_detail` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_produk
CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `pdk_id` int(11) NOT NULL AUTO_INCREMENT,
  `pdk_ktg` int(11) DEFAULT NULL,
  `pdk_nama` varchar(100) DEFAULT NULL,
  `pdk_harga` double DEFAULT NULL,
  `pdk_img` text,
  PRIMARY KEY (`pdk_id`),
  KEY `Index 2` (`pdk_ktg`),
  CONSTRAINT `FK_tbl_produk_tbl_kategori` FOREIGN KEY (`pdk_ktg`) REFERENCES `tbl_kategori` (`ktg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_produk: ~14 rows (approximately)
DELETE FROM `tbl_produk`;
/*!40000 ALTER TABLE `tbl_produk` DISABLE KEYS */;
INSERT INTO `tbl_produk` (`pdk_id`, `pdk_ktg`, `pdk_nama`, `pdk_harga`, `pdk_img`) VALUES
	(19, 1, 'Ikan Lele Sangkuriang /kg', 25000, 'sangkuriang.jpg'),
	(20, 1, 'Ikan Lele Lokal /kg', 25000, 'lokal.jpg'),
	(21, 1, 'Lele dumbo /kg', 30000, 'dumbo2.jpg'),
	(22, 1, 'Lele masamo /kg', 35000, 'masamo.jpg'),
	(23, 1, 'Ikan Lele Phyton /kg', 50000, 'phyton.jpg'),
	(24, 7, 'Ikan Lele Albino', 800000, 'albino.jpg'),
	(25, 2, 'Ikan Lele Mutiara /kg', 45000, 'mutiara.jpg'),
	(26, 5, 'Amino Liquid /pcs', 30000, 'amino.jpg'),
	(27, 5, 'Aqua Enzym', 25000, 'Aqua.jpg'),
	(28, 5, 'Aqua Septik /pcs', 15000, 'septik.jpg'),
	(29, 6, 'Bibit Sangkuriang /ekor', 500, 'b_sangkuriang.jpg'),
	(30, 6, 'Bibit  Lele Dumbo /ekor', 500, 'b_dumbo.jpg'),
	(31, 4, 'Preo 130 /kg', 10500, 'preo130.jpg'),
	(32, 4, 'Prima LDP /kg', 20000, 'prima.jpg');
/*!40000 ALTER TABLE `tbl_produk` ENABLE KEYS */;

-- Dumping structure for table db_sibule.tbl_tempat_budidaya
CREATE TABLE IF NOT EXISTS `tbl_tempat_budidaya` (
  `bdy_id` int(11) NOT NULL AUTO_INCREMENT,
  `bdy_pemilik` varchar(20) DEFAULT NULL,
  `bdy_alamat` varchar(30) DEFAULT NULL,
  `bdy_tlp` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`bdy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sibule.tbl_tempat_budidaya: ~6 rows (approximately)
DELETE FROM `tbl_tempat_budidaya`;
/*!40000 ALTER TABLE `tbl_tempat_budidaya` DISABLE KEYS */;
INSERT INTO `tbl_tempat_budidaya` (`bdy_id`, `bdy_pemilik`, `bdy_alamat`, `bdy_tlp`) VALUES
	(2, 'Ade Samsudin ', 'Kp. Cintakarya 13/05 Desa Ciko', '087879695022'),
	(3, 'ANDRE', 'Indonesia, 41117, Purwakarta, ', '0212020111'),
	(4, 'GANI', 'jl cigalem purwakarta Purwakar', '022310021'),
	(5, 'DANUS', 'Kp. Tegaljunti Rt 1 Rw 4 Tega ', '02345776111'),
	(6, 'DINA', 'Indonesia, 41118, Purwakarta, ', '081344561212'),
	(7, 'SINTA', 'JL. RAYA CIKOPO 69 Purwakarta', '02100202011');
/*!40000 ALTER TABLE `tbl_tempat_budidaya` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
