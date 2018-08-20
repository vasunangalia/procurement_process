-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 07:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`, `mobile`) VALUES
('admin123', 'admin', 'pradyumna', '9988776655');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `password`, `name`, `designation`) VALUES
('1RV14IS028', 'root', 'Pradyumna', 'Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `specification` text NOT NULL,
  `units` int(5) NOT NULL,
  `estcost` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id`, `name`, `specification`, `units`, `estcost`) VALUES
('1', 'Windows 10 os', 'ABC', 0, 50),
('16', 'Monitor', 'gghhh', 0, 50),
('2', 'Monitor', 'jgf,jhg', 0, 100),
('30', 'keyboard', 'xyz', 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(10) NOT NULL,
  `senderid` varchar(15) NOT NULL,
  `sid` varchar(15) NOT NULL,
  `hid` varchar(15) NOT NULL,
  `vid` varchar(10) NOT NULL,
  `count` int(5) NOT NULL,
  `status` text NOT NULL,
  `estcost` int(5) NOT NULL,
  `date` varchar(11) NOT NULL,
  `response` int(5) NOT NULL,
  `sent` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `senderid`, `sid`, `hid`, `vid`, `count`, `status`, `estcost`, `date`, `response`, `sent`) VALUES
(2, '1RV14IS028', '1', '', '', 5, '', 100, '', 1, 1),
(3, '1rv14is022', '1', '', '', 5, '', 50, '', 0, 0),
(4, '1RV13IS062', '1', '', '', 5, '', 100, '', 1, 1),
(5, '1RV13IS033', '1', '', '', 5, '', 100, '', 1, 1),
(7, '1RV14IS009', '1', '', '', 5, '', 50, '', 0, 0),
(8, '1RV14IS007', '1', '', '', 5, '', 50, '', 0, 0),
(14, '1RV14IS025', '1', '', '', 2, 'Available', 400, '', 1, 0),
(21, '1rv14is021', '1', '', '', 4, '', 0, '2017-04-26 ', 1, 1),
(22, '1rv14is021', '1', '', '', 4, '', 200, '2017-04-26 ', 0, 0),
(23, '1rv14is021', '1', '', '', 4, '', 200, '2017-04-26 ', 0, 0),
(24, '1rv14is021', '10', '', '', 2, '', 200, '2017-04-26 ', 0, 0),
(27, '1rv14is028', '10', '', '', 3, '', 300, '2017-04-27 ', 0, 0),
(28, '1rv14is028', '', '1', '', 5, '', 250, '2017-04-27 ', 0, 0),
(29, '1rv14is028', '', '16', '', 2, '', 100, '2017-04-27 ', 0, 0),
(30, '1rv14is028', '', '2', '', 10, '', 1000, '2017-04-28 ', 0, 0),
(31, '1rv14is028', '1', '', '', 5, '', 250, '2017-04-28 ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` varchar(15) NOT NULL,
  `pkid` varchar(15) NOT NULL,
  `aid` varchar(15) NOT NULL,
  `cost` int(6) NOT NULL,
  `vid` varchar(15) NOT NULL,
  `status` text NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `license` text NOT NULL,
  `version` varchar(10) NOT NULL,
  `estcost` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `license`, `version`, `estcost`) VALUES
('1', 'Windows 10 os', 'yes', '10', 50),
('10', 'Monitor', 'Yes', '2.0', 100),
('2', 'Ubuntu', 'yes', '14.04', 250);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vid` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
