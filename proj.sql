-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 02:17 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbaack`
--

CREATE TABLE `feedbaack` (
  `reg_no` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedbaack`
--

INSERT INTO `feedbaack` (`reg_no`, `email`, `contact`, `msg`) VALUES
('14ycsb7049', 'sadath.ahmed@outlook.com', '5543333322', 'gfdstrewvcxz'),
('14ycsb7049', 'sadath.ahmed@outlook.com', '9876543298', 'lkjhgfdsakjhgfds');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `marks` varchar(300) NOT NULL,
  `dtreg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `reg_no`, `email`, `password`, `marks`, `dtreg`) VALUES
('', '', '', '', '', '0000-00-00'),
('Zeeshan', '14ycsb7029', 'mdzeeshanatoz@gmail.com', 'iamzee', 'sem1:english=30+19;hindi=49+29;c=44+24;de=44+23;obj=40+26;clab=35+14;Delab=33+12;', '2017-04-27'),
('oubaidulla', '14ycsb7034', 'ob@gmail.com', 'oubaid1234', 'first sem', '2017-04-27'),
('sadath', '14ycsb7043', 'sadath.zadrot@gmail.com', '1234', 'sem1:language=60,internals=25;\r\nenglish=56,internals=28;\r\nc program=55,internals=29;\r\nde=60,internals=25;\r\nc lab=35,internals=15;\r\nde=35,internals=15;\r\neph=66,internals=33;', '2017-02-01'),
('jabeer', '14ycsb7048', 'syedjabeer810@gmail.com', 'bcc', 'eng=46,in=25', '2017-03-09'),
('venkatesh', '14ycsb7049', 'venkateshmsv01@gmail.com', '1234', 'eng=66,in=25', '2016-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `reg_no` varchar(12) NOT NULL,
  `sem1subt1` int(11) NOT NULL,
  `sem1subt2` int(11) NOT NULL,
  `sem1subt3` int(11) NOT NULL,
  `sem1subt4` int(11) NOT NULL,
  `sem1subt5` int(11) NOT NULL,
  `sem1subt6` int(11) NOT NULL,
  `sem1subt7` int(11) NOT NULL,
  `sem1subi1` int(11) NOT NULL,
  `sem1subi2` int(11) NOT NULL,
  `sem1subi3` int(11) NOT NULL,
  `sem1subi4` int(11) NOT NULL,
  `sem1subi5` int(11) NOT NULL,
  `sem1subi6` int(11) NOT NULL,
  `sem1subp1` int(11) NOT NULL,
  `sem1subpi1` int(11) NOT NULL,
  `sem1subp2` int(11) NOT NULL,
  `sem1subpi2` int(11) NOT NULL,
  `sem1backs` int(11) NOT NULL,
  `sem1total` int(11) NOT NULL,
  `sem1obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`reg_no`, `sem1subt1`, `sem1subt2`, `sem1subt3`, `sem1subt4`, `sem1subt5`, `sem1subt6`, `sem1subt7`, `sem1subi1`, `sem1subi2`, `sem1subi3`, `sem1subi4`, `sem1subi5`, `sem1subi6`, `sem1subp1`, `sem1subpi1`, `sem1subp2`, `sem1subpi2`, `sem1backs`, `sem1total`, `sem1obtained`) VALUES
('14ycsb7029', 30, 40, 45, 58, 39, 20, 45, 19, 23, 25, 27, 40, 27, 35, 13, 32, 13, 1, 800, 531),
('14ycsb7043', 56, 57, 60, 54, 76, 57, 45, 24, 21, 23, 23, 42, 25, 32, 14, 35, 12, 0, 800, 656),
('14ycsb7048', 50, 56, 58, 65, 26, 54, 44, 29, 20, 27, 22, 30, 21, 30, 10, 29, 10, 1, 800, 581),
('14ycsb7049', 66, 54, 56, 56, 76, 55, 45, 22, 24, 21, 21, 23, 22, 30, 10, 35, 15, 0, 800, 631);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `reg_no` varchar(12) NOT NULL,
  `sem2subt1` int(11) NOT NULL,
  `sem2subt2` int(11) NOT NULL,
  `sem2subt3` int(11) NOT NULL,
  `sem2subt4` int(11) NOT NULL,
  `sem2subt5` int(11) NOT NULL,
  `sem2subt6` int(11) NOT NULL,
  `sem2subt7` int(11) NOT NULL,
  `sem2subi1` int(11) NOT NULL,
  `sem2subi2` int(11) NOT NULL,
  `sem2subi3` int(11) NOT NULL,
  `sem2subi4` int(11) NOT NULL,
  `sem2subi5` int(11) NOT NULL,
  `sem2subi6` int(11) NOT NULL,
  `sem2subp1` int(11) NOT NULL,
  `sem2subpi1` int(11) NOT NULL,
  `sem2subp2` int(11) NOT NULL,
  `sem2subpi2` int(11) NOT NULL,
  `sem2backs` int(11) NOT NULL,
  `sem2total` int(11) NOT NULL,
  `sem2obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`reg_no`, `sem2subt1`, `sem2subt2`, `sem2subt3`, `sem2subt4`, `sem2subt5`, `sem2subt6`, `sem2subt7`, `sem2subi1`, `sem2subi2`, `sem2subi3`, `sem2subi4`, `sem2subi5`, `sem2subi6`, `sem2subp1`, `sem2subpi1`, `sem2subp2`, `sem2subpi2`, `sem2backs`, `sem2total`, `sem2obtained`) VALUES
('14ycsb7029', 40, 60, 47, 56, 50, 29, 44, 27, 28, 25, 25, 30, 21, 35, 12, 31, 15, 0, 800, 575),
('14ycsb7043', 67, 54, 49, 56, 69, 56, 45, 27, 21, 27, 28, 43, 21, 30, 10, 30, 10, 0, 800, 648),
('14ycsb7048', 35, 32, 30, 40, 24, 26, 48, 27, 28, 29, 28, 45, 27, 32, 12, 29, 14, 1, 800, 506);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `reg_no` varchar(12) NOT NULL,
  `sem3subt1` int(11) NOT NULL,
  `sem3subt2` int(11) NOT NULL,
  `sem3subt3` int(11) NOT NULL,
  `sem3subt4` int(11) NOT NULL,
  `sem3subt5` int(11) NOT NULL,
  `sem3subt6` int(11) NOT NULL,
  `sem3subt7` int(11) NOT NULL,
  `sem3subi1` int(11) NOT NULL,
  `sem3subi2` int(11) NOT NULL,
  `sem3subi3` int(11) NOT NULL,
  `sem3subi4` int(11) NOT NULL,
  `sem3subi5` int(11) NOT NULL,
  `sem3subi6` int(11) NOT NULL,
  `sem3subp1` int(11) NOT NULL,
  `sem3subpi1` int(11) NOT NULL,
  `sem3subp2` int(11) NOT NULL,
  `sem3subpi2` int(11) NOT NULL,
  `sem3backs` int(11) NOT NULL,
  `sem3total` int(11) NOT NULL,
  `sem3obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`reg_no`, `sem3subt1`, `sem3subt2`, `sem3subt3`, `sem3subt4`, `sem3subt5`, `sem3subt6`, `sem3subt7`, `sem3subi1`, `sem3subi2`, `sem3subi3`, `sem3subi4`, `sem3subi5`, `sem3subi6`, `sem3subp1`, `sem3subpi1`, `sem3subp2`, `sem3subpi2`, `sem3backs`, `sem3total`, `sem3obtained`) VALUES
('14ycsb7029', 48, 40, 56, 60, 70, 45, 46, 24, 27, 23, 28, 40, 21, 35, 12, 34, 14, 0, 800, 623),
('14ycsb7043', 55, 56, 60, 67, 85, 65, 45, 30, 27, 25, 26, 40, 21, 35, 15, 35, 15, 0, 800, 702),
('14ycsb7048', 45, 44, 45, 50, 60, 55, 45, 28, 26, 22, 28, 44, 25, 28, 12, 30, 12, 0, 800, 599);

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `reg_no` varchar(12) NOT NULL,
  `sem4subt1` int(11) NOT NULL,
  `sem4subt2` int(11) NOT NULL,
  `sem4subt3` int(11) NOT NULL,
  `sem4subt4` int(11) NOT NULL,
  `sem4subt5` int(11) NOT NULL,
  `sem4subt6` int(11) NOT NULL,
  `sem4subt7` int(11) NOT NULL,
  `sem4subi1` int(11) NOT NULL,
  `sem4subi2` int(11) NOT NULL,
  `sem4subi3` int(11) NOT NULL,
  `sem4subi4` int(11) NOT NULL,
  `sem4subi5` int(11) NOT NULL,
  `sem4subi6` int(11) NOT NULL,
  `sem4subp1` int(11) NOT NULL,
  `sem4subpi1` int(11) NOT NULL,
  `sem4subp2` int(11) NOT NULL,
  `sem4subpi2` int(11) NOT NULL,
  `sem4backs` int(11) NOT NULL,
  `sem4total` int(11) NOT NULL,
  `sem4obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`reg_no`, `sem4subt1`, `sem4subt2`, `sem4subt3`, `sem4subt4`, `sem4subt5`, `sem4subt6`, `sem4subt7`, `sem4subi1`, `sem4subi2`, `sem4subi3`, `sem4subi4`, `sem4subi5`, `sem4subi6`, `sem4subp1`, `sem4subpi1`, `sem4subp2`, `sem4subpi2`, `sem4backs`, `sem4total`, `sem4obtained`) VALUES
('14ycsb7029', 44, 44, 56, 60, 60, 60, 40, 28, 21, 27, 23, 44, 20, 30, 15, 32, 15, 0, 800, 619),
('14ycsb7043', 57, 58, 57, 50, 69, 60, 45, 24, 23, 29, 20, 43, 25, 34, 15, 33, 12, 0, 800, 654),
('14ycsb7048', 54, 56, 30, 66, 40, 33, 44, 19, 22, 21, 21, 33, 22, 33, 12, 33, 10, 0, 800, 549);

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `reg_no` varchar(12) NOT NULL,
  `sem5subt1` int(11) NOT NULL,
  `sem5subt2` int(11) NOT NULL,
  `sem5subt3` int(11) NOT NULL,
  `sem5subt4` int(11) NOT NULL,
  `sem5subt5` int(11) NOT NULL,
  `sem5subt6` int(11) NOT NULL,
  `sem5subi1` int(11) NOT NULL,
  `sem5subi2` int(11) NOT NULL,
  `sem5subi3` int(11) NOT NULL,
  `sem5subi4` int(11) NOT NULL,
  `sem5subi5` int(11) NOT NULL,
  `sem5subi6` int(11) NOT NULL,
  `sem5subp1` int(11) NOT NULL,
  `sem5subpi1` int(11) NOT NULL,
  `sem5subp2` int(11) NOT NULL,
  `sem5subpi2` int(11) NOT NULL,
  `sem5subp3` int(11) NOT NULL,
  `sem5subpi3` int(11) NOT NULL,
  `sem5backs` int(11) NOT NULL,
  `sem5total` int(11) NOT NULL,
  `sem5obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`reg_no`, `sem5subt1`, `sem5subt2`, `sem5subt3`, `sem5subt4`, `sem5subt5`, `sem5subt6`, `sem5subi1`, `sem5subi2`, `sem5subi3`, `sem5subi4`, `sem5subi5`, `sem5subi6`, `sem5subp1`, `sem5subpi1`, `sem5subp2`, `sem5subpi2`, `sem5subp3`, `sem5subpi3`, `sem5backs`, `sem5total`, `sem5obtained`) VALUES
('14ycsb7029', 50, 41, 39, 49, 28, 29, 40, 43, 41, 24, 21, 27, 90, 45, 35, 13, 31, 13, 0, 1000, 615),
('14ycsb7043', 95, 80, 75, 60, 55, 57, 45, 45, 39, 25, 22, 24, 98, 50, 35, 15, 35, 15, 0, 1000, 870),
('14ycsb7048', 39, 26, 40, 45, 54, 46, 22, 40, 42, 24, 21, 22, 80, 43, 35, 15, 35, 15, 1, 1000, 644);

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `reg_no` varchar(12) NOT NULL,
  `sem6subt1` int(11) NOT NULL,
  `sem6subt2` int(11) NOT NULL,
  `sem6subt3` int(11) NOT NULL,
  `sem6subt4` int(11) NOT NULL,
  `sem6subt5` int(11) NOT NULL,
  `sem6subi1` int(11) NOT NULL,
  `sem6subi2` int(11) NOT NULL,
  `sem6subi3` int(11) NOT NULL,
  `sem6subi4` int(11) NOT NULL,
  `sem6subi5` int(11) NOT NULL,
  `sem6subp1` int(11) NOT NULL,
  `sem6subpi1` int(11) NOT NULL,
  `sem6subp2` int(11) NOT NULL,
  `sem6subpi2` int(11) NOT NULL,
  `sem6backs` int(11) NOT NULL,
  `sem6total` int(11) NOT NULL,
  `sem6obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`reg_no`, `sem6subt1`, `sem6subt2`, `sem6subt3`, `sem6subt4`, `sem6subt5`, `sem6subi1`, `sem6subi2`, `sem6subi3`, `sem6subi4`, `sem6subi5`, `sem6subp1`, `sem6subpi1`, `sem6subp2`, `sem6subpi2`, `sem6backs`, `sem6total`, `sem6obtained`) VALUES
('14ycsb7029', 52, 39, 70, 49, 27, 41, 45, 40, 28, 24, 150, 60, 35, 15, 0, 1000, 625),
('14ycsb7043', 70, 49, 52, 67, 66, 50, 45, 45, 28, 27, 140, 80, 34, 15, 0, 1000, 768),
('14ycsb7048', 77, 44, 45, 43, 44, 34, 33, 35, 22, 24, 130, 70, 26, 12, 0, 1000, 639);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `reg_no` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `bestsub` int(11) NOT NULL,
  `badsub` int(11) NOT NULL,
  `totalbacks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbaack`
--
ALTER TABLE `feedbaack`
  ADD PRIMARY KEY (`msg`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
