-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 01:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anak_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `idFasilitas` int(11) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `barangDalam` varchar(100) NOT NULL,
  `kamarMandi` char(10) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `idKost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`idFasilitas`, `wifi`, `barangDalam`, `kamarMandi`, `ac`, `idKost`) VALUES
(7, 0, 'bed, almari pakaian, meja belajar, sekamar berdua\r\n        ', 'luar', 0, 1),
(8, 1, 'bed, almari pakaian, meja belajar, sekamar berdua\r\n  ', 'dalam', 0, 2),
(9, 0, ' bed, almari pakaian, meja beajar\r\n', 'luar', 0, 3),
(10, 1, ' bed, almari pakaian, tv\r\n', 'dalam', 0, 4),
(11, 0, ' bed, almari pakaian\r\n', 'luar', 0, 5),
(12, 1, ' bed, lamari pakaian, tv\r\n', 'luar', 0, 6),
(13, 0, ' bed, almari pakaian\r\n', 'luar', 0, 7),
(14, 1, 'bed, almari pakaian, meja belajar,\r\n', 'dalam', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `idKost` int(11) NOT NULL,
  `namaKost` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `noTelp` bigint(15) NOT NULL,
  `namaPemilik` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` char(10) NOT NULL,
  `tersedia` tinyint(1) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`idKost`, `namaKost`, `alamat`, `noTelp`, `namaPemilik`, `ukuran`, `deskripsi`, `jenis`, `tersedia`, `harga`, `gambar`) VALUES
(1, 'Kost Yurona', 'Jebres Surakarta', 81391423678, 'Sumarmo', '3.25 x 2.7', 'Batasan jam kunjung jam 10 malam, harga sudah termasuk listrik, ada petugas kebersihan\r\n           ', 'pria', 2, 450000, 'id1.jpg'),
(2, 'Kost Putri krambil', 'Jebres Surakarta', 85263835412, 'Bu Warni', '3x4', 'Tidak ada batasan jam kunjung, tamu menginap tidak dikenai biaya tambahan\r\n   ', 'wanita', 5, 550000, 'id2.jpg'),
(3, 'Kost Pak Parso', 'Jebres Surakarta', 81392456782, 'Pak Parso', '2x2.5', 'Tidak ada batasan jam kunjung, harga sudah termasuk listrik, ada petugas kebersihan kos, akses 24 jam, tamu menginap tidak ada tambahan biaya\r\n ', 'pria', 3, 350000, 'id3.jpg'),
(4, 'Kost Qonita', 'Jebres Surakarta', 8567898734, 'Dewi Ratna', '2x3', 'Kost khusus putri muslim, listrik meteran tiap kamar\r\n', 'wanita', 4, 500000, 'id4.jpg'),
(5, 'Kost Berkat Abadi 2', 'Jebres Surakarta', 8564201198, 'Roni dian', '3x4', 'Tambahan iuran biaya listrik jika membawa tv, komputer, lemari es dll\r\n ', 'pria', 2, 400000, 'id5.jpg'),
(6, 'Kost Imarah', 'Jebres Surakarta', 8345672345, 'Yusuf Ardi', '3 x 3.5', 'Belum termasuk listrik, batasan jam kunjung sampai jam 10 malam, wifi membayar iuran\r\n ', 'pria', 3, 600000, 'id6.jpg'),
(7, 'Kost Milla', 'Jebres Surakarta', 8976523421, 'Millaa', '3x3', 'Sudah termasuk listrik, membawa alat elektronik besar seperti kulkas ada tambahan biaya\r\n ', 'wanita', 2, 350000, 'id7.jpg'),
(8, 'Kost Glory', 'Jebres Surakarta', 812345678, 'Gorraa', '3x4', 'tidak termasuk biaya listrik, hanya 500m dari pintu belakang UNS\r\n ', 'wanita', 3, 650000, 'id8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipe` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Tipe`) VALUES
('fandy', 'fandy123', 'admin'),
('userid1', 'user1', 'user'),
('userid2', 'user2', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idTransaksi` int(11) NOT NULL,
  `tglOrder` date NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idKost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idTransaksi`, `tglOrder`, `harga`, `status`, `idUser`, `idKost`) VALUES
(2, '2018-06-03', 600000, 0, 2, 6),
(3, '2018-12-19', 650000, 1, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `jenisKelamin` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `noTelp` bigint(15) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `jenisKelamin`, `nama`, `email`, `noTelp`, `Username`) VALUES
(1, 'pria', 'user nomer 1', 'user1@gmail.com', 627166156, 'userid1'),
(2, 'wanita', 'user nomber 2', 'user2@gmail.com', 99, 'userid2');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `idKost` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`idKost`, `idUser`) VALUES
(1, 1),
(1, 2),
(6, 2),
(8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`idFasilitas`),
  ADD KEY `idKost` (`idKost`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`idKost`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idKost` (`idKost`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idKost` (`idKost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `idFasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `idKost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`idKost`) REFERENCES `kost` (`idKost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`idKost`) REFERENCES `kost` (`idKost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `login` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`idKost`) REFERENCES `kost` (`idKost`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
