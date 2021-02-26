-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2021 at 02:54 PM
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
(11, 'demoem', 123456, 'demosmn', 9898789876, 'Satara, Maharashtra, India', 0x433a5c78616d70705c746d705c706870433842372e746d70, '2021-02-18 16:33:03'),
(13, 'MyCalmph', 98076, 'Hitaler', 7775912345, 'Germany', 0x433a5c78616d70705c746d705c706870444531422e746d70, '2021-02-18 16:39:40'),
(14, 'codeigniter', 98752, 'r lerdorf', 9997234768, 'Pune - Mumbai Expressway', 0x433a5c78616d70705c746d705c706870314539302e746d70, '2021-02-18 16:58:33'),
(15, 'mahadev', 123456, 'ingawale', 9980765456, 'Shettihalli Church, Settihalli, Karnataka, India', 0x433a5c78616d70705c746d705c706870394330412e746d70, '2021-02-19 10:25:29'),
(16, 'demo title 1', 111113, 'demo author 1', 9878789434, 'pune', '', '2021-02-25 10:21:31'),
(17, 'demo title 2', 987652, 'demo author 2', 9878789652, 'pune', '', '2021-02-25 10:21:56'),
(18, 'demo title 3', 987653, 'demo author 3', 9878789653, 'pune', '', '2021-02-25 10:22:30'),
(19, 'demo title 4', 987654, 'demo author 4', 9878789654, 'pune', '', '2021-02-25 10:23:05'),
(21, 'demo title 6', 987655, 'demo author 6', 9878789656, 'pune', '', '2021-02-25 10:23:30'),
(22, 'demo title 7', 987657, 'demo author 7', 9878789657, 'pune', '', '2021-02-25 10:23:45'),
(25, 'demom title', 1234567, 'imageName', 9999887766, 'Mumbai, Maharashtra, India', 0x433a5c78616d70705c746d705c706870374342382e746d70, '2021-02-26 12:08:38'),
(26, 'mahavitaran', 4819450, 'MH State', 9998987898, 'Shirwal, Maharashtra, India', 0x313631343333333332395f38346566663635386539363338326635653265652e6a7067, '2021-02-26 15:25:29'),
(27, 'work for ', 231234, 'work for ', 9878765765, 'Pune, Maharashtra, India', 0x313631343334333638345f31336538313564653535623832643966323332302e6a7067, '2021-02-26 18:18:04'),
(28, 'demo 3', 123213, 'demo 3', 1232343234, 'Pune, Maharashtra, India', 0x313631343334363937345f32366532653632303935633965656632346265622e6a7067, '2021-02-26 19:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varbinary(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `created_at`) VALUES
(1, 'Classify Incidents', 0x313631343332393235315f62646633666434353562366166393630343230652e6a7067, '2021-02-26 08:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_cart`
--

CREATE TABLE `mobile_cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(2) NOT NULL,
  `description` text NOT NULL,
  `photo` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_cart`
--
ALTER TABLE `mobile_cart`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobile_cart`
--
ALTER TABLE `mobile_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
