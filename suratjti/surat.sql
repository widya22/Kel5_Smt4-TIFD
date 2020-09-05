-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 08:33 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(25) NOT NULL,
  `NAMA_ADMIN` varchar(50) DEFAULT NULL,
  `PRODI` char(3) NOT NULL,
  `HP` char(13) NOT NULL,
  `PASSWORD_ADM` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `PRODI`, `HP`, `PASSWORD_ADM`) VALUES
('adminjti1', ' Novi Tri Kurniawati, A.Md', '', '088998991234', 'fcdbe828ad3de553a0ca5aa203c06d7b'),
('adminjti2', 'Indriana Rahmawati', '', '081287765432', '592317e4b5c97de372b019702fbb2fcb'),
('adminjti3', 'Adri Motorshop', 'TKK', '0222555222', '359f056ba034c3a81da6c21d5f1463cf'),
('adminjti4', 'Lucas', 'TKK', '0222555222', '8c6f98e539f071e811d119c2dcdf20bb'),
('adminjti5', 'SEKALI', 'MIF', '0222555222', 'b62170b560e3eb554da5351d714da38f'),
('super', 'SuperAdminMM', '', '0255', '1b3231655cebb7a1f783eddf27d254ca');

-- --------------------------------------------------------

--
-- Table structure for table `detail_surat`
--

CREATE TABLE `detail_surat` (
  `ID_SURAT` varchar(32) DEFAULT NULL,
  `ANGGOTA_MHS` varchar(50) DEFAULT NULL,
  `NIM_ANGGOTA` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_surat`
--

INSERT INTO `detail_surat` (`ID_SURAT`, `ANGGOTA_MHS`, `NIM_ANGGOTA`) VALUES
('2020-06-20 21:57:17', 'Ferdiansyah Rifqika Evanta', 'E41181181'),
('2020-06-20 21:59:39', 'Ferdiansyah Rifqika Evanta', 'E41181181'),
('2020-06-20 21:59:39', 'Ainun Nella', 'E41181273'),
('2020-06-20 22:06:53', 'Ferdiansyah Rifqika Evanta', 'E41181181'),
('2020-06-20 22:06:53', 'Ainun Nella', 'E41181273'),
('38164248477de4f57b34e466eca9e596', 'Ferdiansyah Rifqika Evanta', 'E41181181'),
('38164248477de4f57b34e466eca9e596', 'Ainun Nella', 'E41181273'),
('2e1226bd82a6a23abd41933dcbb6e7f6', 'Ainun Nella', 'E41181273'),
('2e1226bd82a6a23abd41933dcbb6e7f6', 'Ferdiansyah R. Evanta', 'E41181181'),
('2e1226bd82a6a23abd41933dcbb6e7f6', '', ''),
('d8fd1f0e850fa6c4fdcc7673152a355d', 'Ferdiansyah Rifqika E', 'E41181181'),
('d8fd1f0e850fa6c4fdcc7673152a355d', 'Yosep Lucas', 'E41181276'),
('f9053e0146cb0a3046255c0ea45ead65', 'Ferdiansyah R. Evanta', 'E41181181'),
('f9053e0146cb0a3046255c0ea45ead65', 'Ainun Nella', 'E41181276'),
('d41d8cd98f00b204e9800998ecf8427e', 'Ferdiansyah Rifqika Evanta', 'E41181181'),
('d41d8cd98f00b204e9800998ecf8427e', 'Ohana', 'E411'),
('35002e0869646c497c3a324189f82f79', 'Lucas Tamvan', 'E411'),
('35002e0869646c497c3a324189f82f79', 'ASSIIKKKKJKjkfdsjijsdifjsdfdsf', 'E412321'),
('35002e0869646c497c3a324189f82f79', 'aawafdawdasdsda', 'dasdwadwe'),
('1ab4f4880c3072b28c616a735b09c5ab', 'Lucas Tamvan', 'E411'),
('1ab4f4880c3072b28c616a735b09c5ab', 'Nur Hadi', 'E412'),
('6233fcf5b2aedc26f0729a4c00b5d49a', 'Lucas Tamvan', 'E411'),
('6233fcf5b2aedc26f0729a4c00b5d49a', 'Tika', 'E412'),
('7e67d1e759a4e3058693e88a007b2ef6', 'Lucas Tamvan', 'E411');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` char(18) NOT NULL,
  `NAMA_DOSEN` varchar(50) DEFAULT NULL,
  `PRODI` char(3) NOT NULL,
  `NO_HP` int(13) NOT NULL,
  `USERNAME_DSN` varchar(15) NOT NULL,
  `PASSWORD_DSN` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NAMA_DOSEN`, `PRODI`, `NO_HP`, `USERNAME_DSN`, `PASSWORD_DSN`) VALUES
('123321', 'Dosen JTI', '', 0, '', '456c287de5f3a47c4c32903fd0ac45df'),
('199002272018032001', 'Trismayanti Dwi P, S.Kom, M.Cs', 'TIF', 0, 'trismayantidp', '456c287de5f3a47c4c32903fd0ac45df');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `ID_JENIS_SURAT` varchar(10) NOT NULL,
  `JENIS_SURAT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`ID_JENIS_SURAT`, `JENIS_SURAT`) VALUES
('aa', 'ss'),
('aha123', 'yiha'),
('dasdasdsa', 'sdas'),
('MK', 'Mata Kuliahan'),
('OBS', 'Observasi'),
('PK', 'Pengajuan PKL'),
('TA', 'Tugas Akhir'),
('TT', 'Tugass nSelalu Tuiga');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `ID_SURAT` varchar(32) NOT NULL,
  `NIP` char(18) DEFAULT NULL,
  `ID_JENIS_SURAT` varchar(10) DEFAULT NULL,
  `NIM` char(9) DEFAULT NULL,
  `NAMA_MITRA` varchar(100) DEFAULT NULL,
  `ALAMAT_MITRA` varchar(100) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `TANGGAL_PENGAJUAN` date DEFAULT NULL,
  `STATUS_SURAT` varchar(60) DEFAULT NULL,
  `KETERANGAN` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`ID_SURAT`, `NIP`, `ID_JENIS_SURAT`, `NIM`, `NAMA_MITRA`, `ALAMAT_MITRA`, `TANGGAL`, `TANGGAL_PENGAJUAN`, `STATUS_SURAT`, `KETERANGAN`) VALUES
('1ab4f4880c3072b28c616a735b09c5ab', '199002272018032001', 'OBS', 'E411', 'Soerabaja56', 'Jember Jawa Timur', '2020-08-19', '2020-08-24', 'Sedang Dalam Proses', ''),
('35002e0869646c497c3a324189f82f79', '199002272018032001', 'OBS', 'E411', 'Sekolah SMA', 'Tanggul', '2020-08-14', '2020-08-15', 'DiTolak - Data Surat Tidak Valid', ''),
('38164248477de4f57b34e466eca9e596', '199002272018032001', 'MK', 'E41181181', 'Kepala Bagian Akademik POLIJE', 'Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kabupaten Jember, Jawa Timur 68121', '2020-06-20', '2020-06-20', 'DiTolak - Data Surat Tidak Valid', ''),
('56667cd0d7efe4c234d080fee2bd7748', '199002272018032001', 'MK', 'E41181181', 'Politeknik Negeri Jember Jurusan Teknologi Informasi', 'Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kabupaten Jember, Jawa Timur 68121', '2020-06-20', '2020-06-20', 'DiTolak - Data Surat Tidak Lengkap', ''),
('6233fcf5b2aedc26f0729a4c00b5d49a', '199002272018032001', 'OBS', 'E411', 'ASIK', 'Jember', '2020-08-23', '2020-08-24', 'Sedang Dalam Proses', ''),
('7e67d1e759a4e3058693e88a007b2ef6', '123321', 'MK', 'E411', 'Soerbaja', 'Jember', '2020-08-24', '2020-08-25', 'DiTolak - Data Surat Tidak Lengkap', ''),
('9084e9eb1e2058681ed4b75171f86cf5', '199002272018032001', 'MK', 'E41181181', 'Politeknik Negeri Jember', 'Jl. Mastrip No.164, Krajan Timur, Sumbersari, Kabupaten Jember, Jawa Timur 68121', '2020-06-20', '0000-00-00', 'DiTolak - Data Surat Tidak Lengkap', ''),
('d41d8cd98f00b204e9800998ecf8427e', '199002272018032001', 'OBS', 'E411', 'PT Garuda Indonesia', 'Jember', '2020-07-02', '2020-07-04', 'DiTolak - Data Surat Tidak Lengkap', ''),
('d8fd1f0e850fa6c4fdcc7673152a355d', '199002272018032001', 'OBS', 'E41181181', 'Ketua Administarsi PT Lion Air ', 'Jl Sukaterbang', '2020-07-01', '2020-07-04', 'Sedang Dalam Proses', 'Observasi'),
('f9053e0146cb0a3046255c0ea45ead65', '199002272018032001', 'TA', 'E41181181', 'Pimpinan BPR Jember Lestari', 'Jl SukaHutang', '2020-07-01', '2020-07-14', 'Selesai', 'Observasi Sistem Informasi di BPR Jember Lestari');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIM` char(9) NOT NULL,
  `NAMA_MHS` varchar(50) DEFAULT NULL,
  `PRODI` varchar(25) DEFAULT NULL,
  `PASSWORD_MHS` char(32) DEFAULT NULL,
  `HP` varchar(15) DEFAULT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIM`, `NAMA_MHS`, `PRODI`, `PASSWORD_MHS`, `HP`, `status`) VALUES
('E411', 'Lucas Tamvan', 'TIF', '456c287de5f3a47c4c32903fd0ac45df', NULL, '0'),
('E41181181', 'Ferdiansyah Rifqika Evanta', 'TIF', '456c287de5f3a47c4c32903fd0ac45df', '081333693785', '0'),
('E41181728', 'Widya Wahyu Pramesti', 'MIF', '456c287de5f3a47c4c32903fd0ac45df', NULL, '0'),
('EE411344', 'Yosef Triadi', 'MIF', '456c287de5f3a47c4c32903fd0ac45df', '622236555656565', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `detail_surat`
--
ALTER TABLE `detail_surat`
  ADD KEY `FK_ANGGOTA_MHS` (`ID_SURAT`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`ID_JENIS_SURAT`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`ID_SURAT`),
  ADD KEY `FK_KONFIRMASI_DOSEN` (`NIP`),
  ADD KEY `FK_MENGAMBIL` (`ID_JENIS_SURAT`),
  ADD KEY `FK_MENGISI` (`NIM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `FK_KONFIRMASI_DOSEN` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`),
  ADD CONSTRAINT `FK_MENGAMBIL` FOREIGN KEY (`ID_JENIS_SURAT`) REFERENCES `jenis_surat` (`ID_JENIS_SURAT`),
  ADD CONSTRAINT `FK_MENGISI` FOREIGN KEY (`NIM`) REFERENCES `user` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
