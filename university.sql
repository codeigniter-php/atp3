-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 09:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class_id` int(10) NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `room_no` int(10) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `class_id`, `s_time`, `e_time`, `room_no`, `booking_status`, `date`) VALUES
(1, 1, '08:00:00', '11:00:00', 400, 'Active(2016-03-07)', '2016-03-07'),
(2, 2, '09:30:00', '11:00:00', 404, 'Active(2016-03-11)', '2016-03-11'),
(3, 2, '09:30:00', '11:00:00', 404, 'Active(2016-03-11)', '2016-03-14'),
(4, 3, '08:00:00', '11:00:00', 404, 'Active(2016-03-14)', '2016-03-14'),
(5, 2, '10:30:00', '12:00:00', 300, 'Active(2016-03-11)', '2012-12-12'),
(6, 2, '10:00:00', '11:00:00', 404, 'Active(2016-03-11)', '0000-00-00'),
(7, 2, '08:30:00', '09:30:00', 404, 'Active(2016-03-11)', '0000-00-00'),
(8, 2, '08:00:00', '08:00:00', 402, 'Active(2016-03-11)', '0000-00-00'),
(9, 2, '05:00:00', '09:00:00', 404, 'Active(2016-03-11)', '2016-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `teacher_name`, `class_name`) VALUES
(2, 'Al Imran', 'ATP3'),
(3, 'Sajib Hasan', 'Artificial Intelligence'),
(4, 'Shabbir Ahmed', 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE IF NOT EXISTS `class_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `days_id` int(10) NOT NULL,
  `room` varchar(100) NOT NULL,
  `t0` varchar(100) NOT NULL,
  `t0.5` varchar(100) NOT NULL,
  `t1` varchar(100) NOT NULL,
  `t1.5` varchar(100) NOT NULL,
  `t2` varchar(100) NOT NULL,
  `t2.5` varchar(100) NOT NULL,
  `t3` varchar(100) NOT NULL,
  `t3.5` varchar(100) NOT NULL,
  `t4` varchar(100) NOT NULL,
  `t4.5` varchar(100) NOT NULL,
  `t5` varchar(100) NOT NULL,
  `t5.5` varchar(100) NOT NULL,
  `t6` varchar(100) NOT NULL,
  `t6.5` varchar(100) NOT NULL,
  `t7` varchar(100) NOT NULL,
  `t7.5` varchar(100) NOT NULL,
  `t8` varchar(100) NOT NULL,
  `t8.5` varchar(100) NOT NULL,
  `t9` varchar(100) NOT NULL,
  `t9.5` varchar(100) NOT NULL,
  `t10` varchar(100) NOT NULL,
  `t10.5` varchar(100) NOT NULL,
  `t11` varchar(100) NOT NULL,
  `t11.5` varchar(100) NOT NULL,
  `t12` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`id`, `days_id`, `room`, `t0`, `t0.5`, `t1`, `t1.5`, `t2`, `t2.5`, `t3`, `t3.5`, `t4`, `t4.5`, `t5`, `t5.5`, `t6`, `t6.5`, `t7`, `t7.5`, `t8`, `t8.5`, `t9`, `t9.5`, `t10`, `t10.5`, `t11`, `t11.5`, `t12`) VALUES
(2, 1, '401', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 2, '401', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, '404', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, '402', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 1, '403', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 1, 'CL1', 'R', 'R', 'R', 'R', 'R', 'R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_time`
--

CREATE TABLE IF NOT EXISTS `class_time` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `day_of_week` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `class_time`
--

INSERT INTO `class_time` (`id`, `s_time`, `e_time`, `day_of_week`, `room_no`, `class_id`, `status`) VALUES
(1, '08:00:00', '09:30:00', 101, 404, 1, ''),
(2, '09:30:00', '11:00:00', 101, 404, 3, ''),
(3, '08:00:00', '09:30:00', 102, 404, 2, ''),
(23, '08:30:00', '08:30:00', 101, 404, 2, 'regular'),
(5, '08:00:00', '08:00:00', 101, 404, 1, ''),
(6, '08:00:00', '08:00:00', 101, 404, 1, ''),
(21, '08:00:00', '08:30:00', 101, 403, 3, 'regular'),
(8, '08:30:00', '08:30:00', 102, 404, 3, ''),
(13, '08:00:00', '08:30:00', 102, 404, 1, ''),
(14, '08:00:00', '08:00:00', 102, 402, 1, ''),
(17, '08:30:00', '08:30:00', 102, 0, 1, ''),
(22, '10:00:00', '12:00:00', 102, 400, 4, 'regular'),
(19, '09:00:00', '09:30:00', 102, 0, 5, ''),
(20, '08:30:00', '09:30:00', 106, 0, 5, 'regular'),
(24, '08:00:00', '09:30:00', 103, 404, 2, 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `day_of_week`
--

CREATE TABLE IF NOT EXISTS `day_of_week` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `days_id` int(10) NOT NULL,
  `days_in_week` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `day_of_week`
--

INSERT INTO `day_of_week` (`id`, `days_id`, `days_in_week`) VALUES
(1, 101, 'Sunday'),
(2, 102, 'Monday'),
(3, 103, 'Tuesday'),
(4, 104, 'Wednesday'),
(5, 105, 'Thursday'),
(6, 106, 'Friday'),
(7, 107, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `type`) VALUES
(1, 'admin@aiub.edu', 'admin', 'Administrator', 'admin'),
(2, 'alimran@aiub.edu', 'alimran', 'Al Imran', 'teacher'),
(3, 'sajib@aiub.edu', 'sajib00', 'Sajib Hasan', 'teacher'),
(4, 'ahmed@aiub.edu', 'p415744p', 'Shabbir Ahmed', 'teacher');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
