-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:01 AM
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
-- Database: `akpersonalstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s.n` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `age` date NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s.n`, `id`, `student_name`, `age`, `city`) VALUES
(12, 10, 'final update', '2021-07-14', 'check'),
(13, 14, 'gitpush', '2021-07-22', 'lucknow'),
(14, 14, 'ramg shrama', '0000-00-00', 'hariyana'),
(15, 15, 'ranga rang', '2020-05-20', 'hariyana'),
(17, 16, 'mukesh ambani', '0000-00-00', 'jio vala'),
(18, 17, 'ramman ambani', '0000-00-00', 'jio vala'),
(19, 17, 'ramman ambani', '0000-00-00', 'jio vala'),
(20, 20, 'insert in form', '2021-07-25', 'index'),
(21, 21, 'ghfhfhj', '2021-07-15', 'hfhgh'),
(22, 22, 'jhgjhjh', '2021-07-16', 'hgjhjh'),
(23, 23, 'check url', '2021-07-07', 'successfull'),
(24, 24, 'anshul kumar payashi', '2021-07-23', 'chitrakoot'),
(25, 70, 'Anshul kumar mishra', '2021-07-21', 'chitrakoot'),
(26, 1, 'anshul', '2021-07-24', 'anshul'),
(29, 10, 'final update', '2021-07-14', 'check'),
(30, 10, 'final update', '2021-07-14', 'check'),
(31, 10, 'final update', '2021-07-14', 'check'),
(32, 101, 'last update', '2021-07-14', 'updated successfull');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `s.n` (`s.n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s.n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
