-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2021 at 06:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidstech`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `isbn` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `destination_name` varchar(100) NOT NULL,
  `photo` varbinary(200) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `author`, `mobile`, `destination_name`, `photo`, `created_at`) VALUES
(8, 'MY Wing', 234567, 'Dr. A.P.J.Abdul Kalam', 8870410122, 'Shirwal, Maharashtra, India', '', '2021-02-17 16:22:18'),
(9, 'Mukkadar', 1234556, 'Kolate patil', 7765412234, 'Pune, Maharashtra, India', '', '2021-02-17 19:11:19'),
(10, 'mukaddar', 987655, 'skolate', 9876543212, 'Satara, Maharashtra, India', '', '2021-02-18 15:19:51'),
(11, 'demoem', 123456, 'demosmn', 9898789876, 'Satara, Maharashtra, India', 0x433a5c78616d70705c746d705c706870433842372e746d70, '2021-02-18 16:33:03'),
(13, 'MyCalmph', 98076, 'Hitaler', 7775912345, 'Germany', 0x433a5c78616d70705c746d705c706870444531422e746d70, '2021-02-18 16:39:40'),
(14, 'codeigniter', 98752, 'r lerdorf', 9997234768, 'Pune - Mumbai Expressway', 0x433a5c78616d70705c746d705c706870314539302e746d70, '2021-02-18 16:58:33'),
(15, 'mahadev', 123456, 'ingawale', 9980765456, 'Shettihalli Church, Settihalli, Karnataka, India', 0x433a5c78616d70705c746d705c706870394330412e746d70, '2021-02-19 10:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `oauth_id` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Cpass` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `oauth_id`, `username`, `email`, `pass`, `Cpass`, `created_at`) VALUES
(1, '', 'ingawalemr12', 'ingawalemr12@gmail.com', 'admin123', 'admin123', '2021-02-19 10:13:02'),
(2, '', 'ingawalemr12', 'ingawalemr12@yahoo.com', 'admin@123', 'admin@123', '2021-02-19 10:21:31'),
(3, '', 'ingawalemr12', 'ingawalemr12@gmaill.com', '1234567', '1234567', '2021-02-19 10:43:20'),
(4, '', 'ingawalemr12', 'ingawalemr@gmail.com', 'admin1234', 'admin1234', '2021-02-19 10:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
