-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 02:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `subject_s_id` int(3) NOT NULL,
  PRIMARY KEY (`c_id`,`subject_s_id`),
  KEY `fk_class_subject1_idx` (`subject_s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `grade` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`,`t_id`),
  KEY `fk_subject_teacher1_idx` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `name`, `grade`, `t_id`) VALUES
(2, 'math', 5, 3),
(3, 'dari', 1, 1),
(4, 'pashto', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `father_name` varchar(128) NOT NULL,
  `phonenum` int(12) NOT NULL,
  `image` varchar(255) NOT NULL,
  `term_id` int(2) NOT NULL,
  PRIMARY KEY (`t_id`,`term_id`),
  KEY `fk_teacher_term_idx` (`term_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `name`, `father_name`, `phonenum`, `image`, `term_id`) VALUES
(1, 'sara', 'mohhamad', 799601495, '112.jpg', 3),
(2, 'simin', 'abdul', 799601495, '38.jpg', 3),
(3, 'sahar', 'abdul', 799601495, '39.jpg', 3),
(4, 'sadaf', 'abdul', 799601495, '113.jpg', 3),
(5, 'sahar', 'ahmad', 799601495, '114.jpg', 3),
(6, 'sadaf', 'ahamd', 799601495, '115.jpg', 3),
(7, 'sadeqa', 'star', 799601495, '116.jpg', 3),
(8, 'zinab', 'ghulam', 799601495, '117.jpg', 3),
(9, 'saghar', 'mohmmod', 799601495, '310.jpg', 3),
(10, 'sara', 'mohhamad', 799601495, '311.jpg', 3),
(13, 'sara', 'mohhamad', 799601495, '314.jpg', 3),
(18, 'sara', 'abdul', 799601495, '25.jpg', 3),
(20, 'nahif', 'abdul', 799601495, '118.jpg', 3),
(21, 'nahif', 'abdul', 799601495, '315.jpg', 3),
(22, 'tabesh', 'abdul', 799601495, '119.jpg', 3),
(23, 'tabesh', 'abdul', 799601495, '120.jpg', 3),
(24, 'sara', 'abdul', 799601495, '121.jpg', 3),
(25, 'tabesh', 'abdul', 799601495, '122.jpg', 3),
(26, 'tabesh', 'abdul', 799601495, '123.jpg', 3),
(27, 'nahif', 'abdul', 799601495, '124.jpg', 3),
(28, 'wahid', 'abdul', 799601495, '27.jpg', 3),
(29, 'qaum', 'sadiq', 799601495, '125.jpg', 3),
(30, 'pashto', 'sadiq', 799601495, '126.jpg', 3),
(31, 'dari', 'sadiq', 799601495, '127.jpg', 3),
(32, 'nahif', 'abdul', 799601495, '128.jpg', 3),
(33, 'salim', 'naser', 799601495, '129.jpg', 3),
(34, 'nahif', 'sadiq', 799601495, '130.jpg', 3),
(35, 'tabesh', 'abdul', 799601495, '131.jpg', 3),
(36, 'pashto', 'abdul', 799601495, '132.jpg', 3),
(37, 'nahif', 'sadiq', 799601495, '133.jpg', 3),
(38, 'pashto', 'abdul', 799601495, '134.jpg', 3),
(39, 'nahif', 'abdul', 799601495, '135.jpg', 3),
(40, 'nahif', 'abdul', 799601495, '136.jpg', 3),
(41, 'nahif', 'mohhamad', 799601495, '137.jpg', 3),
(42, 'nahif', 'abdul', 799601495, '138.jpg', 3),
(43, 'tabesh', 'abdul', 799601495, '139.jpg', 3),
(44, 'sara', 'mohhamad', 333, '140.jpg', 3),
(45, 'nahif', 'abdul', 799601495, '141.jpg', 3),
(46, 'nahif', 'abdul', 799601495, '142.jpg', 3),
(47, 'sara', 'mohhamad', 799601495, '143.jpg', 3),
(48, 'sara', 'mohhamad', 799601495, '144.jpg', 3),
(49, 'sara', 'mohhamad', 799601495, '145.jpg', 3),
(50, 'sara', 'mohhamad', 799601495, '146.jpg', 3),
(51, 'sara', 'mohhamad', 799601495, '147.jpg', 3),
(52, 'sara', 'abdul', 799601495, '148.jpg', 3),
(53, 'tabesh', 'abdul', 799601495, '149.jpg', 3),
(54, 'nahif', 'abdul', 799601495, '150.jpg', 3),
(55, 'nahif', 'abdul', 799601495, '151.jpg', 3),
(56, 'nahif', 'abdul', 799601495, '152.jpg', 3),
(57, 'sara', 'mohhamad', 799601495, '153.jpg', 3),
(58, 'shahnaz', 'abdul', 799601495, '154.jpg', 3),
(59, 'shahnaz', 'mohhamad', 799601495, '155.jpg', 3),
(60, 'nahif', 'abdul', 799601495, '156.jpg', 3),
(61, 'nahif', 'abdul', 799601495, '157.jpg', 3),
(62, 'nahif', 'abdul', 799601495, '158.jpg', 3),
(63, 'sara', 'mohhamad', 799601495, '159.jpg', 3),
(64, 'tabesh', 'mohhamad', 799601495, '160.jpg', 3),
(65, 'nahif', 'abdul', 799601495, '28.jpg', 3),
(66, 'shahnazjjj', 'mohhamad', 799601495, '316.jpg', 3),
(68, 'pashto', 'sadiq', 799601495, '41.jpg', 3),
(69, 'tabesh', 'abdul', 799601495, '29.jpg', 3),
(70, 'dari', 'jami', 2147483647, '161.jpg', 3),
(71, 'farahnaz', 'abdul', 799601495, '162.jpg', 3),
(72, 'tabesh', 'abdul', 799601495, '163.jpg', 3),
(73, 'sahar', 'abdul', 799601495, '164.jpg', 3),
(78, 'sarah', 'abdul', 799601495, '167.jpg', 3),
(80, 'farida', 'abdul', 799601495, '169.jpg', 1),
(82, 'tabesh', 'ahmad', 799601495, '320.jpg', 3),
(83, 'sahar', 'ahamd', 799601495, '170.jpg', 3),
(84, 'sadeqa', 'ahmad', 799601495, '171.jpg', 3),
(85, 'nahid', 'ahmad', 799601495, '172.jpg', 3),
(86, 'sarah', 'abobakar', 799601495, '173.jpg', 3),
(87, 'nadia', 'abdul', 799601495, '321.jpg', 3),
(88, 'farida', 'abdul', 799601495, '322.jpg', 3),
(89, 'farahnaz', 'abobakar', 799601495, '323.jpg', 3),
(90, 'froogh', 'abdul', 799601495, '174.jpg', 3),
(91, 'tabesh', 'ahmad', 799601495, '175.jpg', 3),
(92, 'roya', 'abdul', 799601495, '324.jpg', 3),
(93, 'sahar', 'khudidad', 799601495, '325.jpg', 3),
(94, 'sara', 'ahamd', 799601495, '176.jpg', 3),
(95, 'sadf', 'mohammad', 799601495, '177.jpg', 3),
(96, 'tabesh', 'ghulam', 799601495, '326.jpg', 3),
(97, 'sadeqa', 'abdul', 799601495, '327.jpg', 3),
(98, 'palwasha', 'abdul', 799601495, '178.jpg', 3),
(99, 'homira', 'abdul', 799601495, '179.jpg', 3),
(100, 'hamidah', 'abdul', 799601495, '180.jpg', 3),
(101, 'sara', 'mohamd', 799601495, '181.jpg', 3),
(102, 'sapidah', 'azizulah', 799601495, '182.jpg', 3),
(104, 'tabesh', 'abdul', 799601495, 'Picture11.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `term_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(42) NOT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `name`) VALUES
(1, 'primary'),
(2, 'secondary'),
(3, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` int(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `email`, `contact_number`) VALUES
(1, 'tabesh', '123', 'tabeshsediqi95@gmail.com', 798875436),
(10, 'tabesh', '0799806574', 'sadafalkowsar2001@gmail.com', 1234567);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_class_subject1` FOREIGN KEY (`subject_s_id`) REFERENCES `subject` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_subject_teacher1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_teacher_term` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
