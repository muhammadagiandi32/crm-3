-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2021 at 07:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crm3`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customers` int(11) NOT NULL,
  `kode_customers` varchar(100) NOT NULL,
  `nama_customers` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelfon` int(14) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customers`, `kode_customers`, `nama_customers`, `alamat`, `email`, `notelfon`, `kota`, `provinsi`) VALUES
(1, 'PL0001', 'DEDE', 'Kunir 56a', 'frianzy@gmail.com', 215154115, 'Jakarta Barat', 'DKI Jakarta'),
(11, 'PL0002', 'PT. PAPU PINANG JAYA', 'Jl. Sawahlio V', 'frianzynow@gmail.com', 2147483647, 'Jakarta Barat', 'DKI Jakarta'),
(12, 'PL0003', 'PT. WASKITA KARYA', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(13, 'PL0004', 'AGI', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(14, 'PL0005', 'Wirda', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(15, 'PL0006', 'Fahmi', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(16, 'PL0007', 'Eko', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(17, 'PL0008', 'Via Fitrotun Nazilla', 'Jl. Sawah lio V No.93', 'zegakris56@gmail.com', 2147483647, 'KOTA JAKARTA BARAT', 'DKI Jakarta'),
(18, 'PL0009', 'PT RKC', 'JL.Halim Perdana kusuma 25E', 'rkc@rkctoys.co.id', 2123232424, 'Tangerang', 'Banten'),
(19, 'PL00010', 'PT. Agi Kacung', 'Mana aja boleh', 'agi@gmail.com', 2147483647, 'Jakarta', 'Jakarta'),
(20, 'PL00010', 'PT. Agi', 'agi', 'agi@gmail.com', 2147483647, 'agi', 'agi'),
(21, 'PL00010', 'Agi 01', 'Agi 01', 'Agi01@gmail.com', 2147483647, 'jakarta', 'jakarta'),
(22, 'PL00010', 'Agi 01', 'Agi 01', 'Agi01@gmail.com', 2147483647, 'jakarta', 'jakarta'),
(23, 'PL00010', 'Agi 01', 'Agi 01', 'Agi01@gmail.com', 2147483647, 'jakarta', 'jakarta'),
(24, 'PL00010', 'ksksk', 'JSJDn', 'jsj@jshs.co', 20293283, 'jkadnjkan', 'kjnjkdfsa'),
(25, 'PL00010', 'ksksk', 'JSJDn', 'jsj@jshs.co', 20293283, 'jkadnjkan', 'kjnjkdfsa');

-- --------------------------------------------------------

--
-- Table structure for table `head_order`
--

CREATE TABLE `head_order` (
  `id_head_order` int(11) NOT NULL,
  `no_order` varchar(30) NOT NULL,
  `tanggal_order` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_order`
--

INSERT INTO `head_order` (`id_head_order`, `no_order`, `tanggal_order`, `status`) VALUES
(1, 'PO-01 21921 225240', '2021-09-21', 'ORDER'),
(2, 'PO-01 21921 225707', '2021-09-21', 'ORDER'),
(3, 'PO-01 21921 225820', '2021-09-21', 'ORDER'),
(4, 'PO-01 11021 153036', '2021-10-01', 'ORDER'),
(5, 'PO-01 21021 142255', '2021-10-02', 'ORDER'),
(6, 'PO-01 21021 153030', '2021-10-02', 'SURAT JALAN');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `no_order` varchar(255) NOT NULL,
  `kode_item` varchar(100) NOT NULL,
  `kode_customers` varchar(100) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `no_order`, `kode_item`, `kode_customers`, `nama_barang`, `jumlah`, `harga`) VALUES
(1, 'PO-01 21921 225240', 'RKC-0100-2', 'PL0002', 'PAPAN KOTAK KODOK', 100, '1800000.00'),
(2, 'PO-01 21921 225240', 'RKC 001-01', 'PL0002', 'HAHA MAMPUS MAGNET KOTAK', 10000, '6000000.00'),
(3, 'PO-01 21921 225240', 'RKC-0100-2', 'PL0002', 'AGI KOTAK KODOK', 100, '16000000.00'),
(4, 'PO-01 21921 225240', 'RKC 001-01', 'PL0002', 'HAHA MAMPUS MAGNET KOTAK', 100, '1500000.00'),
(5, 'PO-01 21921 225707', 'RKC 001-15', 'PL0002', 'PAPAN KODOK KOTAK', 10, '1000.00'),
(6, 'PO-01 21921 225707', 'RKC-0100-3', 'PL0002', 'APAAN SI KOTAK MAGNET', 100, '650000.00'),
(7, 'PO-01 21921 225820', 'RKC-0100-2', 'PL0002', 'AMBON SEGITIGA', 10, '15000.00'),
(8, 'PO-01 21921 225820', 'RKC-0100-2', 'PL0002', 'AGI KOTAK KODOK', 100, '190000.00'),
(9, 'PO-01 11021 153036', 'RKC 001-01', 'PL0001', 'HAHA MAMPUS MAGNET KOTAK', 100, '120000.00'),
(10, 'PO-01 11021 153036', 'RKC-0100-2', 'PL0001', 'AGI KOTAK KODOK', 25, '122000.00'),
(11, 'PO-01 21021 142255', 'RKC-0100-3', 'PL0001', 'PAPAN KOTAK MAGNET', 2, '1000.00'),
(12, 'PO-01 21021 153030', '002', 'PL0001', 'bebek', 1, '125000.00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `no_order` varchar(100) NOT NULL,
  `pembayaran` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `priv`
--

CREATE TABLE `priv` (
  `id_priv` int(11) NOT NULL,
  `priv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `kode_item` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `kode_item`, `nama_barang`, `satuan`, `qty`, `unit`, `harga`, `nama_supplier`) VALUES
(1, 'KD-0001', 'SAMCAN KULIT PREMIUM', 'NO HALAL', 0, 'KG', '0.00', ''),
(2, 'KD-0002', 'SAMCAN OFF PREMIUM', 'NO HALAL', 0, 'KG', '0.00', ''),
(3, 'KD-0003', 'SAMCAN ON LEGULER', 'NO HALAL', 0, 'KG', '0.00', ''),
(4, 'KD-0004', 'SAMCAN OFF LEGULER', 'NO HALAL', 0, 'KG', '0.00', ''),
(5, 'KD-0004', 'KAPSIN', 'NO HALAL', 0, 'KG', '0.00', ''),
(6, 'KD-0006', 'KARBONAT', 'NO HALAL', 0, 'KG', '0.00', ''),
(7, 'KD-0007', 'BELLY ROLL', 'NO HALAL', 0, 'KG', '0.00', ''),
(8, 'KD-0008', 'NECK ROLL', 'NO HALAL', 0, 'KG', '0.00', ''),
(9, 'KD-0009', 'BELLY SLICE', 'NO HALAL', 0, 'KG', '0.00', ''),
(10, 'KD-0010', 'SKREMEAT LOCAL', 'NO HALAL', 0, 'KG', '0.00', ''),
(11, 'KD-0011', 'PORK JOWL', 'NO HALAL', 0, 'KG', '0.00', ''),
(12, 'KD-0012', 'PORK KNUKLE', 'NO HALAL', 0, 'KG', '0.00', ''),
(13, 'KD-0013', 'PAHA ISI', 'NO HALAL', 0, 'KG', '0.00', ''),
(14, 'KD-0014', 'TENDERLOIN LOCAL', 'NO HALAL', 0, 'KG', '0.00', ''),
(15, 'KD-0015', 'MINCED BIASA', 'NO HALAL', 0, 'KG', '0.00', ''),
(16, 'KD-0016', 'MINCED IPPUDO', 'NO HALAL', 0, 'KG', '0.00', ''),
(17, 'KD-0017', 'TULANG BELAKANG', 'NO HALAL', 0, 'KG', '0.00', ''),
(18, 'KD-0018', 'TULANG DENGKUL', 'NO HALAL', 0, 'KG', '0.00', ''),
(19, 'KD-0019', 'TRIMING TULANG', 'NO HALAL', 0, 'KG', '0.00', ''),
(20, 'KD-0020', 'KAKI DEPAN', 'NO HALAL', 0, 'KG', '0.00', ''),
(21, 'KD-0021', 'KAKI SANDEL', 'NO HALAL', 0, 'KG', '0.00', ''),
(22, 'KD-0022', 'KAKI BELAKANG ( CEKER )', 'NO HALAL', 0, 'KG', '0.00', ''),
(23, 'KD-0023', 'KAKI SONG FA', 'NO HALAL', 0, 'KG', '0.00', ''),
(24, 'KD-0024', 'SAMCAN POTONG', 'NO HALAL', 0, 'KG', '0.00', ''),
(25, 'KD-0025', 'PORK NECK ( PIAN )', 'NO HALAL', 0, 'KG', '0.00', ''),
(26, 'KD-0026', 'PAIKUT WONG', 'NO HALAL', 0, 'KG', '0.00', ''),
(27, 'KD-0027', 'PARK RIBS ( IGA )', 'NO HALAL', 0, 'KG', '0.00', ''),
(28, 'KD-0028', 'LEMAK LOCAL', 'NO HALAL', 0, 'KG', '0.00', ''),
(29, 'KD-0029', 'KULIT', 'NO HALAL', 0, 'KG', '0.00', ''),
(30, 'KD-0030', 'TITO', 'NO HALAL', 0, 'KG', '0.00', ''),
(31, 'KD-0031', 'PAHA UTUH', 'NO HALAL', 0, 'KG', '0.00', ''),
(32, 'KD-0032', 'SAMTUL', 'NO HALAL', 0, 'KG', '0.00', ''),
(33, 'KD-0033', 'BELLY ON SR DUROC', 'NO HALAL', 0, 'KG', '0.00', ''),
(34, 'KD-0034', 'BELLY OFF SR DUROC', 'NO HALAL', 0, 'KG', '0.00', ''),
(35, 'KD-0035', 'BELLY ON LEGULER COREN', 'NO HALAL', 0, 'KG', '0.00', ''),
(36, 'KD-0036', 'BELLY OFF LEGULER COREN', 'NO HALAL', 0, 'KG', '0.00', ''),
(37, 'KD-0037', 'COLLAR COREN ( KAPSIN )', 'NO HALAL', 0, 'KG', '0.00', ''),
(38, 'KD-0038', 'PORK LOIN COREN', 'NO HALAL', 0, 'KG', '0.00', ''),
(39, 'KD-0039', 'SKREMEAT COREN', 'NO HALAL', 0, 'KG', '0.00', ''),
(40, 'KD-0040', 'FAT COREN', 'NO HALAL', 0, 'KG', '0.00', ''),
(41, 'KD-0041', 'BELLY ON DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(42, 'KD-0042', 'BELLY OFF DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(43, 'KD-0043', 'PORK LOIN DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(44, 'KD-0044', 'PORK COLLAR DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(45, 'KD-0045', 'TENDERLOIN DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(46, 'KD-0046', 'PORK FAT DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(47, 'KD-0047', 'PORK FAT DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(48, 'KD-0048', 'PORK LOIN DC', 'NO HALAL', 0, 'KG', '0.00', ''),
(49, 'KD-0049', 'TRIMING DAGING', 'NO HALAL', 0, 'KG', '0.00', ''),
(50, 'KD-0050', 'TULANG MUDA', 'NO HALAL', 0, 'KG', '0.00', ''),
(51, 'KD-0051', 'PAIKUT 2 LAPIS', 'NO HALAL', 0, 'KG', '0.00', ''),
(52, 'KD-0052', 'KAKI POTONG', 'NO HALAL', 0, 'KG', '0.00', ''),
(53, 'KD-0053', 'TENDERLOIN BEEF', 'HALAL', 0, 'KG', '0.00', ''),
(54, 'KD-0054', 'TOP SIDE BEFF', 'HALAL', 0, 'KG', '0.00', ''),
(55, 'KD-0055', 'CHUCK TENDER', 'HALAL', 0, 'KG', '0.00', ''),
(56, 'KD-0056', 'MINCED ( GROUND BEEF )', 'HALAL', 0, 'KG', '0.00', ''),
(57, 'KD-0057', 'SENGKEL', 'HALAL', 0, 'KG', '0.00', ''),
(58, 'KD-0058', 'DOGANI', 'HALAL', 0, 'KG', '0.00', ''),
(59, 'KD-0059', 'TULANG SUMSUM ( SANGOL )', 'HALAL', 0, 'KG', '0.00', ''),
(60, 'KD-0060', 'BABAT', 'HALAL', 0, 'KG', '0.00', ''),
(61, 'KD-0061', 'JANTUNG', 'HALAL', 0, 'KG', '0.00', ''),
(62, 'KD-0062', 'USUS', 'HALAL', 0, 'KG', '0.00', ''),
(63, 'KD-0063', 'HATI', 'HALAL', 0, 'KG', '0.00', ''),
(64, 'KD-0064', 'PARU', 'HALAL', 0, 'KG', '0.00', ''),
(65, 'KD-0065', 'SIRLOIN AUSI', 'HALAL', 0, 'KG', '0.00', ''),
(66, 'KD-0066', 'TENDERLOIN AUSI', 'HALAL', 0, 'KG', '0.00', ''),
(67, 'KD-0067', 'IGA AUSI', 'HALAL', 0, 'KG', '0.00', ''),
(68, 'KD-0068', 'OXTAIL CENTRE CUT', 'HALAL', 0, 'KG', '0.00', ''),
(69, 'KD-0069', 'RIB EYE MALTIQUE', 'HALAL', 0, 'KG', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `kode_supplier` varchar(12) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(13) NOT NULL,
  `kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `kode_supplier`, `nama_suplier`, `alamat`, `no_tlp`, `kota`) VALUES
(1, '0', 'Raka', '', 0, ''),
(270, '0', 'Jakarta', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `total_tagihan` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_order`, `no_order`, `total_tagihan`) VALUES
(1, 1, 'PO-01 21921 225240', '25300000.00'),
(2, 2, 'PO-01 21921 225707', '651000.00'),
(3, 3, 'PO-01 21921 225820', '205000.00'),
(4, 4, 'PO-01 11021 153036', '242000.00'),
(5, 5, 'PO-01 21021 142255', '1000.00'),
(6, 4, 'PO-01 11021 153036', '242000.00'),
(7, 6, 'PO-01 21021 153030', '125000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tambah_barang`
--

CREATE TABLE `tambah_barang` (
  `id_tambahbarang` int(11) NOT NULL,
  `kode_item` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `unit` varchar(12) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambah_barang`
--

INSERT INTO `tambah_barang` (`id_tambahbarang`, `kode_item`, `supplier`, `nama_barang`, `satuan`, `jumlah`, `unit`, `harga`, `total`, `tanggal_masuk`) VALUES
(1, 'kodeitem1,kodeitem2', '', 'namabarang1,namabarang2', '', 'jumlah1,jumlah2', 'KG,PCS', 'harga1,harga2', '', '0000-00-00'),
(2, 'kodeitem1', '', 'namabarang1', '', 'jumlah1', 'KG', 'harga1', '', '0000-00-00'),
(3, 'kodeitem2', '', 'namabarang2', '', 'jumlah2', 'PCS', 'harga2', '', '0000-00-00'),
(4, 'kodeitem1', '', 'namabarang1', '', 'jumlah1', 'KG', 'harga1', '', '0000-00-00'),
(5, 'kodeitem2', '', 'namabarang2', '', 'jumlah2', 'PCS', 'harga2', '', '0000-00-00'),
(6, 'asdsad', 'KACUNG', 'asdas', '', 'dsadsa', 'KG', 'dasd', '', '0000-00-00'),
(7, 'asfgasf', '', 'sadsa', '', 'dsadsa', 'KG', 'dasdasd', '', '0000-00-00'),
(8, 'asdasd', '', 'asfasf', '', 'asfasfgsdhgfsd', 'DUS', 'asdgagas', '', '0000-00-00'),
(9, 'fhh', '', 'fsdg', '', 'sdgsdg', 'KG', 'sdgdsgdsh', '', '0000-00-00'),
(10, 'asdsadffffffffff', 'KACUNG', '848484', '', 'sdhsd', 'KG', 'asdasdasdas', '', '0000-00-00'),
(11, 'as1231', 'KACUNG', '131', '', '1313', 'KG', '1313', '', '0000-00-00'),
(12, '324234', 'KACUNG', '324dcas', '', 'adasd', 'KG', 'adasdasdasd', '', '0000-00-00'),
(13, '', 'KACUNG', '', '', '', 'KG', '', '', '0000-00-00'),
(14, '', 'KACUNG', '', '', '', 'DUS', '', '', '0000-00-00'),
(15, '', 'KACUNG', '', '', '', 'DUS', '', '', '0000-00-00'),
(16, 'asdsadffffffffff', 'KACUNG', 'dfsd', '', 'sdfsdf', 'KG', 'sdfsdf', '', '0000-00-00'),
(17, 'sdfsd', 'KACUNG', 'fsdf', '', 'sdfsdf', 'KG', 'sdfsdf', '', '0000-00-00'),
(18, '51215', '', '626', '', '6265415', 'KG', '5151', '', '0000-00-00'),
(19, '6519155', '', '651915', '', '64954', 'KG', '6516', '', '0000-00-00'),
(20, '321651', '', '65115', '', '654161', 'KG', '65161', '', '0000-00-00'),
(21, '51215', '', '626', '', '6265415', 'KG', '5151', '', '0000-00-00'),
(22, '6519155', '', '651915', '', '64954', 'KG', '6516', '', '0000-00-00'),
(23, '321651', '', '65115', '', '654161', 'KG', '65161', '', '0000-00-00'),
(24, 'RKC-0100-1', 'RAKA', 'Paha Sapi', '', '10', '', '2500000', '', '0000-00-00'),
(25, 'RKC-0100-2', 'RAKA', 'Paha Ayam', '', '50', '', '50000000', '', '0000-00-00'),
(26, 'RKC-0100-3', 'RAKA', 'Ikan Asin', '', '800', '', '150000000', '', '0000-00-00'),
(27, 'sss', '', '', '', '', '', '', '', '0000-00-00'),
(28, '', '', '', '', '', '', '', '', '0000-00-00'),
(29, 'RKC-0100-2', 'AGI', 'PAPAN KOTAK KODOK', '', '500', '', '500000', '', '0000-00-00'),
(30, 'RKC-0100-2', 'AGI', 'PAPAN KOTAK KODOK', '', '500', 'DUS', '500000', '', '0000-00-00'),
(31, 'RKC-0100-3', 'AGI', 'PAPAN KOTAK MAGNET', '', '600', 'DUS', '600000', '', '0000-00-00'),
(32, 'RKC-0100-2', 'AGI', 'PAPAN KOTAK KODOK', '', '500', 'DUS', '500000', '', '0000-00-00'),
(33, 'RKC-0100-3', 'AGI', 'PAPAN KOTAK MAGNET', '', '600', 'KG', '450000', '', '0000-00-00'),
(34, 'RKC-0100-2', 'AGI', 'PAPAN KOTAK KODOK', '', '500', 'DUS', '500000', '', '0000-00-00'),
(35, 'RKC-0100-3', 'AGI', 'PAPAN KOTAK MAGNET', '', '600', 'KG', '450000', '', '0000-00-00'),
(36, 'RKC-0100-2', 'AGI', 'PAPAN KOTAK KODOK', '', '500', 'DUS', '500000', '', '2021-09-16'),
(37, 'RKC-0100-3', 'AGI', 'PAPAN KOTAK MAGNET', '', '600', 'KG', '450000', '', '2021-09-16'),
(38, 'RKC 001-01', 'DEDE', 'PAPAN MAGNET KOTAK', '', '1000', 'DUS', '2500000', '', '2021-09-17'),
(39, 'RKC 001-04', 'AGI', 'PAPAN KODOK', '', '5000', 'DUS', '5000000', '', '2021-09-17'),
(40, 'RKC 001-05', 'AGI', 'PAPAN KODOK', '', '5000', 'DUS', '5000000', '', '2021-09-17'),
(41, 'RKC 001-05', 'ZEGA', 'PAPAN KODOK', '', '40000', 'DUS', '50000000', '', '2021-09-17'),
(42, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(43, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '100', 'DUS', '50000000', '', '2021-09-17'),
(44, 'RKC 001-05', 'ZEGA', 'PAPAN KODOK KOTAK', '', '100', 'DUS', '5000000', '', '2021-09-17'),
(45, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(46, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(47, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(48, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(49, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(50, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(51, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(52, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(53, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(54, 'RKC 001-15', 'ZEGA', 'PAPAN KODOK KOTAK', '', '100', 'KG', '1000000', '', '2021-09-17'),
(55, 'RKC 001-09', 'ZEGA', 'PAPAN KODOK', '', '7600', 'DUS', '50000000', '', '2021-09-17'),
(56, 'RKC 001-15', 'ZEGA', 'PAPAN KODOK KOTAK', '', '100', 'KG', '1000000', '', '2021-09-17'),
(57, 'RKC 001-15', '', 'sad sad', '', '1000', 'KG', '100000', '', '0000-00-00'),
(58, 'RKC 001-18', '', '', '', '', 'KG', '', '', '0000-00-00'),
(59, 'sabtu-02', '', 'DAGING SAPI BAWAH', '', '2000', 'KG', '500000', '', '0000-00-00'),
(60, '', '', '', '', '', 'KG', '', '', '0000-00-00'),
(61, 'SABTU-02-10', '', 'DAGING PAHA', '', '100', 'KG', '150000', '', '0000-00-00'),
(62, '001', '', 'short rib bone in', '', '2', 'KG', '410000', '', '0000-00-00'),
(63, '002', '', 'bebek', '', '3', 'DUS', '120000', '', '0000-00-00'),
(64, 'KD-0001', '', 'samcan kulit premium', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(65, 'KD-0002', '', 'SAMCAN OFF PREMIUM', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(66, 'KD-0003', '', 'SAMCAN ON LEGULER', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(67, 'KD-0004', '', 'SAMCAN OFF LEGULER', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(68, 'KD-0004', '', 'KAPSIN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(69, 'KD-0006', '', 'KARBONAT', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(70, 'KD-0007', '', 'BELLY ROLL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(71, 'KD-0008', '', 'NECK ROLL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(72, 'KD-0009', '', 'BELLY SLICE', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(73, 'KD-0010', '', 'SKREMEAT LOCAL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(74, 'KD-0011', '', 'PORK JOWL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(75, 'KD-0012', '', 'PORK KNUKLE', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(76, 'KD-0013', '', 'PAHA ISI', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(77, 'KD-0014', '', 'TENDERLOIN LOCAL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(78, 'KD-0015', '', 'MINCED BIASA', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(79, 'KD-0016', '', 'MINCED IPPUDO', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(80, 'KD-0017', '', 'TULANG BELAKANG', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(81, 'KD-0018', '', 'TULANG DENGKUL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(82, 'KD-0019', '', 'TRIMING TULANG', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(83, 'KD-0020', '', 'KAKI DEPAN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(84, 'KD-0021', '', 'KAKI SANDEL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(85, 'KD-0022', '', 'KAKI BELAKANG ( CEKER )', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(86, 'KD-0023', '', 'KAKI SONG FA', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(87, 'KD-0024', '', 'SAMCAN POTONG', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(88, 'KD-0025', '', 'PORK NECK ( PIAN )', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(89, 'KD-0026', '', 'PAIKUT WONG', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(90, 'KD-0027', '', 'PARK RIBS ( IGA )', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(91, 'KD-0028', '', 'LEMAK LOCAL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(92, 'KD-0029', '', 'KULIT', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(93, 'KD-0030', '', 'TITO', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(94, 'KD-0031', '', 'PAHA UTUH', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(95, 'KD-0032', '', 'SAMTUL', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(96, 'KD-0033', '', 'BELLY ON SR DUROC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(97, 'KD-0034', '', 'BELLY OFF SR DUROC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(98, 'KD-0035', '', 'BELLY ON LEGULER COREN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(99, 'KD-0036', '', 'BELLY OFF LEGULER COREN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(100, 'KD-0037', '', 'COLLAR COREN ( KAPSIN )', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(101, 'KD-0038', '', 'PORK LOIN COREN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(102, 'KD-0039', '', 'SKREMEAT COREN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(103, 'KD-0040', '', 'FAT COREN', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(104, 'KD-0041', '', 'BELLY ON DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(105, 'KD-0042', '', 'BELLY OFF DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(106, 'KD-0043', '', 'PORK LOIN DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(107, 'KD-0044', '', 'PORK COLLAR DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(108, 'KD-0045', '', 'TENDERLOIN DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(109, 'KD-0046', '', 'PORK FAT DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(110, 'KD-0047', '', 'PORK FAT DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(111, 'KD-0048', '', 'PORK LOIN DC', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(112, 'KD-0049', '', 'TRIMING DAGING', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(113, 'KD-0050', '', 'TULANG MUDA', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(114, 'KD-0051', '', 'PAIKUT 2 LAPIS', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(115, 'KD-0052', '', 'KAKI POTONG', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(116, 'KD-0053', '', 'TENDERLOIN BEEF', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(117, 'KD-0054', '', 'TOP SIDE BEFF', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(118, 'KD-0055', '', 'CHUCK TENDER', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(119, 'KD-0056', '', 'MINCED ( GROUND BEEF )', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(120, 'KD-0057', '', 'SENGKEL', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(121, 'KD-0058', '', 'DOGANI', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(122, 'KD-0059', '', 'TULANG SUMSUM ( SANGOL )', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(123, 'KD-0060', '', 'BABAT', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(124, 'KD-0061', '', 'JANTUNG', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(125, 'KD-0062', '', 'USUS', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(126, 'KD-0063', '', 'HATI', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(127, 'KD-0064', '', 'PARU', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(128, 'KD-0065', '', 'SIRLOIN AUSI', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(129, 'KD-0066', '', 'TENDERLOIN AUSI', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(130, 'KD-0067', '', 'IGA AUSI', 'NO HALAL', '', 'KG', '', '', '0000-00-00'),
(131, 'KD-0068', '', 'OXTAIL CENTRE CUT', 'HALAL', '', 'KG', '', '', '0000-00-00'),
(132, 'KD-0069', '', 'RIB EYE MALTIQUE', 'HALAL', '', 'KG', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priv` text NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customers`);

--
-- Indexes for table `head_order`
--
ALTER TABLE `head_order`
  ADD PRIMARY KEY (`id_head_order`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `priv`
--
ALTER TABLE `priv`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  ADD PRIMARY KEY (`id_tambahbarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `head_order`
--
ALTER TABLE `head_order`
  MODIFY `id_head_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `priv`
--
ALTER TABLE `priv`
  MODIFY `id_priv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  MODIFY `id_tambahbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
