-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 04:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestiondestock`
--

-- --------------------------------------------------------

--
-- Table structure for table `catigorys`
--

CREATE TABLE `catigorys` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `quantity` int(20) NOT NULL,
  `Category` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ImgCategory` varchar(255) NOT NULL,
  `Price` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catigorys`
--

INSERT INTO `catigorys` (`id`, `name`, `quantity`, `Category`, `ImgCategory`, `Price`) VALUES
(1, 'Pants', 10, 'Clothes', './image/pexels-karolina-grabowska-4210866.jpg', '300'),
(2, 'Pineappele', 1000, 'Food', './image/pineappele.jpg', '12'),
(4, 'The Vert', 300, 'Soap', './image/thevert.jpg ', '8'),
(5, 'Dove', 2000, 'Soap', './image/download(2).jpg\r\n', '10'),
(6, 'Head&Shoulders', 300, 'Soap', './image/download(1).jpg', '35'),
(7, 'Panten', 2000, 'Soap', './image/panten2.jpg', '30'),
(8, 'Fairy', 5000, 'Soap', './image/download.jpg', '25'),
(9, 'MedMix', 2000, 'Soap', './image/medimix-soap-500x500.jpg', '10'),
(10, 'onion ', 1000, 'Food', './image/onion.jpg', '13'),
(11, 'Orange', 200, 'Food', './image/orange.jpg ', '40'),
(13, 'Grabs', 100, 'Food', './image/grabs.jpg', '12'),
(14, 'Shirt', 200, 'Clothes', './image/shirt.jpg', '150'),
(15, 'Shoes', 100, 'Clothes', './image/shoes.jpg', '400');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `GroupId` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `confirm`, `GroupId`) VALUES
(82, 'yassin', 'boliuon', '0646646464', 'ehmidan.soulayman.solicode@gmail.com', '$2y$10$1GRWuiHztUVTKVk.usd2H.Rw25XqsR.QbS4M9GXObBjfq9n.MyR2e', '$2y$10$mCCsITOcdJBvS5YNZivo5eHwe52kWALmPH1J6a1pHxhEc1fuZ8xMC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catigorys`
--
ALTER TABLE `catigorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catigorys`
--
ALTER TABLE `catigorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
