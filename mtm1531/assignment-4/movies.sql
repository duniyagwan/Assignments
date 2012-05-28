-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 07:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `duni0004`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_date`, `director`, `genre`) VALUES
(1, 'snow white and the h', '2012-06-01', 'Rupert Sanders', 'adventure'),
(2, 'prometheus', '2012-06-08', 'Ridley Scott', 'Sci-fi'),
(3, 'piranha', '2012-05-11', 'John Gulager', 'comedy'),
(4, 'Abraham Lincoln,vamp', '2012-06-20', 'Timur Bekmambetov', 'fantasy'),
(5, 'men in black 3', '2012-05-25', 'Barry Sonnenfeld', 'Action');
