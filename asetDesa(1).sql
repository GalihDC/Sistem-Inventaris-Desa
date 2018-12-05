-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 07:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asetDesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jn_klm` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jn_klm`, `tgl_lahir`, `alamat`, `no_tlp`, `username`, `pwd`) VALUES
('A200498649', 'Farel Iqbal Gozali', 'Laki - Laki', '20 April 1998', 'Pandeyan Rt 01 Rw 01 Matesih Karanganyar', '085634597547', 'farel', 'farel123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `no_barang` char(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `blm_kembali` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no_barang`, `nama_barang`, `dipinjam`, `blm_kembali`, `stok`, `total`, `kategori`) VALUES
('B019807705', 'Meja Saji', 0, 0, 4, 4, 1),
('B042508620', 'Meja', 0, 0, 30, 30, 2),
('B079579114', 'Teko Air', 0, 0, 15, 15, 1),
('B104167348', 'tambah', 0, 0, 0, 45, 2),
('B114491376', 'Tikar', 0, 0, 20, 20, 2),
('B131808393', 'Kain Dekor', 0, 0, 20, 20, 2),
('B147179781', 'Kipas Angin (Blower)', 0, 0, 5, 5, 2),
('B179322423', 'Wajan Besar', 0, 0, 4, 4, 1),
('B187292086', 'Ketel', 0, 0, 8, 8, 1),
('B205181830', 'Lampu LED 45 Watt', 0, 0, 10, 10, 2),
('B216703232', 'Tangga Lipat', 0, 0, 3, 3, 2),
('B217538968', 'Tutup Gelas', 0, 0, 3000, 3000, 1),
('B224243327', 'Gelas', 0, 0, 3000, 3000, 1),
('B229895776', 'Mangkuk', 0, 0, 1000, 1000, 1),
('B239891052', 'Mangkuk Es', 0, 0, 3000, 3000, 1),
('B293181347', 'Piring Snack', 0, 0, 3000, 3000, 1),
('B338858740', 'Lampu Panggung', 0, 0, 4, 4, 2),
('B391489913', 'Garpu', 0, 0, 3000, 3000, 1),
('B399529321', 'Piring', 0, 0, 3000, 3000, 1),
('B420512437', 'Kompor', 0, 0, 4, 4, 1),
('B435223195', 'Lampu Tembak Dekor', 0, 0, 5, 5, 2),
('B483780843', 'Karpet Hitam', 0, 0, 10, 10, 2),
('B510991999', 'Panci Besar', 0, 0, 5, 5, 1),
('B594392207', 'Termos Air', 0, 0, 5, 5, 1),
('B670221814', 'Tratak', 0, 0, 20, 20, 2),
('B687446925', 'Sound Sytem', 0, 0, 2, 2, 2),
('B714207436', 'Kajang Set', 0, 0, 3, 3, 2),
('B724341338', 'Seng', 0, 0, 50, 50, 2),
('B793456781', 'Termos Nasi', 0, 0, 5, 5, 1),
('B836078554', 'Sendok Es', 0, 0, 3000, 3000, 1),
('B882923469', 'Taplak Meja', 0, 0, 30, 30, 2),
('B887787532', 'Gas', 0, 0, 4, 4, 1),
('B910808186', 'Kursi', 0, 0, 2000, 2000, 2),
('B938423099', 'Nampan', 0, 0, 25, 25, 1),
('B990139400', 'Sendok', 0, 0, 4000, 4000, 1),
('B996199932', 'Karpet Merah', 0, 0, 10, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` int(11) NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `id_member` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jn_klm` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_member`, `nama`, `jn_klm`, `tgl_lahir`, `alamat`, `no_tlp`, `username`, `pwd`) VALUES
('M021289918', 'Dwi Caksono Budi ', 'Laki - Laki', '02 Desember 1989', 'Sabrang Kulon Rt 02 Rw 04 Matesih Karanganyar', '085120755081', 'dwi', '123'),
('M030192300', 'Nur Aji Salim ', 'Laki - Laki', '03 Januari 1992', 'Sabrang Kulon Rt 01 Rw 03 Matesih Karanganyar', '085204599142', 'nur', '123'),
('M050391090', 'Hidayat Putra Abdul ', 'Laki - Laki', '05 Maret 1991', 'Cangkring Rt 03 Rw 02 Matesih Karanganyar', '081380854848', 'hidayat', '123'),
('M070590481', 'Ali Aji Agung ', 'Laki - Laki', '07 Mei 1990', 'Moyoretno Rt 07 Rw 06 Matesih Karanganyar', '081966588175', 'ali', '123'),
('M110390060', 'Kurnia Alam Salim ', 'Laki - Laki', '11 Maret 1990', 'Banaran Rt 08 Rw 06 Matesih Karanganyar', '081206612167', 'kurnia', '123'),
('M110887838', 'Putri Sekar ', 'Perempuan', '11 Agustus 1987', 'Kalongan Rt 04 Rw 10 Matesih Karanganyar', '081821687816', 'putri', '123'),
('M110888701', 'Farel Kurnia Putra ', 'Laki - Laki', '11 Agustus 1988', 'Kuncung Rt 01 Rw 06 Matesih Karanganyar', '089965528477', 'farel', '123'),
('M110987973', 'Budi Ragil Hidayat ', 'Laki - Laki', '11 September 1987', 'Kalongan Rt 02 Rw 05 Matesih Karanganyar', '089810852989', 'budi', '123'),
('M120488403', 'Kurnia Zaenal Farel ', 'Laki - Laki', '12 April 1988', 'Banaran Rt 09 Rw 04 Matesih Karanganyar', '085991148228', 'kurnia', '123'),
('M130587366', 'Alam Sandi ', 'Laki - Laki', '13 Mei 1987', 'Banaran Rt 01 Rw 08 Matesih Karanganyar', '081681936416', 'alam', '123'),
('M161187969', 'Ainun Khansa Jaenab ', 'Perempuan', '16 November 1987', 'Panderejo Rt 10 Rw 03 Matesih Karanganyar', '081480605470', 'ainun', '123'),
('M161189127', 'Hikmah Intan Melody ', 'Perempuan', '16 November 1989', 'Sidodadi Rt 06 Rw 08 Matesih Karanganyar', '083515110899', 'hikmah', '123'),
('M170187640', 'Eko Ragil Salim ', 'Laki - Laki', '17 Januari 1987', 'Kuncung Rt 04 Rw 05 Matesih Karanganyar', '083062845729', 'eko', '123'),
('M170287963', 'Zulfa Khansa ', 'Perempuan', '17 Februari 1987', 'Lor Pasar Rt 09 Rw 07 Matesih Karanganyar', '089175782132', 'zulfa', '123'),
('M190682116', 'Melody Shintia Sari ', 'Perempuan', '19 Juni 1982', 'Panderejo Rt 07 Rw 08 Matesih Karanganyar', '082279916610', 'melody', '123'),
('M210289918', 'Raisa Shintia Hikmah ', 'Perempuan', '21 Februari 1989', 'Moyoretno Rt 02 Rw 05 Matesih Karanganyar', '083915152466', 'raisa', '123'),
('M210885927', 'Ali Dwi Putra ', 'Laki - Laki', '21 Agustus 1985', 'Panderejo Rt 10 Rw 05 Matesih Karanganyar', '085505735420', 'ali', '123'),
('M210890168', 'Bella Sari Melody ', 'Perempuan', '21 Agustus 1990', 'Mranggen Rt 04 Rw 05 Matesih Karanganyar', '081548354707', 'bella', '123'),
('M211289497', 'Ali Alam Hidayat ', 'Laki - Laki', '21 Desember 1989', 'Moyoretno Rt 05 Rw 01 Matesih Karanganyar', '082069769527', 'ali', '123'),
('M220187322', 'Hendra Eko Edo ', 'Laki - Laki', '22 Januari 1987', 'Cangkring Rt 02 Rw 05 Matesih Karanganyar', '085045597174', 'hendra', '123'),
('M220686257', 'Abdul Bayu Agung ', 'Laki - Laki', '22 Juni 1986', 'Kuncung Rt 09 Rw 08 Matesih Karanganyar', '089237135683', 'abdul', '123'),
('M220991993', 'Elsa Bella Zulfa ', 'Perempuan', '22 September 1991', 'Sidodadi Rt 09 Rw 03 Matesih Karanganyar', '083329311181', 'elsa', '123'),
('M240291404', 'Intan Bella Melody ', 'Perempuan', '24 Februari 1991', 'Banaran Rt 03 Rw 09 Matesih Karanganyar', '082721210395', 'intan', '123'),
('M241086076', 'Sandi Dwi Bima ', 'Laki - Laki', '24 Oktober 1986', 'Krapyak Rt 02 Rw 05 Matesih Karanganyar', '081142271411', 'sandi', '123'),
('M250390044', 'Ali Abdul Dwi ', 'Laki - Laki', '25 Maret 1990', 'Pandeyan Rt 01 Rw 01 Matesih Karanganyar', '083665955724', 'ali', '123'),
('M250986897', 'Nur Caksono Hendra ', 'Laki - Laki', '25 September 1986', 'Sidodadi Rt 05 Rw 05 Matesih Karanganyar', '089518570960', 'nur', '123'),
('M251089647', 'Abdul Hendra Ghozali ', 'Laki - Laki', '25 Oktober 1989', 'Sidodadi Rt 06 Rw 08 Matesih Karanganyar', '083120852883', 'abdul', '123'),
('M260485416', 'Bella Raisa Mawar ', 'Perempuan', '26 April 1985', 'Moyoretno Rt 03 Rw 05 Matesih Karanganyar', '081874568040', 'bella', '123'),
('M260883776', 'Eko Kurnia ', 'Laki - Laki', '26 Agustus 1983', 'Kalongan Rt 10 Rw 04 Matesih Karanganyar', '089798349903', 'eko', '123'),
('M270291727', 'Eko Ali Budi ', 'Laki - Laki', '27 Februari 1991', 'Kalongan Rt 06 Rw 02 Matesih Karanganyar', '081642601629', 'eko', '123');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id_notif` int(11) NOT NULL,
  `isi_notif` varchar(100) NOT NULL,
  `id_member` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `no_pinjaman` char(10) NOT NULL,
  `id_member` char(10) NOT NULL,
  `no_urut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`no_pinjaman`, `id_member`, `no_urut`) VALUES
('P363445195', 'M130587366', '2018-12-0406:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam_has_barang`
--

CREATE TABLE `peminjam_has_barang` (
  `id` int(11) NOT NULL,
  `no_pinjaman` char(10) NOT NULL,
  `no_barang` char(10) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `jml_pinjam` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam_has_barang`
--

INSERT INTO `peminjam_has_barang` (`id`, `no_pinjaman`, `no_barang`, `tgl_pinjam`, `tgl_kembali`, `jml_pinjam`, `status`) VALUES
(18, 'P363445195', 'B229895776', '04 Desember 2018', '04 Desember 2018', 200, 0),
(19, 'P363445195', 'B239891052', '04 Desember 2018', '04 Desember 2018', 200, 0),
(20, 'P363445195', 'B293181347', '04 Desember 2018', '04 Desember 2018', 200, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no_barang`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`no_pinjaman`),
  ADD KEY `memberFK` (`id_member`);

--
-- Indexes for table `peminjam_has_barang`
--
ALTER TABLE `peminjam_has_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangFK` (`no_barang`),
  ADD KEY `pinjamanFK` (`no_pinjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjam_has_barang`
--
ALTER TABLE `peminjam_has_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `memberFK` FOREIGN KEY (`id_member`) REFERENCES `members` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjam_has_barang`
--
ALTER TABLE `peminjam_has_barang`
  ADD CONSTRAINT `barangFK` FOREIGN KEY (`no_barang`) REFERENCES `barang` (`no_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjamanFK` FOREIGN KEY (`no_pinjaman`) REFERENCES `peminjam` (`no_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
