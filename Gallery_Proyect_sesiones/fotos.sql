-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 04:51 PM
-- Server version: 8.0.13
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotos`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_g` int(11) NOT NULL,
  `name_g` varchar(25) NOT NULL,
  `path_g` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_g` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_g`, `name_g`, `path_g`, `date_g`) VALUES
(1, 'tomate', './web/gallery/img1.jpg', '2019-09-23'),
(2, 'zanaoria', './web/gallery/img2.jpg', '2019-09-24'),
(3, 'pepino', './web/gallery/img3.jpg', '2019-09-25'),
(5, 'dsf', './web/gallery/module_table_bottom.png', '2012-02-19'),
(6, 'jejeej', './web/gallery/img1.jpg', '2012-02-19'),
(7, 'werewrewr', './web/gallery/img2.jpg', '2012-02-19'),
(8, 'aron', './web/gallery/img2.jpg', '2019-10-09'),
(9, 'eio', './web/gallery/img2.jpg', '2019-10-10'),
(10, '2', './web/gallery/img3.jpg', '0002-03-12'),
(11, 'hjj', './web/gallery/img1.jpg', '2019-10-03'),
(12, 'elio', './web/gallery/pic01.jpg', '2019-10-18'),
(13, 'knk', './web/gallery/img3.jpg', '2019-10-03'),
(14, 'kjglfjñs dtg', './web/gallery/img1.jpg', '2019-10-27'),
(15, 'asdfasd', './web/gallery/img2.jpg', '2019-10-04'),
(16, 'jejeej', './web/gallery/img1.jpg', '2019-10-31'),
(17, 'estes', './web/gallery/img3.jpg', '2019-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_g`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
