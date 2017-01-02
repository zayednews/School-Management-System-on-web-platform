-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 07:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hbd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`, `email`, `hbd`) VALUES
('zayed', '123456', 'ne.zayed@gmail.com', '1990-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `class` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `date` varchar(200) NOT NULL,
  `present` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`class`, `section`, `date`, `present`) VALUES
('04', '03', 'Thu Dec 29 2016 07:11:29 GMT+0600 (Bangladesh Standard Time)', '01'),
('04', '03', 'Thu Dec 29 2016 07:11:29 GMT+0600 (Bangladesh Standard Time)', '02'),
('04', '03', 'Thu Dec 29 2016 07:11:29 GMT+0600 (Bangladesh Standard Time)', '05'),
('01', '04', 'Thu Dec 29 2016 07:13:28 GMT+0600 (Bangladesh Standard Time)', '02'),
('01', '04', 'Thu Dec 29 2016 07:13:28 GMT+0600 (Bangladesh Standard Time)', '04'),
('01', '04', 'Thu Dec 29 2016 07:13:28 GMT+0600 (Bangladesh Standard Time)', '05'),
('02', '04', 'Thu Dec 29 2016 07:14:40 GMT+0600 (Bangladesh Standard Time)', '01'),
('02', '04', 'Thu Dec 29 2016 07:14:40 GMT+0600 (Bangladesh Standard Time)', '02'),
('02', '04', 'Thu Dec 29 2016 07:14:40 GMT+0600 (Bangladesh Standard Time)', '04'),
('08', '04', 'Thu Dec 29 2016 07:15:03 GMT+0600 (Bangladesh Standard Time)', '01'),
('08', '04', 'Thu Dec 29 2016 07:15:03 GMT+0600 (Bangladesh Standard Time)', '02'),
('08', '04', 'Thu Dec 29 2016 07:15:03 GMT+0600 (Bangladesh Standard Time)', '05'),
('10', '04', 'Thu Dec 29 2016 07:17:32 GMT+0600 (Bangladesh Standard Time)', '01'),
('10', '04', 'Thu Dec 29 2016 07:17:32 GMT+0600 (Bangladesh Standard Time)', '03'),
('10', '04', 'Thu Dec 29 2016 07:17:32 GMT+0600 (Bangladesh Standard Time)', '05');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
`id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Nasir', 'nasir@gmail.com', '123456'),
(2, 'Sojib', 'ne.zayed98@gmail.com', '123456'),
(3, 'Fahim', 'fh@gm.com', '123456'),
(7, 'test', 'tes@gm.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE IF NOT EXISTS `mailbox` (
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `msg` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`sender`, `receiver`, `msg`) VALUES
('ne.zayed@gmail.com', 'ne.zayed98@gmail.com', 'Your Son Fail in Math ! ! ! '),
('ne.zayed98@gmail.com', 'ne.zayed@gmail.com', 'ok, I''ll meet with you.'),
('sq@gm.com', 'ne.zayed@gmail.com', 'Sir, I want to take xm .'),
('nasir@gmail.com', 'ne.zayed@gmail.com', 'Sir, Can i meet with you ???'),
('ne.zayed@gmail.com', 'nasir@gmail.com', 'of Course ...'),
('nasir@gmail.com', 'ne.zayed98@gmail.com', 'kal kokhon xm ???'),
('nasir@gmail.com', 'ne.zayed@gmail.com', 'When xm will held??');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE IF NOT EXISTS `marksheet` (
  `SID` varchar(25) NOT NULL,
  `GID` varchar(25) NOT NULL,
  `Sub` varchar(25) NOT NULL,
  `Term` varchar(25) NOT NULL,
  `Mark` varchar(25) NOT NULL,
`marID` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`SID`, `GID`, `Sub`, `Term`, `Mark`, `marID`) VALUES
('201605021', '1', 'Bangla', '1st Term', '92', 1),
('201605021', '1', 'Math', 'Final Term', '96', 2),
('201605021', '1', 'English', 'Final Term', '96', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stuName` varchar(25) NOT NULL,
  `gID` int(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `sID` varchar(25) NOT NULL,
  `roll` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuName`, `gID`, `class`, `section`, `sID`, `roll`) VALUES
('Amina', 1, '04', '04', '201603041', 17),
('Akash', 2, '05', '02', '201605021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `email`, `pass`, `id`) VALUES
('Anik', 'aniktf95@gmail.com', '123456', 1),
('Sofiq', 'sq@gm.com', '123456', 2),
('Fahima', 'fh@gmya.com', '123456', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
 ADD PRIMARY KEY (`marID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
MODIFY `marID` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
