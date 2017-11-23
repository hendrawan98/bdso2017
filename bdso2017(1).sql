-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 09:03 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdso2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('the2017bdso', 'f8324e7fc8c054215220b36c0e78f5ef');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9sk5vule984ik18qvhnbmrjeeajfacqa', '::1', 1511073752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313037333538303b656d61696c7c733a31313a22746865323031376264736f223b696e766f6963657c733a31323a22323031373139313334313430223b6669656c647c733a363a22446562617465223b),
('t6kef725ivji8cjnogo37acuc418saof', '::1', 1511074281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313037333939313b656d61696c7c733a31313a22746865323031376264736f223b696e766f6963657c733a31323a22323031373139313334313430223b6669656c647c733a363a22446562617465223b),
('s2dfkcq0qllnqf8nsfmgn64fevfkf1bu', '::1', 1511084028, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313038343031323b656d61696c7c733a31313a22746865323031376264736f223b),
('sqrep75sgi1d6q6bccm9dabnuoiqbs3o', '::1', 1511087494, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313038373439343b656d61696c7c733a31313a22746865323031376264736f223b),
('ufv3qpvg83tsp1qfm1ivdtsthhrl69or', '::1', 1511106258, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313130363134343b656d61696c7c733a31313a22746865323031376264736f223b),
('fn64s24vsr1fgajksnhhp9trh44vvd8e', '::1', 1511106522, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313130363439383b656d61696c7c733a31313a22746865323031376264736f223b),
('pdhl4d1a72aikrjjjdev6jjp99ggrmui', '::1', 1511114272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313131333937323b656d61696c7c733a31313a22746865323031376264736f223b),
('hus0ecr6ev4h29m8p2cs81bj3m279ipp', '::1', 1511114348, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313131343238383b656d61696c7c733a31313a22746865323031376264736f223b);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `accomodation` varchar(255) NOT NULL,
  `vege` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `invoice`, `name`, `phone`, `email`, `line`, `facebook`, `institution`, `accomodation`, `vege`, `education`, `field`, `timestamp`) VALUES
(1, '201719134140', 'hendrawan', '081991599549', 'hendrawan@gmail.com', 'hendrawan', 'hendrawan', 'binus', 'Yes', 'Yes', 'College', 'Debate', '2017-11-19 06:41:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
