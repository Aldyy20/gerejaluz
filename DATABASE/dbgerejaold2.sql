-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `gambar`) VALUES
(64, 'Lomba', 'Lomba Volly Antar Rayon', '<p>datang dan ramaikan lomba volly antar rayon bertempat di halaman gereja</p>\r\n', '2024-11-19', 'Bendahara Gereja', 'aktif', ''),
(65, 'Kerja Bakti', 'Kerja Bakti di Gereja', '<p>akan dilaksanakan kegiatan kerja bakti di halaman gereja&nbsp;diharapkan agar jemaat bisa mengikuti</p>\r\n', '2024-11-19', 'Sekretaris Gereja', 'aktif', 'kerja bakti.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `data_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `data_file`) VALUES
(1, 'IBADAH UTAMA', 'Jadwal Ibadah Utama', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:80px; width:383px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>07:00-09:00 WITA</td>\r\n			<td>IBADAH UTAMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Tidak terdapat ibadah ke-2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Kami Mengharapkan Kedatangan Anda Untuk Tuhan</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-09-16', 'Sekretaris Gereja', 'Aktif', ''),
(3, 'IBADAH RUMAH TANGGA', 'Jadwal Ibadah Rumah Tangga', '', '2018-09-16', 'Admin', 'Akif', ''),
(4, 'IBADAH PEMUDA', 'Jadwal Ibadah Pemuda', '', '2018-09-16', 'Admin', 'Akif', ''),
(58, 'IBADAH KAUM BAPAK', 'Ibadah Kaum Bapak', '', '2018-09-16', 'Admin', 'Akif', ''),
(59, 'IBADAH KAUM  IBU', 'Ibadah Kaum Ibu', '', '2018-09-16', 'Admin', 'Aktif', ''),
(60, 'IBADAH LANSIA', 'Jadwal Ibadah Lansia', '', '2018-09-17', 'Admin', 'Aktif', ''),
(61, 'SEKOLAH MINGGU', 'Jadwal Sekolah Minggu', ' ', '2024-11-02', 'Admin', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_folio`
--

CREATE TABLE `tbl_folio` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_folio`
--

INSERT INTO `tbl_folio` (`kode`, `nama`, `alamat`, `gambar`) VALUES
(16, 'gambar 2', '#', 'cara mudah hosting web site layanan coding delis.png'),
(17, 'Gambar3', '#', 'penduduk.jpg'),
(18, 'Gambar 4', '#', 'gambar.jpg'),
(19, 'Gambar ke 4', '#', 'layanan coding belajar html.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_janji`
--

CREATE TABLE `tbl_janji` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `handphone` varchar(20) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `tanggal_regis` date DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jemaat`
--

CREATE TABLE `tbl_jemaat` (
  `kode` int(11) NOT NULL,
  `katagori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jemaat`
--

INSERT INTO `tbl_jemaat` (`kode`, `katagori`, `jumlah`) VALUES
(1, 'Pendeta', 1),
(2, 'Jemaat Pria', 100),
(3, 'Jemaat Wanita', 100),
(4, 'Total Jemaat', 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `laporan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`kode`, `nama`, `tanggal`, `laporan`) VALUES
(1, 'Laporan Keuangan Bulan Januari 2024', '2024-11-02', 'krs.pdf'),
(2, 'Laporan Keuangan Bulan Februari 2024', '2024-11-02', 'myfile.pdf'),
(3, 'Laporan Keuangan Bulan Maret 2024', '2024-11-03', 'paper.pdf'),
(5, 'Laporan Keuangan Bulan November 2024', '2024-11-19', 'paper prims dan kruskal.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mjh`
--

CREATE TABLE `tbl_mjh` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mjh`
--

INSERT INTO `tbl_mjh` (`kode`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Pnt. Allan Leonard Nau', 'Wakil Ketua Majelis', 'allan.jpg'),
(2, 'Pnt. Cengtya, S.Si.', 'Sekretaris 1', 'cengtya.jpg'),
(3, 'Pnt. Gregorius Bana, M.Pd.', 'Sekretaris 2', 'gregorius.jpg'),
(4, 'Pnt. Evi Suryani Kolis-Naklui', 'Bendahara 1', 'evi.jpg'),
(5, 'Pnt. Aksaribka Nau, S.E.', 'Bendahara 2', 'aksaribka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendeta`
--

CREATE TABLE `tbl_pendeta` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pendeta`
--

INSERT INTO `tbl_pendeta` (`kode`, `nama`, `foto`) VALUES
(1, 'Pdt. Marlin Ellen Pie Saiya-Bani, S.Th.', 'pendeta1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistik`
--

CREATE TABLE `tbl_statistik` (
  `kode` int(11) NOT NULL,
  `pendeta` int(10) DEFAULT NULL,
  `jemaatpria` int(10) DEFAULT NULL,
  `jemaatwanita` int(10) DEFAULT NULL,
  `jumlahjemaat` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_statistik`
--

INSERT INTO `tbl_statistik` (`kode`, `pendeta`, `jemaatpria`, `jemaatwanita`, `jumlahjemaat`) VALUES
(1, 1, 100, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_total`
--

CREATE TABLE `tbl_total` (
  `kode` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_total`
--

INSERT INTO `tbl_total` (`kode`, `total`) VALUES
(1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kode` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode`, `user_name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`kode`, `nama`, `alamat`) VALUES
(3, 'Video Lagu - Lagu Rohani', 'kvF5QsrR1Z0'),
(4, 'Lagu-Lau Rohani 2', 'kvF5QsrR1Z0'),
(5, 'Video Ke COBA', 'cq4SUrLJfN8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_janji`
--
ALTER TABLE `tbl_janji`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_mjh`
--
ALTER TABLE `tbl_mjh`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_total`
--
ALTER TABLE `tbl_total`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_janji`
--
ALTER TABLE `tbl_janji`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_mjh`
--
ALTER TABLE `tbl_mjh`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
