-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 02:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022s_topaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(2) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `kode`, `namabarang`, `merk`, `satuan`, `tipe`) VALUES
(2, 'K01', 'Semi-Automatic Urine Analyzer', '77 Elektronika', 'Unit', 'LabUReader Plus'),
(5, 'K02', 'Semi-Automated Urine Sediment Analyzer', '77 Elektronika', 'Unit', 'UriSed Mini'),
(6, 'K03', 'Vortex Mixer', 'QL Systems', 'Unit', 'MX2500'),
(7, 'K04', 'Full Automatic Urine Analyzer 2nd Generation 100 t', '77 Elektronika', 'Unit', 'LABUMAT 2'),
(8, 'K06', 'Full Automatic PCR', 'Elitech', 'Unit', 'Elite InGenius'),
(9, 'K05', 'Microscope Automatic Digital Blood Smear Analysis ', 'West Medica', 'Unit', 'Vision Hema Pro / Vision Hema 8');

-- --------------------------------------------------------

--
-- Table structure for table `dataservice`
--

CREATE TABLE `dataservice` (
  `notransaksi` varchar(10) NOT NULL,
  `idbarang` int(2) NOT NULL,
  `tgl` date NOT NULL,
  `namap` varchar(100) NOT NULL,
  `alamatp` text NOT NULL,
  `telpp` varchar(15) NOT NULL,
  `kerusakan` varchar(50) NOT NULL,
  `solusi` varchar(50) NOT NULL,
  `biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataservice`
--

INSERT INTO `dataservice` (`notransaksi`, `idbarang`, `tgl`, `namap`, `alamatp`, `telpp`, `kerusakan`, `solusi`, `biaya`) VALUES
('2022060808', 2, '2022-06-05', 'Rsud Ansari Saleh', 'Jl. Brigjend Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70125, Indonesia', '6282172614255', 'Proses agak melambat', 'Pembersihan saja', 200000),
('2022060812', 7, '2022-06-02', 'Rsud Ansari Saleh', 'Jl. Brigjend Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70125, Indonesia', '6282172614255', 'Konslet', 'Pengecekan Power Supply', 2000000),
('2022060822', 5, '2022-06-09', 'Rs.raza', 'mtp', '082154216289', 'Alat tidak berfungsi seperti biasanya', 'perbaiki mesinnya', 750000),
('2022060839', 7, '2022-06-01', 'RSUD Idaman Banjarbaru', 'Jl. Trikora No.115, Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721, Indonesia', '6289172314213', 'Mesin Tidak Menyala', 'Ganti Mesin', 1200000),
('2022060841', 6, '2022-06-06', 'RS. Ayudia', 'bjb', '082154216289', 'Matol (Mati Total)', 'Emergency Maintenance', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(5) NOT NULL,
  `notransaksi` varchar(15) NOT NULL,
  `idstok` int(5) NOT NULL,
  `namastok1` varchar(50) NOT NULL,
  `merk1` varchar(50) NOT NULL,
  `jumlah1` int(5) NOT NULL,
  `harga1` double NOT NULL,
  `subharga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`iddetail`, `notransaksi`, `idstok`, `namastok1`, `merk1`, `jumlah1`, `harga1`, `subharga`) VALUES
(3, '2022060806', 3, 'Full Automatic PCR', 'Sansure', 2, 2500000, 5000000),
(6, '2022060848', 2, 'Full Automatic Urine Analyzer 2nd Generation 100 t', '77 Elektronika', 2, 2000000, 4000000),
(7, '2022060801', 1, 'Semi-Automatic Urine Analyzer', '77 Elektronika', 3, 700000, 2100000),
(8, '2022060801', 3, 'Full Automatic PCR', 'Sansure', 1, 2500000, 2500000),
(9, '2022060814', 3, 'Full Automatic PCR', 'Sansure', 2, 2500000, 5000000),
(10, '2022060814', 1, 'Semi-Automatic Urine Analyzer', '77 Elektronika', 1, 700000, 700000),
(11, '2022060814', 2, 'Full Automatic Urine Analyzer 2nd Generation 100 t', '77 Elektronika', 1, 2000000, 2000000),
(12, '2022060841', 4, 'Microscope Automatic Digital Blood Smear Analysis', 'Norma Diagnostika', 1, 1750000, 1750000),
(15, '2022060934', 4, 'Microscope Automatic Digital Blood Smear Analysis', 'Norma Diagnostika', 2, 1750000, 3500000),
(16, '2022060934', 1, 'Semi-Automatic Urine Analyzer', '77 Elektronika', 2, 700000, 1400000);

--
-- Triggers `detail`
--
DELIMITER $$
CREATE TRIGGER `gaTransaksi` AFTER DELETE ON `detail` FOR EACH ROW BEGIN 
	UPDATE stok SET jumlahnya = jumlahnya + OLD.jumlah1
    WHERE idstok = OLD.idstok;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jadiTransaksi` AFTER INSERT ON `detail` FOR EACH ROW BEGIN 
	UPDATE stok SET jumlahnya = jumlahnya - NEW.jumlah1
    WHERE idstok = NEW.idstok;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `idgaji` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`idgaji`, `id`, `tgl`, `total`) VALUES
(1, 4, '2021-07-23', 600000),
(2, 8, '2021-08-04', 600000),
(3, 9, '2022-02-09', 200000),
(4, 10, '2022-02-11', 333330),
(5, 4, '2022-02-09', 222222),
(6, 9, '2022-01-04', 222222),
(7, 9, '2022-02-09', 210000);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idjadwal` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `idbarang` int(2) NOT NULL,
  `instansi` text NOT NULL,
  `tgl` date NOT NULL,
  `cara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idjadwal`, `id`, `idbarang`, `instansi`, `tgl`, `cara`) VALUES
(2, 9, 9, 'RSUD Idaman Banjarbaru', '2022-02-06', 'Di lap'),
(5, 9, 8, 'R.PERMATA BUNDA', '2022-02-22', 'di keringkan'),
(6, 9, 7, 'rs.ayudia', '2022-02-24', 'di keringkan'),
(7, 9, 9, 'Rs.raza', '2022-06-09', 'Di lap basah dan kering, di sapu bulu');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `idmasuk` int(5) NOT NULL,
  `idstok` int(5) NOT NULL,
  `tgl` datetime NOT NULL,
  `distributor` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`idmasuk`, `idstok`, `tgl`, `distributor`, `jumlah`, `harga`) VALUES
(4, 2, '2022-06-08 01:18:00', 'PT. BTL Indonesia', 2, 500000),
(5, 4, '2022-06-08 07:31:00', 'PT. BTL Indonesia', 3, 850000),
(6, 3, '2022-06-05 07:33:00', 'PT. Sumber Mandiri Alkestron', 10, 750000),
(7, 1, '2022-06-01 07:34:00', 'PT. Kalmed Manufaktur Indonesia', 3, 500000),
(8, 2, '2022-06-03 07:34:00', 'PT. Sumber Mandiri Alkestron', 5, 600000),
(11, 3, '2022-06-09 09:30:00', 'PT. Sumber Mandiri Alkestron', 2, 150000),
(12, 1, '2022-06-09 09:33:00', 'PT. Kalmed Manufaktur Indonesia', 6, 2000000),
(13, 4, '2022-06-09 09:47:00', 'PT. BTL Indonesia', 3, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `idproses` int(5) NOT NULL,
  `notransaksi` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `ket` varchar(100) NOT NULL,
  `biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`idproses`, `notransaksi`, `waktu`, `ket`, `biaya`) VALUES
(1, '2022060839', '2022-06-01 02:53:00', 'Pembersihan Alat Medis pada bagian fisik dan mekanik', 500000),
(2, '2022060839', '2022-06-01 08:09:00', 'Small Repair', 750000),
(3, '2022060839', '2022-06-01 10:10:00', 'Kalibrasi Internal', 500000),
(4, '2022060839', '2022-06-02 08:10:00', 'Selesai', 0),
(5, '2022060812', '2022-06-02 23:12:00', 'Pembersihan Alat Medis pada bagian fisik dan mekanik', 400000),
(6, '2022060812', '2022-06-03 23:12:00', 'Pengecekkan serta oergantian sekring apabila rusak/bermasalah.', 100000),
(7, '2022060812', '2022-06-04 17:13:00', 'Ganti suku cadang', 60000),
(8, '2022060812', '2022-06-04 20:14:00', 'Selesai', 0),
(9, '2022060822', '2022-06-09 02:16:00', 'Pemeliharaan dan Perawatan suku cadang', 250000),
(10, '2022060822', '2022-06-09 08:17:00', 'Pelumasan bagian mekanik alat yang bergerak', 200000),
(11, '2022060822', '2022-06-09 10:17:00', 'Selesai', 0),
(12, '2022060841', '2022-06-03 23:21:00', 'Selesai', 2000000),
(13, '2022060808', '2022-06-05 23:22:00', 'Cleaning', 300000),
(14, '2022060808', '2022-06-06 23:22:00', 'Selesai', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qc`
--

CREATE TABLE `qc` (
  `idqc` int(5) NOT NULL,
  `tglqc` datetime NOT NULL,
  `idmasuk` int(5) NOT NULL,
  `idstok` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `kuantiti` int(5) NOT NULL,
  `mekanik1` enum('0','1') NOT NULL,
  `mekanik2` enum('0','1') NOT NULL,
  `mekanik3` enum('0','1') NOT NULL,
  `mekanik4` enum('0','1') NOT NULL,
  `mekanik5` enum('0','1') NOT NULL,
  `mekanik6` enum('0','1') NOT NULL,
  `mekanik7` enum('0','1') NOT NULL,
  `mekanik8` enum('0','1') NOT NULL,
  `proses1` enum('0','1') NOT NULL,
  `proses2` enum('0','1') NOT NULL,
  `proses3` enum('0','1') NOT NULL,
  `proses4` enum('0','1') NOT NULL,
  `proses5` enum('0','1') NOT NULL,
  `proses6` enum('0','1') NOT NULL,
  `proses7` enum('0','1') NOT NULL,
  `proses8` enum('0','1') NOT NULL,
  `proses9` enum('0','1') NOT NULL,
  `proses10` enum('0','1') NOT NULL,
  `proses11` enum('0','1') NOT NULL,
  `proses12` enum('0','1') NOT NULL,
  `listrik` text NOT NULL,
  `grounding` text NOT NULL,
  `kesimpulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qc`
--

INSERT INTO `qc` (`idqc`, `tglqc`, `idmasuk`, `idstok`, `id`, `kuantiti`, `mekanik1`, `mekanik2`, `mekanik3`, `mekanik4`, `mekanik5`, `mekanik6`, `mekanik7`, `mekanik8`, `proses1`, `proses2`, `proses3`, `proses4`, `proses5`, `proses6`, `proses7`, `proses8`, `proses9`, `proses10`, `proses11`, `proses12`, `listrik`, `grounding`, `kesimpulan`) VALUES
(8, '2022-06-08 16:59:00', 5, 4, 17, 3, '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '0', '1', '0', '0', '0', '1', '1', '1', '1', 'ok', 'ok', 'Baik'),
(10, '2022-06-09 09:30:00', 11, 3, 17, 2, '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', 'ok', 'ok', 'Baik'),
(11, '2022-06-09 09:35:00', 12, 1, 17, 6, '1', '1', '1', '0', '0', '0', '1', '1', '0', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', 'ok', 'ok', 'Baik'),
(12, '2022-06-09 09:48:00', 13, 4, 17, 3, '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '0', '0', '1', '1', '0', '0', 'ok', 'ok', 'Baik');

--
-- Triggers `qc`
--
DELIMITER $$
CREATE TRIGGER `deleteQC` AFTER DELETE ON `qc` FOR EACH ROW BEGIN 
	IF(OLD.kesimpulan = 'Baik') THEN
		UPDATE stok SET jumlahnya = jumlahnya - OLD.kuantiti
    	WHERE idstok = OLD.idstok;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertQC` AFTER INSERT ON `qc` FOR EACH ROW BEGIN
	IF(NEW.kesimpulan = 'Baik') THEN
		UPDATE stok SET jumlahnya = jumlahnya + NEW.kuantiti 
        WHERE idstok = NEW.idstok;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateQC` AFTER UPDATE ON `qc` FOR EACH ROW BEGIN
	IF(NEW.kesimpulan = 'Baik') THEN
		UPDATE stok SET 
        	jumlahnya = jumlahnya + OLD.kuantiti 
    	WHERE idstok = NEW.idstok;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `servicereport`
--

CREATE TABLE `servicereport` (
  `id` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `ket` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicereport`
--

INSERT INTO `servicereport` (`id`, `tgl`, `ket`, `file`) VALUES
(2, '2022-02-06', '-', '1773294.11672.1.PB.pdf'),
(4, '2022-02-11', 'Hasil Service', '4013294.11672.1.PB.pdf'),
(5, '2022-02-10', 'Hasil Service', '821contoh.kwitansi.kosong.doc.docx'),
(6, '2022-02-18', 'Hasil Service', '945informasi.penjelasan.tatacara.ujian...1..docx'),
(7, '2022-02-15', 'Hasil Service', '696informasi.penjelasan.tatacara.ujian...1..docx');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `idsparepart` int(5) NOT NULL,
  `idproses` int(5) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `barangnya` varchar(100) NOT NULL,
  `jumlahnya` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`idsparepart`, `idproses`, `waktu`, `barangnya`, `jumlahnya`) VALUES
(2, 7, '2022-06-17 03:35:28', 'Air Tube Set', 130),
(3, 10, '2022-06-17 03:36:12', 'Lubricant Oil', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `idstok` int(5) NOT NULL,
  `namastok` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlahnya` int(5) NOT NULL,
  `harganya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`idstok`, `namastok`, `merk`, `tipe`, `jumlahnya`, `harganya`) VALUES
(1, 'Semi-Automatic Urine Analyzer', '77 Elektronika', 'LabUReader Plus', 8, 700000),
(2, 'Full Automatic Urine Analyzer 2nd Generation 100 t', '77 Elektronika', 'iSed', 4, 2000000),
(3, 'Full Automatic PCR', 'Sansure', 'Multi+', 6, 2500000),
(4, 'Microscope Automatic Digital Blood Smear Analysis', 'Norma Diagnostika', 'Elite InGenius', 3, 1750000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `notransaksi` varchar(15) NOT NULL,
  `id` int(5) NOT NULL,
  `tgl` datetime NOT NULL,
  `total` double NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`notransaksi`, `id`, `tgl`, `total`, `catatan`) VALUES
('2022060801', 5, '2022-06-07 22:42:00', 4600000, '-'),
('2022060806', 3, '2022-06-08 20:54:00', 5000000, '-'),
('2022060814', 14, '2022-06-09 09:52:00', 7700000, '-'),
('2022060841', 5, '2022-06-01 22:53:00', 1750000, '-'),
('2022060848', 12, '2022-06-06 22:39:00', 4000000, '-'),
('2022060934', 14, '2022-06-09 09:43:00', 4900000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jk` enum('Laki-Laki','Wanita') NOT NULL,
  `ttl` varchar(80) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `jk`, `ttl`, `telp`, `alamat`, `tugas`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', '', '', '', '', '', 'Admin'),
(3, 'RSUD Idaman Banjarbaru', 'rsudidaman', 'rsudidaman', '', 'dr. Indra Wijaya Himawan, Sp.A', '6289172314213', 'Jl. Trikora No.115, Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721, Indonesia', '', 'Pelanggan'),
(4, 'Nida', 'nida', 'nida', 'Wanita', 'betulbanar, 15 Mei 1999', '089666714255', 'hantu mariaban', 'CS', 'Karyawan'),
(5, 'Rsud Ansari Saleh', 'ansarisaleh', 'ansarisaleh', '', 'dr. Tanto Raharjo, Sp.B', '6282172614255', 'Jl. Brigjend Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70125, Indonesia', '', 'Pelanggan'),
(8, 'Yudi', 'yudi', 'amel', 'Laki-Laki', 'Banjarbaru, 12 Agustus 2000', '089896716733', 'Banjarbaru', 'Service', 'Karyawan'),
(9, 'Mamat', 'mamat', 'mamat', 'Laki-Laki', 'Martapura, 15 Oktober 1997', '089656714297', 'Martapura', 'Petugas', 'Karyawan'),
(10, 'setiawan', 'setiawan', 'setiawan', 'Laki-Laki', 'sungai tabuk 23 desember 1999', '082154216289', 'mtp', 'kepala bidang', 'Karyawan'),
(11, 'didi julkurnain', 'kodok1', 'kodok1', 'Laki-Laki', 'sungai tabuk 23 desember 1999', '082154216289', 'mtp', 'kepala bidang', 'Karyawan'),
(12, 'Rs.Raza', 'raza2', 'raza2', 'Laki-Laki', 'yusman', '082154216289', 'mtp', '', 'Pelanggan'),
(13, 'RS. Ayudia', 'kodok3', 'kodok3', 'Laki-Laki', 'yusman', '082154216289', 'bjb', '', 'Pelanggan'),
(14, 'R.PERMATA BUNDA', 'kodok4', 'kodok4', 'Laki-Laki', 'yusman', '0805161629044', 'Jl. Trikora No.115, Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721, Indonesia', '', 'Pelanggan'),
(15, 'awan', 'marno', 'marno', 'Laki-Laki', 'sungai tabuk 23 desember 1999', '082154216289', 'mtp', 'kepala bidang', 'Karyawan'),
(17, 'Willy Ardihamsyah', 'wilwil', 'wilwil', 'Laki-Laki', 'Banjarbaru, 10 April 1998', '08718852731', 'Banjarbaru', 'Teknisi', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `dataservice`
--
ALTER TABLE `dataservice`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `idstok` (`idstok`),
  ADD KEY `notransaksi` (`notransaksi`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`idgaji`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idjadwal`),
  ADD KEY `id` (`id`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`,`idstok`),
  ADD KEY `idstok` (`idstok`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`idproses`),
  ADD KEY `notransaksi` (`notransaksi`);

--
-- Indexes for table `qc`
--
ALTER TABLE `qc`
  ADD PRIMARY KEY (`idqc`),
  ADD KEY `idmasuk` (`idmasuk`),
  ADD KEY `idstok` (`idstok`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `servicereport`
--
ALTER TABLE `servicereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`idsparepart`),
  ADD KEY `idproses` (`idproses`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idstok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `iddetail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `idgaji` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idjadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `idproses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `qc`
--
ALTER TABLE `qc`
  MODIFY `idqc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `servicereport`
--
ALTER TABLE `servicereport`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `idsparepart` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `idstok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataservice`
--
ALTER TABLE `dataservice`
  ADD CONSTRAINT `dataservice_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`notransaksi`) REFERENCES `transaksi` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`idstok`) REFERENCES `stok` (`idstok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`idstok`) REFERENCES `stok` (`idstok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proses`
--
ALTER TABLE `proses`
  ADD CONSTRAINT `proses_ibfk_1` FOREIGN KEY (`notransaksi`) REFERENCES `dataservice` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qc`
--
ALTER TABLE `qc`
  ADD CONSTRAINT `qc_ibfk_1` FOREIGN KEY (`idmasuk`) REFERENCES `masuk` (`idmasuk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD CONSTRAINT `sparepart_ibfk_1` FOREIGN KEY (`idproses`) REFERENCES `proses` (`idproses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
