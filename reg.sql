-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 04:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(3) NOT NULL,
  `umid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `project` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `time_slot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `umid`, `fname`, `lname`, `project`, `email`, `phone`, `time_slot`) VALUES
(2, 33555522, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot6'),
(3, 33555521, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot3'),
(7, 88888888, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot4'),
(11, 88888881, 'Amulya', 'Chowdhury', 'gggg3', 'apurba.engineer@gmail.com', '313-603-9222', 'slot6'),
(12, 88888222, 'Apurba', 'Saha', 'gggg3', 'apurba.engineer@gmail.com', '313-603-9222', 'slot3'),
(15, 88888444, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot4'),
(17, 88884444, 'Britta', 'Chowdhury', 'CIS525', 'brittasaha9@gmail.com', '313-603-9222', 'slot1'),
(18, 33555510, 'Apurba', 'Saha', 'fff', 'apurba.engineer@gmail.com', '313-603-9222', 'slot5'),
(19, 88888885, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot5'),
(21, 12345678, 'Apurba', 'Saha', 'gggg3', 'apurba.engineer@gmail.com', '313-603-9222', 'slot4'),
(22, 88888800, 'Britta', 'Chowdhury', 'gggg', 'brittasaha9@gmail.com', '313-603-9222', 'slot4'),
(23, 88888801, 'Apurba', 'Saha', 'gggg', 'apurba.engineer@gmail.com', '313-603-9222', 'slot4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
