-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 11:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nomer` varchar(30) DEFAULT NULL,
  `voucher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id`, `username`, `jenis`, `harga`, `tanggal`, `nomer`, `voucher`) VALUES
(9, 'yoga', 'Top Up', 500, '2020-05-01', '', 'COVID'),
(10, 'yoga', 'Top Up', 500, '2020-05-01', '', 'COVID'),
(11, 'yoga', 'PB CASH', 20000, '2020-05-06', '', ''),
(12, 'yoga', 'PB CASH', 10000, '2020-05-06', '', 'ZegRjBbeYGwcNbp\r\n'),
(13, 'yoga', 'PB CASH', 20000, '2020-05-06', '', 'medwdLBjHxRoXuF\r\n'),
(16, 'gaga', 'PB CASH', 20000, '2020-05-06', '', ''),
(17, 'gaga', 'PB CASH', 20000, '2020-05-06', '', 'bFhGWRHwtgCqHRS\r\n'),
(18, 'gaga', 'PULSA TELKOMSEL', 19800, '2020-05-06', '082234523215', ''),
(19, 'gaga', 'PB CASH', 20000, '2020-05-06', '', 'edcGaETcnaZCNvx\r\n'),
(20, 'gaga', 'PB CASH', 20000, '2020-05-06', '', 'medwdLBjHxRoXuF\r\n'),
(21, 'gaga', 'PULSA INDOSAT', 5300, '2020-05-06', '124', ''),
(22, 'sasa', 'Top Up', 25000, '2020-05-06', '', 'COV19'),
(23, 'sasa', 'PB CASH', 20000, '2020-05-06', '', ''),
(24, 'nana', 'Top Up', 25000, '2020-05-06', '', 'COV19'),
(25, 'nana', 'PB CASH', 20000, '2020-05-06', '', 'ZegRjBbeYGwcNbp\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `voucher` varchar(30) DEFAULT NULL,
  `saldo_topup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`id`, `username`, `voucher`, `saldo_topup`) VALUES
(1, NULL, 'COV19', 25000),
(5, 'yoga', 'COV19', 25000),
(6, NULL, 'COVID', 500),
(7, 'yoga', 'COVID', 500),
(8, 'yoga', 'COVID', 500),
(9, 'gaga', 'COV19', 25000),
(10, 'sasa', 'COV19', 25000),
(11, 'nana', 'COV19', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `saldo`) VALUES
('gaga', 'gaga', '123', 894900),
('nana', 'nana', '123', 5000),
('sasa', 'sasa', '123', -20000),
('tes', 'yoga', '2', 4700),
('yoga', 'yoga', '123', 12500);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(10) NOT NULL,
  `kode_voucher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `kode_voucher`) VALUES
(1, 'ZegRjBbeYGwcNbp\r\n'),
(2, 'fepNTFpdYeQsZhC\r\n'),
(3, 'bFhGWRHwtgCqHRS\r\n'),
(4, 'xvumHMsxpQbEHyl\r\n'),
(5, 'LaqrgMGoHAZLqcb\r\n'),
(6, 'ZegRjBbeYGwcNbp\r\n'),
(7, 'GZXALeNCcCTBGbA\r\n'),
(8, 'aFfhuGRqcjfxmif\r\n'),
(9, 'medwdLBjHxRoXuF\r\n'),
(10, 'edcGaETcnaZCNvx\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
