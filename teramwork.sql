-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 03:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teramwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `compid` int(10) NOT NULL,
  `compnm` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`compid`, `compnm`, `date`) VALUES
(1, 'abc', '2022-11-01'),
(4, 'bug fix', '2022-11-02'),
(5, 'website design need improvement', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `registertbl`
--

CREATE TABLE `registertbl` (
  `usernm` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phno` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass1` varchar(25) NOT NULL,
  `pass2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registertbl`
--

INSERT INTO `registertbl` (`usernm`, `gender`, `phno`, `email`, `pass1`, `pass2`) VALUES
('', '', 0, '', '', ''),
('sasd', 'm', 2147483647, 'harsh.makadiya84@gmail.co', '123', '123'),
('harsh', 'male', 2147483647, 'hatts.283@gmail.com', '12345', '12345'),
('parth', 'male', 2147483647, 'parth@gmail.com', '123456', '123456'),
('', '', 0, '', '', ''),
('ABC', 'male', 2147483647, 'vgvvyuv@sss.com', '123', '123'),
('rajat', 'male', 1234567891, 'rajat@gamil.com', '123', '123'),
('patel', 'male', 2147483647, 'hatts.283@gmail.com', '0000', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`compid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `compid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
