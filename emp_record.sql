-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 09:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `ssn` varchar(40) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `salary` int(15) NOT NULL,
  `home_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`id`, `ename`, `ssn`, `dept`, `salary`, `home_address`) VALUES
(1, 'Abir Ahmed', '550021036', 'Executive Officer', 30000, '152/3, Road #5, House #13, Mohammadpur, Dhaka-1207'),
(2, 'Ratul ', '2005420', 'Accounter', 20000, '12/5, Road #7, House #12, Dhanmondi, Dhaka-1205'),
(3, 'Kabir ', '845602006', 'Accounter', 20000, 'Comilla, Bangladesh'),
(7, 'Rahat', '52420052', 'Accounter', 1500, 'Borisal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
