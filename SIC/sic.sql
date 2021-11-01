-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 12:37 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `serial` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `sec_ques` varchar(200) NOT NULL,
  `sec_ans` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`serial`, `name`, `user`, `password`, `contact`, `email`, `gender`, `sec_ques`, `sec_ans`) VALUES
(1, 'Vikash Kumar Yadav', 'vky2210', '60e5d73650ec436f341902a689e21b48', 9831130285, 'vikashyadav2210@gmail.com', 'M', 'fav_author', 'premchand'),
(2, 'Aman Lohia', 'aman38', '50711af4b0eb887fe303707072bf3a9c', 1234567890, 'amanlohia@gmail.com', 'M', 'fav_author', 'premchand'),
(4, 'Nitish', 'nitish', '3e3c049fd633120fe241f8d16d7cd73b', 6303821513, 'nitishkumargarikapati.1@gmail.com', 'M', 'fav_fruit', 'mango');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(5) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `hobby` varchar(1000) NOT NULL,
  `sec_ques` varchar(100) NOT NULL,
  `sec_ans` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`serial`, `name`, `roll`, `reg`, `address`, `contact`, `email`, `password`, `gender`, `dept`, `dob`, `age`, `batch`, `blood`, `hobby`, `sec_ques`, `sec_ans`, `status`) VALUES
(56, 'Bruce Banner', '16ME8036', '16U10336', 'NIT Dgp', '9854632142', 'thehulk@avengers.com', '50711af4b0eb887fe303707072bf3a9c', 'M', 'ME', '1998-06-03', 20, '2017-2021', 'A+', 'smashing', 'fav_color', 'green', 1),
(57, 'Clint Barton', '16EC8037', '16U10338', 'NIT Dgp', '4561278324', 'hawkeye@avengers.com', '50711af4b0eb887fe303707072bf3a9c', 'M', 'ECE', '1996-06-19', 22, '2015-2019', 'AB+', 'archery', 'fav_color', 'golden', 1),
(58, 'Carol Danvers', '16CH8046', '16U10340', 'NIT Dgp', '5647128930', 'captainmarvel@avengers.com', '50711af4b0eb887fe303707072bf3a9c', 'F', 'CH', '2000-07-19', 18, '2018-2022', 'B+', 'travelling', 'fav_color', 'pink', 2),
(59, 'Steve Rogers', '16CS8001', '16U10300', 'NIT Dgp', '7125489630', 'captainamerica@avengers.com', '50711af4b0eb887fe303707072bf3a9c', 'M', 'CSE', '1991-06-25', 27, '2015-2019', 'AB+', 'shielding', 'fav_color', 'blue', 1),
(82, 'Vikash Kumar Yadav', '16IT8039', '16U10337', 'NIT Dgp', '9831130285', 'vikashyadav2210@gmail.com', '2dbd7cd8ed32b4670c8bc08e1f4f5f10', 'M', 'IT', '1997-10-22', 21, '2016-2020', 'B+', 'graphic designing', 'fav_author', 'premchand', 1),
(84, 'Shankar Ray', '16IT8076', '16U10635', 'nit dgp', '9641657380', 'shankar@gmail.com', '00e0794567081f46f5c4a38c2a0a9883', 'M', 'IT', '2019-04-11', -1, '2015-2019', 'A+', 'playing', 'fav_color', 'blue', 1),
(85, 'Aman Lohia', '16IT8038', '16U10335', 'R-129 H-1 NIT Dgp', '7001416679', 'lohiaaman002@gmail.com', '9b90c144cc00fccc692503b003fa5365', 'M', 'IT', '1998-12-03', 20, '2016-2020', 'O+', 'XYZ', 'fav_color', 'ABC', 1),
(86, 'Nitish Kumar Garikapti', '16IT8031', '16U10285', 'NIT Durgapur\r\n', '6303821513', 'nitishkumargarikapati.1@gmail.com', '3e3c049fd633120fe241f8d16d7cd73b', 'M', 'IT', '1999-07-06', 19, '2015-2019', 'A+', 'youtuber', 'fav_author', 'laxmikanth', 1),
(87, 'Vikash K Yadav', '16IT80100', '16U10333', 'NIT Dgp', '9831130279', 'vikash@golu.com', '50711af4b0eb887fe303707072bf3a9c', 'M', 'IT', '1996-02-13', 23, '2015-2019', 'A+', 'web development', 'fav_author', 'premchand', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `username` (`user`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `reg` (`reg`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
