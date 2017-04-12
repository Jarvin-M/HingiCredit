-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 12:56 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hingicredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `branches` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tin` int(20) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`email`),
  UNIQUE KEY `tin` (`tin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `Location`, `Contact`, `branches`, `users`, `email`, `tin`, `logo`, `password`, `status`) VALUES
(1, 'log.png', 'Wandegeya', '+25677869336', 0, 0, 'donbrians@ymail.com', 1234567899, '', '5148da4146904d756f1d244a46c2448ad7d5ca22', 0),
(3, 'Barclay bank  (U) limited', 'Wandegeya, kampala', '+256778693362', 0, 0, 'barclays@gmail.com', 2147483647, '', '5148da4146904d756f1d244a46c2448ad7d5ca22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_admin`
--

CREATE TABLE IF NOT EXISTS `b_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bank` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `loggedin` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_admin`
--

CREATE TABLE IF NOT EXISTS `sys_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `loggedin` int(11) NOT NULL,
  `blocked` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='contain all the system administrators who can log into the system' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sys_admin`
--

INSERT INTO `sys_admin` (`id`, `name`, `username`, `password`, `role`, `loggedin`, `blocked`) VALUES
(1, 'don brians', 'don brians', '5148da4146904d756f1d244a46c2448ad7d5ca22', 'super admin', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
