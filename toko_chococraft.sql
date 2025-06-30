-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 06:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_chococraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `kode_booking` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `konfirmasi_pembayaran` varchar(50) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status_barang` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_login`, `kode_booking`, `nama`, `alamat`, `no_tlp`, `total_harga`, `konfirmasi_pembayaran`, `bukti`, `tanggal`, `status_barang`, `pesan`) VALUES
(240, 28, '1692916566', 'eky', 'btp', '82298909', 25000, 'Pembayaran di terima', '1692916586.jpg', '2023-08-25', 'barang telah di terima', 'muantap'),
(243, 21, '1693009496', 'rizky', 'btp', '82267584234', 25000, 'Pembayaran di terima', '1693009529.jpg', '2023-08-26', 'barang telah di terima', 'bagus'),
(246, 28, '1693231017', 'iki', 'btp', '822999334', 75000, 'Pembayaran di terima', '1693231051.jfif', '2023-08-28', 'barang telah di terima', ''),
(280, 28, '1693934179', 'rizki', 'mangga tiga', '82356473828', 75000, 'Barang telah dikirim', '1693934233.jpg', '2023-09-05', '', ''),
(284, 31, '1694330280', 'rizky', 'mangga tiga', '82289893434', 200000, 'Pembayaran di terima', '1694330316.jpg', '2023-09-10', '', ''),
(288, 32, '1698229533', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(289, 32, '1698229744', '', '', '', 30000, 'belum bayar', '', '2023-10-25', '', ''),
(290, 32, '1698230057', '', '', '', 5000, 'belum bayar', '', '2023-10-25', '', ''),
(291, 32, '1698230338', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(292, 32, '1698231067', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(293, 32, '1698231106', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(294, 32, '1698231250', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(295, 32, '1698231291', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(296, 32, '1698231793', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(297, 32, '1698240529', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(298, 32, '1698240561', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(299, 32, '1698240837', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(300, 32, '1698241000', '', '', '', 50000, 'belum bayar', '', '2023-10-25', '', ''),
(301, 32, '1698248406', '', '', '', 5000, 'belum bayar', '', '2023-10-25', '', ''),
(302, 32, '1698248608', '', '', '', 20000, 'belum bayar', '', '2023-10-25', '', ''),
(303, 32, '1698248870', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(304, 32, '1698249515', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(305, 32, '1698250123', '', '', '', 100000, 'belum bayar', '', '2023-10-25', '', ''),
(306, 32, '1698250188', 'qwe', 'qwe', '123456', 25000, 'sedang di proses', '1698250203.jpg', '2023-10-25', '', ''),
(307, 32, '1698250408', 'sa', 'sa', '123455', 25000, 'sedang di proses', '1698250424.jpg', '2023-10-25', '', ''),
(308, 32, '1698250489', 'qqqe', 'wqw', '123456', 50000, 'sedang di proses', '1698250504.jpg', '2023-10-25', '', ''),
(309, 32, '1698250532', 'qew', 'qwer', '123456', 50000, 'sedang di proses', '1698250550.jpg', '2023-10-25', '', ''),
(310, 32, '1698250636', 'qwer', 'qwer', '1234567', 150000, 'sedang di proses', '1698250659.jpg', '2023-10-25', '', ''),
(311, 32, '1698251067', 'qwer', 'qewr', '123456', 155000, 'sedang di proses', '1698251082.jpg', '2023-10-25', '', ''),
(312, 32, '1698251181', 'wqer', 'ewr1', '1234567', 150000, 'sedang di proses', '1698251203.jpg', '2023-10-25', '', ''),
(313, 32, '1698251274', 'qwer', 'wert', '123456', 175000, 'sedang di proses', '1698251291.jpg', '2023-10-25', '', ''),
(314, 32, '1698251641', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(315, 32, '1698251690', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(316, 32, '1698251704', '', '', '', 25000, 'belum bayar', '', '2023-10-25', '', ''),
(317, 32, '1698252942', '', '', '', 125000, 'belum bayar', '', '2023-10-25', '', ''),
(318, 32, '1698253035', '', '', '', 125000, 'belum bayar', '', '2023-10-25', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coklat`
--

CREATE TABLE `coklat` (
  `id_coklat` int(11) NOT NULL,
  `nama_coklat` varchar(100) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `stok` int(5) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `stok1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coklat`
--

INSERT INTO `coklat` (`id_coklat`, `nama_coklat`, `harga_jual`, `harga`, `stok`, `deskripsi`, `status`, `gambar`, `jumlah`, `stok1`) VALUES
(25, 'Chococraft Milk 60% varian Mete', 0, 25000, 24, 'Chococraft Milk 60% varian Cheese adalah cokelat susu dengan tambahan isian kacang mete. Taburan kacang metenya berlimpah! varian mete ini salah satu paling best seller!', 'tersedia', '1691434302.png', 25, 24),
(26, 'Chococraft Milk 60% varian Cheese', 0, 25000, 35, 'Chococraft Milk 60% varian Cheese adalah cokelat susu dengan isian keju panggang. keju panggang crispy yang match dengan rich-nya cokelat chococraft.', 'tersedia', '1691434360.png', 40, 35),
(27, 'Chococraft Milk 60% varian Coffee', 0, 25000, 20, 'Chococraft Milk 60% varian coffee adalah cokelat susu dengan isian coffee beans. Penggemar kopi,  ayo unjuk tangan? pernah cobain cokelat rasa kopi gak? dua rasa yang sama-sama strong. Ngeblend banget pas di mulut. Ada sensasi kriuk dar biji kopi asli', 'tersedia', '1691434399.png', 21, 20),
(28, 'Bar Original Milk 60% 40gr', 0, 25000, 20, 'Chococraft Original Milk 60% adalah cokelat susu pure tanpa tambahan isian apapun. Mau rasaian rich nya cokelat istimewa ini, recomend banget varian original ini.', 'tersedia', '1691825449.png', 20, 19),
(29, 'Bar Dark 90% 40gr', 0, 25000, 0, 'Bar Dark 90% adalah cokelat tanpa tambahan susu. Rasanya cenderung lebih pahit, lebih nyokelat. Pilihan buat kamu yang pingin ngemil sehat!', 'habis', '1691825441.png', 13, 0),
(30, 'Bar Dark 80% 40gr', 0, 25000, 16, 'Bar Dark 80% cokelat dengan tanpa tambahan susu. Rasanya cenderung lebih pahit tapi nyoklat banget. Recomend buat yang diet nih. Sehat dan lezat.', 'tersedia', '1691825430.png', 16, 12),
(35, 'Candy Milk 60%', 0, 5000, 9, 'Varian mete netto 10 gr', 'tersedia', '1694344740.png', 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_coklat` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `subtotal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_coklat`, `id_booking`, `id_login`, `gambar`, `nama`, `harga`, `jumlah`, `subtotal`) VALUES
(57, 30, 1692073849, 21, '1691825430.png', 'produk cokelat 6', 25000, 1, 25000),
(58, 30, 1692073941, 21, '1691825430.png', 'produk cokelat 6', 25000, 1, 25000),
(59, 29, 1692073958, 21, '1691825441.png', 'produk cokelat 5', 25000, 1, 25000),
(60, 28, 1692073988, 21, '1691825449.png', 'produk cokelat 4', 25000, 1, 25000),
(61, 29, 1692073988, 21, '1691825441.png', 'produk cokelat 5', 25000, 1, 25000),
(62, 29, 1692074379, 21, '1691825441.png', 'produk cokelat 5', 25000, 1, 25000),
(63, 26, 1692100619, 21, '1691434360.png', 'Chococraft Milk 60% varian Cheese', 25000, 1, 25000),
(64, 29, 1692121855, 24, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 5, 125000),
(65, 30, 1692284953, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(66, 28, 1692356996, 21, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(67, 28, 1692357049, 21, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 7, 175000),
(68, 30, 1692436300, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(69, 30, 1692466384, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(70, 30, 1692466429, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 7, 175000),
(71, 29, 1692472789, 21, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(72, 29, 1692523758, 21, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(73, 28, 1692523811, 21, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(74, 27, 1692523856, 21, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(75, 29, 1692523898, 21, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 2, 50000),
(76, 28, 1692523898, 21, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(77, 30, 1692675449, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 2, 50000),
(78, 34, 1692675449, 21, '1692675209.png', 'coklat 10', 15000, 1, 15000),
(79, 30, 1692680193, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(80, 30, 1692723761, 21, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(81, 30, 1692903392, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(82, 29, 1692908538, 21, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(83, 25, 1692912222, 29, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 7, 175000),
(84, 25, 1692912344, 29, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 3, 75000),
(85, 29, 1692912344, 29, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 3, 75000),
(86, 25, 1692912411, 29, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 4, 100000),
(87, 29, 1692912484, 29, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(88, 30, 1692914425, 29, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(89, 28, 1692914425, 29, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 5, 125000),
(90, 30, 1692916151, 29, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(91, 29, 1692916566, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(92, 30, 1692916695, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(93, 30, 1692916890, 29, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 3, 75000),
(94, 29, 1693009496, 21, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(95, 29, 1693154879, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(96, 29, 1693186536, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 3, 75000),
(97, 28, 1693231017, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 3, 75000),
(98, 29, 1693745191, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(99, 28, 1693812114, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 2, 50000),
(100, 28, 1693812607, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 3, 75000),
(101, 30, 1693812607, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 2, 50000),
(102, 29, 1693845034, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(103, 28, 1693845510, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(104, 28, 1693846327, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(105, 29, 1693846647, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(106, 29, 1693847324, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(107, 28, 1693847649, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(108, 30, 1693847772, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(109, 30, 1693847886, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(110, 27, 1693847886, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(111, 30, 1693847992, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(112, 29, 1693848028, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(113, 29, 1693848095, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(114, 29, 1693848622, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 2, 50000),
(115, 28, 1693848622, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(116, 28, 1693848664, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(117, 29, 1693848664, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(118, 28, 1693848727, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(119, 29, 1693848727, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(120, 29, 1693848841, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(121, 28, 1693848841, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(122, 29, 1693848943, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 2, 50000),
(123, 28, 1693848943, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(124, 28, 1693849033, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(125, 28, 1693849303, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(126, 29, 1693849303, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(127, 28, 1693849413, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(128, 29, 1693849413, 28, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(129, 27, 1693849469, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(130, 27, 1693849480, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 2, 50000),
(131, 27, 1693850184, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 2, 50000),
(132, 27, 1693850214, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(133, 27, 1693850227, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(134, 27, 1693850244, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(135, 27, 1693850294, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(136, 27, 1693850317, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(137, 27, 1693894929, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(138, 27, 1693895354, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 5, 125000),
(139, 28, 1693934132, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(140, 28, 1693934179, 28, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(141, 27, 1693934179, 28, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 2, 50000),
(142, 25, 1694330133, 31, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 3, 75000),
(143, 25, 1694330152, 31, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 3, 75000),
(144, 25, 1694330171, 31, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 3, 75000),
(145, 26, 1694330171, 31, '1691434360.png', 'Chococraft Milk 60% varian Cheese', 25000, 5, 125000),
(146, 25, 1694330280, 31, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 3, 75000),
(147, 26, 1694330280, 31, '1691434360.png', 'Chococraft Milk 60% varian Cheese', 25000, 5, 125000),
(148, 30, 1694332040, 31, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 5, 125000),
(149, 30, 1694334101, 31, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 5, 125000),
(150, 29, 1694334101, 31, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(151, 30, 1694344297, 28, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(152, 30, 1698229533, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(153, 30, 1698229744, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(154, 35, 1698229744, 32, '1694344740.png', 'Candy Milk 60%', 5000, 1, 5000),
(155, 35, 1698230057, 32, '1694344740.png', 'Candy Milk 60%', 5000, 1, 5000),
(156, 28, 1698230338, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(157, 29, 1698230338, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(158, 28, 1698231067, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(159, 29, 1698231067, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(160, 28, 1698231106, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(161, 29, 1698231106, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(162, 28, 1698231250, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(163, 29, 1698231250, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(164, 28, 1698231291, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(165, 29, 1698231291, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(166, 28, 1698231793, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(167, 29, 1698231793, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(168, 28, 1698240529, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(169, 29, 1698240529, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(170, 28, 1698240561, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(171, 29, 1698240561, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(172, 28, 1698240837, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(173, 29, 1698240837, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(174, 29, 1698241000, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(175, 28, 1698241000, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(176, 35, 1698248406, 32, '1694344740.png', 'Candy Milk 60%', 5000, 1, 5000),
(177, 35, 1698248608, 32, '1694344740.png', 'Candy Milk 60%', 5000, 4, 20000),
(178, 29, 1698248870, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(179, 29, 1698249515, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(180, 29, 1698250123, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 4, 100000),
(181, 29, 1698250188, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(182, 29, 1698250408, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(183, 28, 1698250489, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(184, 29, 1698250489, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(185, 29, 1698250532, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 1, 25000),
(186, 28, 1698250532, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(187, 29, 1698250636, 32, '1691825441.png', 'Bar Dark 90% 40gr', 25000, 5, 125000),
(188, 28, 1698250636, 32, '1691825449.png', 'Bar Original Milk 60% 40gr', 25000, 1, 25000),
(189, 30, 1698251067, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 6, 150000),
(190, 35, 1698251067, 32, '1694344740.png', 'Candy Milk 60%', 5000, 1, 5000),
(191, 30, 1698251181, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 5, 125000),
(192, 27, 1698251181, 32, '1691434399.png', 'Chococraft Milk 60% varian Coffee', 25000, 1, 25000),
(193, 26, 1698251274, 32, '1691434360.png', 'Chococraft Milk 60% varian Cheese', 25000, 6, 150000),
(194, 25, 1698251274, 32, '1691434302.png', 'Chococraft Milk 60% varian Mete', 25000, 1, 25000),
(195, 30, 1698251641, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(196, 30, 1698251690, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(197, 30, 1698251704, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 1, 25000),
(198, 30, 1698252942, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 5, 125000),
(199, 30, 1698253035, 32, '1691825430.png', 'Bar Dark 80% 40gr', 25000, 5, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `email`, `no_tlp`, `alamat`, `password`, `level`) VALUES
(18, 'admin', '', '', '', '$2y$10$aj1SINy00CSXCftQ1HHyOOCafu5IuhVEYu10Rn.CFvZ1n8rPPpPUW', 'admin'),
(21, 'ekyyy', '', '', '', '$2y$10$RJvjhUfBAdIu4zLYDxO/Fu6Y9UCxBKPNafOBjlnxOD37k81welyGi', 'pengguna'),
(23, 'kii', '', '', '', '$2y$10$qwFlGgBI7.J/J1nhfMZEQ.4VczSFbPqdQ72O5L3eFD77hwQ5JgKXm', 'admin'),
(28, 'eky', 'e@gmail.com', '082278986767', 'btp', '$2y$10$m9AGvYMXEf0cGy2Bb/CeTu.Bj6YLWyr.bifQK1Cr1ENXRSqDOswHS', 'pengguna'),
(31, 'rizky', 'r@gmail.com', '082289783434', 'mangga tiga', '$2y$10$NyUSmvgo07mtwsoefbVlfOWbVDuad.YL8NTnbwUBpszrWE6alH0Oi', 'pengguna'),
(32, 'qwer', 'admin@gmail.com', '1234', 'wertyu', '$2y$10$/8jPftJtZdf7F4uIw71eHe6ggJuj/CVZxJjjW8YVHaTgWtrC0jWiu', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `nomor`, `email`, `pesan`) VALUES
(9, 'EKY', '02138124123', 'EKY@gmail.com', 'coklat nya sangat mantap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `coklat`
--
ALTER TABLE `coklat`
  ADD PRIMARY KEY (`id_coklat`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_coklat` (`id_coklat`),
  ADD KEY `id_booking` (`id_booking`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `coklat`
--
ALTER TABLE `coklat`
  MODIFY `id_coklat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
