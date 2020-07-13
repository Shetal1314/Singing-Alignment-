-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2019 at 10:14 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dissertation`
--

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int(10) NOT NULL AUTO_INCREMENT,
  `lesson_no` varchar(20) NOT NULL,
  `chapters` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `chapter_completion_list` varchar(20) NOT NULL,
  `lesson_name` varchar(20) NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_no`, `chapters`, `user_id`, `chapter_completion_list`, `lesson_name`) VALUES
(1, 'Lesson 1', 14, 1, 'LOCK', 'Sarali Swara'),
(2, 'Lesson 2', 9, 1, 'LOCK', 'Janta Swara'),
(3, 'Lesson 3', 10, 1, 'LOCK', 'Datu Swara'),
(4, 'Lesson 4', 5, 1, 'LOCK', 'Melsthayi Swara'),
(5, 'Lesson 5', 2, 1, 'LOCK', 'Geethams'),
(6, 'Lesson 1', 14, 2, 'LOCK', 'Sarali Swara'),
(7, 'Lesson 2', 9, 2, 'LOCK', 'Janta Swara'),
(8, 'Lesson 3', 10, 2, 'LOCK', 'Datu Swara'),
(9, 'Lesson 4', 5, 2, 'LOCK', 'Melsthayi Swara'),
(10, 'Lesson 5', 2, 2, 'LOCK', 'Geethams');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `chapter_completion_list` varchar(10) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `gender`, `password`, `dob`, `chapter_completion_list`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(1, 'Sheetal', 'shetal1314@gmail.com', 'FEMALE', 'Sheetal@1997', '1997-01-28', 'N,N,N,N', '2019-07-15 04:07:05', '1', NULL, NULL),
(2, 'Pratikkumar', 'pratik.prasad460@gmail.com', 'MALE', 'Pratik@16', '1995-12-03', 'N,N,N,N', '2019-07-16 22:00:54', '1', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
