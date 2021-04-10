-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 02:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zakat`
--

CREATE TABLE `tbl_zakat` (
  `id` int(11) NOT NULL,
  `zakat` varchar(200) NOT NULL,
  `nominal` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `rek` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_zakat`
--

INSERT INTO `tbl_zakat` (`id`, `zakat`, `nominal`, `nama`, `hp`, `email`, `bank`, `rek`) VALUES
(2, 'Penghasilan', '1212222', 'bagas', '083872671933', 'iman_cangga@yahoo.co.id', 'BNI', '6543334343'),
(3, '--Jenis Zakat--', '1212222', 'Bayu', '083872671933', 'buatjail1@gmail.com', 'BNI', '9998080898'),
(4, 'Penghasilan', '1212222', 'bagas', '083872671933', 'iman_cangga@yahoo.co.id', 'BNI', '323223362');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
