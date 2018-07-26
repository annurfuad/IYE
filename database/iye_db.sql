-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 11:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iye_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `course_category` varchar(70) NOT NULL,
  `course_info` varchar(300) NOT NULL,
  `course_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Course Info is stored here';

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_category`, `course_info`, `course_video`) VALUES
(8, 'Kewirausahaan', 'Business', 'Kewirausahaan sambil ngoding', 'yUkNBoHzBO8'),
(9, 'Start Up', 'Business', 'Start Up Sambil Ngoding', '1pruC66rC4k');

-- --------------------------------------------------------

--
-- Table structure for table `is_user`
--

CREATE TABLE `is_user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `hak_akses` enum('superadmin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_user`
--

INSERT INTO `is_user` (`id_user`, `username`, `password`, `nama_user`, `hak_akses`) VALUES
(2, 'lukman', '6a17faad3b1275fd2558d5435c58440e', 'Lukman', 'superadmin'),
(3, 'annurfuad', '674b58524980ecebffcac59824cf4e1e', 'Annur Fuad', 'superadmin'),
(5, 'iman', '5be9a68073f66a56554e25614e9f1c9a', 'iman', ''),
(6, 'seka', 'd3988db93f9ce3a4f8e66ea3bc98895f', 'seka', ''),
(7, 'rizal', '150fb021c56c33f82eef99253eb36ee1', 'rizal', 'user'),
(8, 'kolif', 'c711df0c8970699c35ac82bcf7069d91', 'kolif', 'user'),
(9, 'fuad', 'd0b0caa56fee5e734ca286516b5885dc', 'fuad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `Unique` (`course_name`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `is_user`
--
ALTER TABLE `is_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `is_user`
--
ALTER TABLE `is_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
