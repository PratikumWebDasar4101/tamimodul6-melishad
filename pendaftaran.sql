-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 04:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` text NOT NULL,
  `jk` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`, `password`) VALUES
(42, 'Ridho', 1111111111, 'MI-4101', 'Pria', 'Membaca', 'FIT', 'jl apel', '123 '),
(43, 'faizal', 2147483647, '', '', '', 'FIT', 'mamaa', '123 '),
(44, 'debby', 2147483647, 'MI-4102', 'Pria', 'Bernyanyi', 'FIT', ',', '12345  '),
(45, 'beby', 2147483647, '', '', '', 'FIT', '', '123   '),
(46, 'ridho', 2147483647, 'MI-4102', 'Pria', 'Berenang', 'FIK', 'mmmm', '123'),
(47, 'ridho', 2147483647, 'MI-4101', 'Pria', 'Bernyanyi', 'FIT', ',,,', '123'),
(48, 'Fadil', 1111111111, 'MI-4104', 'Pria', 'Menulis', 'FIT', '', '12345 '),
(49, 'zizi', 2147483647, 'MI-4102', 'Wanita', 'Bernyanyi', 'FIK', '', '123   '),
(50, 'nia', 11233444, 'MI-4103', 'Wanita', 'Menulis', 'FIT', 'mmm', '123   '),
(51, 'wanda', 67171711, 'MI-4102', 'Wanita', 'Menulis', 'FIT', 'bbc', '123   ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
