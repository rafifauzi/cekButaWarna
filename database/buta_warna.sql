-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 05:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buta_warna`
--

-- --------------------------------------------------------

--
-- Table structure for table `buta_ishihara`
--

CREATE TABLE `buta_ishihara` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buta_ishihara`
--

INSERT INTO `buta_ishihara` (`id`, `username`, `total`) VALUES
(1, 'yangfauz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_farns`
--

CREATE TABLE `hasil_farns` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_farns`
--

INSERT INTO `hasil_farns` (`id`, `username`, `total`) VALUES
(1, 'yangfauz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ishihara`
--

CREATE TABLE `hasil_ishihara` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `test1` int(20) NOT NULL,
  `test2` int(20) NOT NULL,
  `test3` int(20) NOT NULL,
  `test4` int(20) NOT NULL,
  `test5` int(20) NOT NULL,
  `test6` int(20) NOT NULL,
  `test7` int(20) NOT NULL,
  `test8` int(20) NOT NULL,
  `test9` int(20) NOT NULL,
  `test10` int(20) NOT NULL,
  `test11` int(20) NOT NULL,
  `test12` int(20) NOT NULL,
  `test13` int(20) NOT NULL,
  `test14` int(20) NOT NULL,
  `test15` int(20) NOT NULL,
  `test16` int(20) NOT NULL,
  `test17` int(20) NOT NULL,
  `test18` int(20) NOT NULL,
  `test19` int(20) NOT NULL,
  `test20` int(20) NOT NULL,
  `test21` int(20) NOT NULL,
  `test22` int(20) NOT NULL,
  `test23` int(20) NOT NULL,
  `test24` int(20) NOT NULL,
  `test25` int(20) NOT NULL,
  `normal` int(20) NOT NULL,
  `red` int(20) NOT NULL,
  `green` int(20) NOT NULL,
  `red_green` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `persen_normal` int(20) NOT NULL,
  `persen_parsial` int(20) NOT NULL,
  `persen_total` int(20) NOT NULL,
  `persen_merah` int(20) NOT NULL,
  `persen_hijau` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_ishihara`
--

INSERT INTO `hasil_ishihara` (`id`, `username`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `test7`, `test8`, `test9`, `test10`, `test11`, `test12`, `test13`, `test14`, `test15`, `test16`, `test17`, `test18`, `test19`, `test20`, `test21`, `test22`, `test23`, `test24`, `test25`, `normal`, `red`, `green`, `red_green`, `total`, `persen_normal`, `persen_parsial`, `persen_total`, `persen_merah`, `persen_hijau`) VALUES
(1, 'yangfauz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3, 21, 0, 13, 88, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'yangfauz', 'hunter', 'yangfauz@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buta_ishihara`
--
ALTER TABLE `buta_ishihara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_farns`
--
ALTER TABLE `hasil_farns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_ishihara`
--
ALTER TABLE `hasil_ishihara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buta_ishihara`
--
ALTER TABLE `buta_ishihara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil_farns`
--
ALTER TABLE `hasil_farns`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil_ishihara`
--
ALTER TABLE `hasil_ishihara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
