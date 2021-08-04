-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 04:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `logdin`
--

CREATE TABLE `logdin` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date of submit` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logdin`
--

INSERT INTO `logdin` (`id`, `name`, `email`, `gender`, `photo`, `date of submit`) VALUES
(1, 'tintin', 'this@gmail.com', 'fmal', 'hip', '2021-01-30 11:06:31.0000'),
(14, 'Superna Paul', 'deep123@gmail.com', 'Male', '', '2021-01-30 11:30:12.0000'),
(15, 'priti paul', 'pritipaul135@gmail.com', 'Female', 'BACH.jpg', '2021-01-30 11:33:00.0000'),
(16, 'priti paul', 'ritu215@gmail.com', 'Female', 'Backup_of_KATHA.jpg', '2021-01-30 11:40:31.0000'),
(18, 'Iubi Kumar', 'gayatri123@gmail.com', 'Male', 'BACH.jpg', '2021-01-30 11:55:58.0000'),
(19, 'sumita das', 'sumita@gmail.com', 'Female', 'BACH.jpg', '2021-01-30 12:04:16.0000'),
(21, 'priti2', 'gfhy@gamil.com', 'Female', 'Backup_of_BACH.jpg', '2021-01-31 17:48:25.0000'),
(22, 'Gopal Paul', 'gopal456@gmail.com', 'Select', 'Backup_of_KATHA.jpg', '2021-01-31 20:17:05.0000'),
(24, 'pabp Paul', 'hj@gmail.com', 'Male', 'BACH.jpg', '2021-01-31 20:24:13.0000'),
(25, 'susmita roy', 'susmita@gmail.com', 'Female', 'Backup_of_KATHA.jpg', '2021-01-31 20:32:45.0000'),
(26, 'sdi sdf', 'sd@gmail.com', 'Male', 'Backup_of_BACH.jpg', '2021-01-31 20:58:24.0000'),
(27, 'jk', 'sd@gmailc.om', 'Male', 'Backup_of_BACH.jpg', '2021-01-31 21:27:32.0000'),
(29, 'fdgdfgdfg', 'sdsad@gmail.com', 'Female', '123.jpg', '2021-02-17 18:54:42.0000'),
(30, 'jjfjfgjfujyuyu', 'ga123@gmail.com', 'Male', '', '2021-02-17 20:31:51.0000'),
(31, 'Priti Paul2', 'paulpriti877@gmail.com', 'Female', 'i01_B612_20190430_205539_502.jpg', '2021-06-23 08:53:10.0000'),
(33, 'Priti Paul3', 'paulpriti77@gmail.com', 'Female', 'i01_B612_20190430_205539_502.jpg', '2021-06-24 10:42:22.0000'),
(35, 'Priti Paul22', 'paulpriti877gfhfg@gmail.com', 'Female', 'WhatsApp Image 2021-06-28 at 11.19.07 AM.jpeg', '2021-07-01 11:37:31.0000');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(3) NOT NULL,
  `mess` varchar(1000) NOT NULL,
  `room` varchar(5000) NOT NULL,
  `ip` int(11) NOT NULL,
  `date of submetion` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `mess`, `room`, `ip`, `date of submetion`) VALUES
(115, 'sd', '', 0, '2021-01-31 20:58:42.0000'),
(116, 'no i am ok', '', 0, '2021-01-31 20:59:55.0000'),
(117, 'ooo sure', '', 0, '2021-01-31 21:00:12.0000'),
(118, 'yes', '', 0, '2021-01-31 21:00:22.0000');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(3) NOT NULL,
  `room` varchar(20) NOT NULL,
  `date of reply` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `date of reply`) VALUES
(96, 'kok', '2021-01-31 20:27:04.0000'),
(97, 'kokd', '2021-01-31 20:27:32.0000'),
(98, 'fatema', '2021-01-31 20:28:53.0000'),
(99, 'asd', '2021-01-31 20:30:03.0000'),
(100, 'ghori', '2021-01-31 20:32:57.0000'),
(101, 'ghoril', '2021-01-31 20:36:07.0000'),
(102, 'klo', '2021-01-31 20:42:34.0000'),
(103, 'di', '2021-01-31 20:43:40.0000'),
(104, 'fte', '2021-01-31 20:44:30.0000'),
(105, 'asx', '2021-01-31 20:45:06.0000'),
(106, 'asw', '2021-01-31 20:47:43.0000'),
(107, 'qaz', '2021-01-31 20:48:35.0000'),
(108, 'qazs', '2021-01-31 20:48:47.0000'),
(109, 'qazsas', '2021-01-31 20:51:33.0000'),
(110, 'qazsasas', '2021-01-31 20:52:10.0000'),
(111, 'wer', '2021-01-31 20:54:21.0000'),
(112, 'cvn', '2021-01-31 20:54:56.0000'),
(113, 'rina', '2021-01-31 20:56:39.0000'),
(114, 'qas', '2021-01-31 20:58:31.0000'),
(115, 'dfa', '2021-01-31 20:59:28.0000'),
(116, 'asxfg', '2021-01-31 21:10:34.0000'),
(117, 'klom', '2021-01-31 21:11:11.0000'),
(118, 'ol', '2021-01-31 21:13:23.0000'),
(119, 'az', '2021-01-31 21:14:01.0000'),
(120, 'zxc', '2021-01-31 21:16:57.0000'),
(121, 'xsd', '2021-01-31 21:19:38.0000'),
(122, 'zxcaz', '2021-01-31 21:20:12.0000'),
(123, 'ascv', '2021-01-31 21:27:38.0000'),
(124, 'zxcazas', '2021-01-31 21:33:46.0000'),
(125, 'plo', '2021-01-31 21:44:17.0000'),
(126, 'yhb', '2021-01-31 21:45:04.0000'),
(127, 'as', '2021-01-31 21:46:31.0000'),
(128, 'zxcsdsdf', '2021-01-31 21:47:30.0000'),
(129, 'sdfgh', '2021-02-17 18:54:50.0000'),
(130, 'fhfghgg', '2021-02-17 20:32:01.0000'),
(131, 'god', '2021-06-23 08:54:05.0000'),
(132, 'hjjk', '2021-06-24 10:42:29.0000'),
(133, 'chat41', '2021-07-01 11:37:38.0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logdin`
--
ALTER TABLE `logdin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logdin`
--
ALTER TABLE `logdin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
