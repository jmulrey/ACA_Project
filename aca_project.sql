-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2012 at 02:22 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aca_project`
--
CREATE DATABASE IF NOT EXISTS aca_project;
GRANT ALL ON aca_project.* TO 'aca_project'@'localhost' IDENTIFIED BY 'password';
use aca_project;
-- --------------------------------------------------------

--
-- Table structure for table `trails`
--

CREATE TABLE IF NOT EXISTS `trails` (
  `TrailName` varchar(20) NOT NULL,
  `Dropoff` varchar(30) NOT NULL,
  `Pickup` varchar(30) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Difficulty` int(10) NOT NULL,
  `Length` int(100) NOT NULL,
  `Index` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
