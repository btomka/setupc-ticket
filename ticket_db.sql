-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql302.byethost15.com
-- Generation Time: Oct 20, 2017 at 03:25 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b15_17494781_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user` int(11) NOT NULL,
  `image` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `segment` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `createdate` datetime NOT NULL,
  `lastlog` datetime NOT NULL,
  `waiting` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `createdate` datetime NOT NULL,
  `lastlog` datetime NOT NULL,
  `admin` int(11) NOT NULL,
  `folder` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `createdate`, `lastlog`, `admin`, `folder`, `status`) VALUES
(1, 'Master Admin', 'madmin', 'madmin@mail.com', 'madmin', '2017-10-17 00:00:00', '2017-10-20 03:14:06', 1, '', 0),
(2, 'Demo Demo', 'demo', 'demo@mail.com', 'demo', '2017-10-17 00:00:00', '2017-10-19 07:13:11', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
