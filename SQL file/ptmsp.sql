-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 10:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptmsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `email`, `password`, `admin_reg_date`, `country`, `gender`, `contact`) VALUES
(1, 'mbulle', 'mbulle@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 08:49:24', 'Cameroon', 'Female', 12345678),
(6, 'sandra', 'sandra@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-10-06 08:51:08', 'cameroon', 'gender', 4567890);

-- --------------------------------------------------------

--
-- Table structure for table `foreigner_ticket`
--

CREATE TABLE `foreigner_ticket` (
  `id` int(100) NOT NULL,
  `ticket_id` int(100) NOT NULL,
  `no_of_adult` int(100) NOT NULL,
  `no_of_children` int(100) NOT NULL,
  `adult_price` varchar(100) NOT NULL,
  `child_price` varchar(100) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foreigner_ticket`
--

INSERT INTO `foreigner_ticket` (`id`, `ticket_id`, `no_of_adult`, `no_of_children`, `adult_price`, `child_price`, `posting_date`) VALUES
(3, 847121, 1, 8888, '100', '50', '2021-10-06 08:43:22'),
(4, 674141, 12, 6, '100', '50', '2021-10-06 08:45:01'),
(5, 198734, 4, 8, '100', '50', '2021-10-06 08:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `india_ticket`
--

CREATE TABLE `india_ticket` (
  `id` int(100) NOT NULL,
  `ticket_id` int(100) NOT NULL,
  `no_of_adult` int(100) NOT NULL,
  `no_of_children` int(20) NOT NULL,
  `adult_price` varchar(30) NOT NULL,
  `child_price` varchar(30) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `india_ticket`
--

INSERT INTO `india_ticket` (`id`, `ticket_id`, `no_of_adult`, `no_of_children`, `adult_price`, `child_price`, `posting_date`) VALUES
(4, 137403, 6, 4, '50', '25', '2021-10-06 08:42:11'),
(5, 430787, 6, 4, '50', '25', '2021-10-06 08:44:42'),
(6, 589709, 6, 4, '50', '25', '2021-10-06 08:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_type`
--

CREATE TABLE `ticket_type` (
  `id` int(100) NOT NULL,
  `ticket_type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_type`
--

INSERT INTO `ticket_type` (`id`, `ticket_type`, `price`, `creation_date`) VALUES
(3, 'normal_adult', '50', '2021-10-06 06:34:47'),
(4, 'normal_child', '25', '2021-10-06 06:20:00'),
(5, 'foreigner_adult', '100', '2021-10-06 06:23:38'),
(6, 'foreigner_child', '50', '2021-10-06 06:35:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foreigner_ticket`
--
ALTER TABLE `foreigner_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `india_ticket`
--
ALTER TABLE `india_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_type`
--
ALTER TABLE `ticket_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foreigner_ticket`
--
ALTER TABLE `foreigner_ticket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `india_ticket`
--
ALTER TABLE `india_ticket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_type`
--
ALTER TABLE `ticket_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
