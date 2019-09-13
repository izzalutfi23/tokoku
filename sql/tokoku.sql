-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 09:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(10) NOT NULL,
  `id_brg` int(10) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `tgl_keranjang` date NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `detail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama`, `harga`, `foto`, `id_cat`, `detail`) VALUES
(7, 'Lenovo Thinkpad X201 Tablet Pc', '3040000', 'Lenovo_Thinkpad_x201_Tablet_Pc.jpeg', 3, '																																		'),
(8, 'Macbook Pro 13\" I5 Ssd 256gb', '17575000', 'Macbook_Pro_13___i5_SSD_256gb.jpg', 3, ''),
(9, 'Laptop Samsung Np275 Amd Dualcore 14inchi', '2209000', 'Laptop_Samsung_Np275_amd_dualcore_14inchi.jpg', 3, ''),
(10, 'Lenovo E10-30 Dualcore Bytrail Intel N2830 10inchi', '1710000', 'Lenovo_e10_30_dualcore_bytrail_intel_n2830_10inchi.jpg', 3, ''),
(11, 'Hp Elitebook 8770w', '5699100', 'hp_Elitebook_8770w.jpeg', 3, ''),
(12, 'Microsoft Windows 10 Pro 32/64bit (Original)', '166500', 'Microsoft_Windows_10_Pro.png', 3, ''),
(13, 'Microsoft Office 2016 Pro Plus (Original)', '211500', 'Microsoft_Office_2016.png', 3, ''),
(14, 'Peket Mobo + Core I3 New Garansi 1thn', '1147500', 'Peket_Mobo___Core_i3_New_garansi_1thn.jpg', 3, ''),
(15, 'Tas Ransel Leptop + Tempat Laptop', '161100', 'Tas_Ransel_Leptop___Tempat_Laptop.jpg', 3, ''),
(16, 'Poche(Pc) \"Elegant Black\" : 14inch, 15inch - Tas Laptop / ', '256500', '4.JPG', 3, ''),
(17, 'Blazer Brownstone', '185000', 'BROWNSTONE.png', 6, ''),
(18, 'Topi Baseball Import #3#', '80800', 'biru_navy.jpg', 6, ''),
(19, 'Promo Celana Kekinian Chino Pria Grey Old ', '220000', 'CELANA_PENDEK_JEANS_PRIA_BAHAN_DENIM.jpg', 6, ''),
(20, 'Dompet Panjang Pria Dan Wanita Murah Import', '159000', 'Dompet_Panjang_Pria_Dan_Wanita_Murah_Import.jpg', 6, ''),
(21, 'Dompet Kulit Pria Berdiri Import Branded | Braun Buffel 5101 ', '175000', 'image.jpg', 6, ''),
(22, 'Jam Semi Super Pria Suunto Sn-01 Digital', '209000', 'jam_keren_swiss_army_CR7_premium_____rolex_ripcurl_expeditio.png', 6, ''),
(23, 'Jam Tangan Alexander Crhistie 6141 Mc(Original)', '1317500', 'Screenshot_2015-12-07-11-51-45-1.png', 6, ''),
(24, 'Sepatu Boots Murah Meriah', '255000', 'SEPATU_BOOTS_PRIA_SEPATU_KICKERS_SAFETY_UJUNG_BESI_PROYEK_KE.jpg', 6, ''),
(25, 'Adidas Neo Baseline Leather White', '250000', 'SEPATU_SANTAI_PRIA_SEPATU_ADIDAS_MOCDAS_SUEDE.jpg', 6, ''),
(26, 'Tas Clutch / Handbag Pria Keren Import Baru', '340300', 'TS120_Tas_Pria_Slingbag_slempangTas_Gadget_Tas_Tablet_Kulit_.jpg', 6, ''),
(27, 'Hp Prince Pc 118 Unik Langka 4 Sim Card Gsm 2 Tf Sdmicro ', '539500', 'Hp Prince Pc 118 Unik Langka 4 Sim Card Gsm 2 Tf Sdmicro Memory.jpg', 4, ''),
(28, 'Power Bank 10000 Mah Slim', '142500', 'power bank samsung 10000 mah slim.jpg', 4, ''),
(29, 'Power Bank Xiaomi 10400mah', '46800', 'pb._xiaomi_10400.jpg', 4, ''),
(30, 'Buy 1 Get 1 | Power Bank Xiaomi Slim 99000mah', '49500', 'BUY_1_GET_1___Power_Bank_XiaoMi_Slim_99000mAh.jpg', 4, ''),
(31, '3d Diamond Tempered Glass 2 ', '72000', 'IPHONE7PLUSTEMPEREDGLASS3DDIAMOND2in1DEPANBELAKANG_3_scaledj.jpg', 4, ''),
(32, 'Headset Xiaomi Mi Piston Headsfree Earphone', '42.300', 'Headset_Xiaomi_Mi_Piston_Headsfree_Earphone.jpg', 4, ''),
(33, 'Charger Samsung 15w 2a Fast Charging', '31.500', 'image.jpg', 4, ''),
(34, 'Hardcase Carbon Oppo F1s / F1 Hard Case Oppo', '72.000', 'HARDCASE_CARBON_OPPO_F1S___F1_HARD_CASE_OPPO___CARBON_SLIM_A.jpg', 4, ''),
(35, 'Charger Original Xiaomi / Type Mdy-08-Ef Original', '94.500', 'CHARGER_ORIGINAL_XIAOMI___TYPE_MDY_08_EF_ORIGINAL_XIAOMI_MI4.jpg', 4, ''),
(36, 'Standing Case For Iphone ', '63.800', 'image (1).jpg', 4, ''),
(37, 'Obat Penyakit Mata Pil Menyembuhkan Rabun Katarak ', '142.500', 'Obat_Penyakit_Mata_Pil_Menyembuhkan_Rabun_Katarak_Plus_Minus.png', 5, ''),
(38, 'Tusuk Gigi Benang / Dental Floss Toothpick Isi 24', '9.000', 'TUSUK_GIGI_BENANG___DENTAL_FLOSS_TOOTHPICK_ISI_24.jpg', 5, ''),
(39, 'Cuka Apel Alami 500ml', '71.300', 'image.jpg', 5, ''),
(40, 'Minuman Jamu Herbal Pelangsing Slimming Q Green Coffee', '56.400', 'Minuman_Jamu_Herbal_Pelangsing_Slimming_Q_Green_Coffee_.png', 5, ''),
(41, 'Green Coffee Bean Potent 800mg,Green Coffee Hendel', '380.000', 'Green_coffee_bean_potent_800mg_green_coffee_hendel.jpg', 5, ''),
(42, 'Fiforlif Herbal Pelangsing, Diet Sehat, Rampingkan Perut, ', '291.200', 'FIFORLIF_HERBAL_PELANGSING__DIET_SEHAT__RAMPINGKAN_PERUT__TU.jpg', 5, ''),
(43, '2 Botol Obat Gemuk Pria - Penggemuk Badan Herbal - Pil ', '171.000.', '2_BOTOL_OBAT_GEMUK_PRIA___PENGGEMUK_BADAN_HERBAL___PIL_NAFSU.jpg', 5, '																	'),
(44, 'Obat Gemuk Badan Pria/Cowok/Laki-Laki, ', '93.100', 'OBAT_GEMUK_BADAN_PRIA_COWOK_LAKI_LAKI__PIL_SUPLEMENT_VITAMIN.jpg', 5, ''),
(45, 'Obat Pil + Celana Hernia Paket Sembuh Total Dengan Cepat ', '237.500', 'Obat_Pil___Celana_Hernia_Paket_sembuh_Dengan_Cepat_Untuk_Dew.jpg', 5, ''),
(46, 'Obat Pengecil Perut Tercepat', '131.100', 'obat_pengecil_perut_tercepat.jpg', 5, ''),
(47, 'oke', '2500', 'Penguins.jpg', 0, 'pinguin																																																												'),
(52, 'kendil', '5000', 'Chrysanthemum.jpg', 3, '																		Sangat bagus																'),
(53, 'Anggit', '25000', 'Koala.jpg', 6, 'Minus lecet pemakaian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_beli`
--

CREATE TABLE `tb_beli` (
  `id` int(11) NOT NULL,
  `id_brg` int(10) NOT NULL,
  `id_pemesan` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_beli`
--

INSERT INTO `tb_beli` (`id`, `id_brg`, `id_pemesan`, `name`, `email`, `address`, `phone`, `jumlah`, `tanggal`) VALUES
(1, 25, '9d3t7nlvirmp991o77p3r6ktc0', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '0', 1, '2017-01-20'),
(2, 22, '9d3t7nlvirmp991o77p3r6ktc0', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '0', 1, '2017-01-20'),
(3, 23, '9d3t7nlvirmp991o77p3r6ktc0', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '', 1, '2017-01-20'),
(4, 33, '2nl3t6htdo14ournbbdl9vbce1', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-01-20'),
(5, 29, 'ncelc3clja8blsg4i5l9mi1qp2', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-01-20'),
(6, 23, 'jn3rn8gp9l5uvpbbl37g5ttt16', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-01-23'),
(7, 40, 'jn3rn8gp9l5uvpbbl37g5ttt16', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-01-23'),
(8, 25, 'jn3rn8gp9l5uvpbbl37g5ttt16', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-01-23'),
(9, 29, 'qjn6o9e9kpt1s6b48v2h7nucr4', 'Who Iam i', '1@gmail.com', 'Desa Mlagen', '089765765', 1, '2017-04-14'),
(10, 25, '4gvlccd0fbb9rq3jdko9flulk3', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-09-16'),
(11, 22, '4gvlccd0fbb9rq3jdko9flulk3', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-09-16'),
(12, 23, '2n9ki1evj57v97g624crl5t3g5', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-09-26'),
(13, 25, '2n9ki1evj57v97g624crl5t3g5', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-09-26'),
(14, 28, '77fhmt5vh454rfgf7al540f6n1', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-10-16'),
(15, 22, '77fhmt5vh454rfgf7al540f6n1', 'lutfi', 'a@gmail.com', 'mlagen', '089364748', 1, '2017-10-16'),
(16, 32, 'j5emlj0n7ir54n8ee3vsd0vpr0', 'admin', 'admin@gmail.com', 'mlagen', '085726524036', 1, '2017-10-22'),
(17, 31, 'j5emlj0n7ir54n8ee3vsd0vpr0', 'admin', 'admin@gmail.com', 'mlagen', '085726524036', 1, '2017-10-22'),
(18, 24, 'j5emlj0n7ir54n8ee3vsd0vpr0', 'admin', 'admin@gmail.com', 'mlagen', '085726524036', 1, '2017-10-22'),
(19, 11, 'j5emlj0n7ir54n8ee3vsd0vpr0', 'admin', 'admin@gmail.com', 'mlagen', '085726524036', 1, '2017-10-22'),
(20, 23, 'vr6cbh9dadvkalv67s3tc31j37', 'izza', 'izzalutfi045@gmail.com', 'mlagen', '097455456799', 1, '2018-06-21'),
(21, 24, 'vr6cbh9dadvkalv67s3tc31j37', 'izza', 'izzalutfi045@gmail.com', 'mlagen', '097455456799', 1, '2018-06-21'),
(22, 23, 'ancgcdklk7ele3pj47gqip2ij0', 'izza', 'izzalutfi045@gmail.com', 'mlagen', '097455456799', 1, '2018-07-20'),
(23, 22, 'ancgcdklk7ele3pj47gqip2ij0', 'izza', 'izzalutfi045@gmail.com', 'mlagen', '097455456799', 1, '2018-07-20'),
(24, 8, 'ancgcdklk7ele3pj47gqip2ij0', 'izza', 'izzalutfi045@gmail.com', 'mlagen', '097455456799', 1, '2018-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `isi`, `tgl`) VALUES
(16, ' Cara Berbelanja Ditokkoku ', ' JIka anda ingin berbelanja ditokoku.com , pertam anda harus login , nah anda telah bisa membaca artikel yang saya tulis ini maka otomatis anda sudah terdaftar. \r\n\r\nDan Hal pertama yang harus anda lakukan adalah memilih barang yang anda inginkan , dan bisa anda simpan di keranjang milik anda. setelah itu silahkan memalukan pembayaran . dan tunggu sampai maksimal 2 hari barang yang anda pesan akan sampai di rumah anda. ', '2017-01-18'),
(17, ' Telah hadir pengembalian barang', ' Jika anda dikirim barang yang tidak sesuai dengan apa yang anda inginkan. kami telah membuka fitur baru , yaitu pengembalian barang kembali. agar anda bisa mengembalikan barang yang bukan pilihan anda . \r\n selamat mencoba agar anda nyaman. Kami disini melayani anda ', '2017-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_cat` int(10) NOT NULL,
  `nama_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_cat`, `nama_cat`) VALUES
(3, 'Komputer'),
(4, 'Telepon dan Gadged'),
(5, 'Kesehatan dan Kecantikan'),
(6, 'Fhasion'),
(8, 'Olahraga'),
(9, 'Hobi dan koleksi'),
(10, 'Kamera'),
(11, 'Industrial'),
(12, 'Rumah tangga'),
(16, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `typeuser` enum('admin','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telp`, `email`, `username`, `password`, `typeuser`) VALUES
(1, 'admin', 'mlagen', '085726524036', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(21, 'cgjvh', 'cjv', 'cgjvh', 'chjv', 'custom', '8b9035807842a4e4dbe009f3f1478127', 'pelanggan'),
(22, 'lutfi', 'mlagen', '089364748', 'a@gmail.com', 'pelanggan', '7f78f06d2d1262a0a222ca9834b15d9d', 'pelanggan'),
(23, 'iza', 'desa mlagen', '0823823795794', 'izangocokan@gmail.com', 'admin', '127e633f8c5b2a4f867049116b6bc9ea', 'pelanggan'),
(24, 'bagus', 'singocNDI', '082123575162', 'bagusulya17@gmail.com', 'bagusche', 'f2eedaffd864a6e761dd2eeea8793d49', 'pelanggan'),
(25, 'izza', 'mlagen', '097455456799', 'izzalutfi045@gmail.com', 'izza', 'cdb0b6889f4def26f43951b2d5b7a9e3', 'pelanggan'),
(26, 'izza', 'kjhkhkbmnb', '098755675', 'izzalutfi045@gmail.com', 'Izza', '2a6036351d30b8b27eda866b1ec85360', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `tb_beli`
--
ALTER TABLE `tb_beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_beli`
--
ALTER TABLE `tb_beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
