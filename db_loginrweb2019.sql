-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 03:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loginrweb2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(10) NOT NULL,
  `nama_dosen` varchar(250) NOT NULL,
  `jabatan_akademik` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nama_dosen`, `jabatan_akademik`) VALUES
(60030475, 'Drs. Tedy Setiadi, M.T ', 'Lektor / III.C'),
(60030476, 'Ardiansyah, S.T., M. Cs', 'Lektor / III.C '),
(60030497, 'Dewi Soyusiawaty, S.T., M.T ', 'Asisten Ahli / III.C '),
(60040496, 'Murinto, S.Si., M. Kom ', 'Lektor/ III.C'),
(60910095, 'Drs. Wahyu Pujiyono, M. Kom', 'Lektor / III.C '),
(60980174, 'Rusydi Umar, S.T., M.T, Ph.D. ', 'Lektor / III.D ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matakuliah`
--

CREATE TABLE `tbl_matakuliah` (
  `id_matkul` char(10) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matakuliah`
--

INSERT INTO `tbl_matakuliah` (`id_matkul`, `nama_matkul`, `semester`) VALUES
('m01', 'algoritma pemrograman', 2),
('m02', 'basis data', 3),
('m03', 'rekayasa web', 6),
('m04', 'pemrograman beriorentasi objek', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(150) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `nama_matkul`, `semester`) VALUES
(1, 'applku', 9),
(2, 'prpl', 4),
(3, 'rweb', 6),
(4, 'alpro', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkuldosen`
--

CREATE TABLE `tbl_matkuldosen` (
  `id_jadwal` int(11) NOT NULL,
  `id_matkul` char(10) NOT NULL,
  `id_dosen` int(10) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkuldosen`
--

INSERT INTO `tbl_matkuldosen` (`id_jadwal`, `id_matkul`, `id_dosen`, `kelas`) VALUES
(1, '1', 60910095, 'B'),
(2, '2', 60030476, 'A'),
(3, '3', 60980174, 'C'),
(4, '4', 60030475, 'B'),
(5, '2', 60030497, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'gema antika hariadi', 'gemaantikahr@gmail.com', 'gemaantikahr'),
(2, 'prabowo jokowi', 'prabowojokowi@gmail.com', 'pemilu2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_matkuldosen`
--
ALTER TABLE `tbl_matkuldosen`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_matkuldosen`
--
ALTER TABLE `tbl_matkuldosen`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
