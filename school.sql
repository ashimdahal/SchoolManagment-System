-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 06:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `COMMENTid` int(11) NOT NULL,
  `insert_date` datetime NOT NULL,
  `user` varchar(256) NOT NULL,
  `notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`COMMENTid`, `insert_date`, `user`, `notice`) VALUES
(30, '2018-11-10 09:05:04', 'principal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec porta sem, nec placerat velit. Aenean scelerisque turpis et rhoncus laoreet. Aliquam id enim venenatis, eleifend urna ac, convallis est. Suspendisse ac pharetra massa, sit amet efficitur arcu. Integer luctus elit faucibus dui hendrerit, ut viverra ipsum tempor. Ut velit sapien, suscipit vitae velit vel, tincidunt rutrum quam. Phasellus tempus, augue vitae pretium hendrerit, urna turpis congue ante, et facilisis neque massa ac nunc. Sed pellentesque placerat tincidunt. Aenean a augue sit amet elit elementum aliquet. Nulla laoreet imperdiet orci, non condimentum nunc tristique non. Morbi et erat viverra, feugiat nulla et, elementum dolor. Curabitur rutrum nulla at enim varius sagittis. Duis vulputate tempor nisl, non fringilla diam interdum sollicitudin.'),
(31, '2018-11-12 04:41:10', 'principal', 'hryhry');

-- --------------------------------------------------------

--
-- Table structure for table `std.parent`
--

CREATE TABLE `std.parent` (
  `sn` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone.number` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std.parent`
--

INSERT INTO `std.parent` (`sn`, `firstname`, `lastname`, `phone.number`, `username`, `password`) VALUES
(1, 'fname', 'test', 78, 'jh', '$2y$10$8y9NGg7VNcKsOIgWbxBsGOzQ2Om02Wcffi9rE70gW7nlskciZzkg2'),
(2, 'fname', 'test', 12, '45l', '$2y$10$SuHxfpQpFYdJQWxdXI2uruDgXUmrOqEV4x79tudKpxWold4qUzRfW'),
(3, 'fname', 'test', 1234567890, 'asd', '$2y$10$UZIM0n/.4IZj8xewZad.GeAR9vWOX8NQGltcb0zdGUzlbfNkqxS5m'),
(4, 'fname', 'test', 1234567890, 'qwwq', '$2y$10$f76d/NInij.pRDTQcLAYc.P0PyK93K5Nw/6YSGus3GLpk7kvqvQW2'),
(5, 'fname', 'test', 1234567890, 'vm', '$2y$10$xzlDW8KLloCZYmfghmAVM.p1XpA8nEJ7krBsqx9BaAlaG71nNIiaa');

-- --------------------------------------------------------

--
-- Table structure for table `teachers.detail`
--

CREATE TABLE `teachers.detail` (
  `ID` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone.number` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `assigned.class` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers.detail`
--

INSERT INTO `teachers.detail` (`ID`, `firstname`, `lastname`, `phone.number`, `username`, `password`, `assigned.class`, `email`) VALUES
(1, 'a', 'd', 98, 'df', '$2y$10$6PAUEz8byRy2VDxYxops3uNQDNYH0Fh/Eqq425nqCIDN0fRrVNPv6', 6, ''),
(2, 'a', 'd', 987, 'dfg', '$2y$10$O/yiS3ffkA51qHRB4KF9rukpY6jkouqdt9Lxi2S3IliPl0jY/D9A2', 2, 'bhimadahal12@yahoo.com'),
(3, 'a', 'd', 2147483647, 'aasd', '$2y$10$YLMxB03XQopXeXG.wcW.2u.fC9DwQwOKTUpVEp2x1rqUmk4SNkIIa', 1, 'p@gmail.com'),
(4, 'a', 'd', 2147483647, 'nm', '$2y$10$yVveHg/PUpTeWyR1sX5XMuBN5U95JvFfx0DaPLHXoGMgF0Y4BiAwG', 9, 'k@gmail.com'),
(5, 'principal', 'sir', 2147483647, 'principal12', '$2y$10$48uRnmEH211ngDL8.qI2luefEG.7GNMZsDpCr9daWyZFhseM9A9tW', 2, 'pr@gmail.com'),
(6, 'principal', 'sir', 1234567890, '45l', '$2y$10$tkHRTYgXqevycX79ZCdMjuFvsxEx2rs4hd0u6YbgxolSRMFXMaCRi', 3, 'kkl@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`COMMENTid`);

--
-- Indexes for table `std.parent`
--
ALTER TABLE `std.parent`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `teachers.detail`
--
ALTER TABLE `teachers.detail`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `COMMENTid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `std.parent`
--
ALTER TABLE `std.parent`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers.detail`
--
ALTER TABLE `teachers.detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
