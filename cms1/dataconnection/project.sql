-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 03:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `albumno` int(11) NOT NULL AUTO_INCREMENT,
  `albumname` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `createdate` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`albumno`),
  UNIQUE KEY `albumname` (`albumname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumno`, `albumname`, `eventdate`, `createdate`, `remarks`) VALUES
(1, 'summer', '2015-03-02', '2015-03-03', 'summer camp photos'),
(3, 'winter', '2014-01-11', '2014-02-10', 'winter sports festival'),
(4, 'sport', '2015-01-27', '2015-01-29', 'sport phota'),
(5, 'Annual Function', '2015-01-30', '2015-02-06', 'Annual Function 2015');

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE IF NOT EXISTS `conf` (
  `lab_id` int(3) NOT NULL AUTO_INCREMENT,
  `lab_name` varchar(500) NOT NULL,
  `lab_value` varchar(500) NOT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`lab_id`, `lab_name`, `lab_value`) VALUES
(2, 'logo', 'Desert.jpg'),
(3, 'title', '<p>This is title</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `newpage`
--

CREATE TABLE IF NOT EXISTS `newpage` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(50) NOT NULL,
  `page_des` varchar(500) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `newpage`
--

INSERT INTO `newpage` (`page_id`, `page_title`, `page_des`) VALUES
(33, 'Camera', '<p><span style="color:#FF0000"><em><strong>Details of Different types of camera.</strong></em></span></p>\r\n'),
(34, 'PCB', '<h3><span style="color:#FF0000"><u><em><span style="background-color:#FFFF00">Detail of PCB..</span></em></u></span></h3>\r\n'),
(38, 'HELLO', '<p>HELLO</p>\r\n'),
(39, 'MY PAGE', '<p>HELLO this is my page</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(100) NOT NULL,
  `newsdata` varchar(500) NOT NULL,
  `newsdate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `newsdata`, `newsdate`) VALUES
(2, 'welcome', 'welcome massage', '2015/04/16 10:11:59am'),
(3, 'our new product ', 'avilable new scheame in our new product', '2015/04/16 11:11:59am'),
(4, 'product', 'new product', '2015/04/15 10:11:59am'),
(5, 'camera', 'camara in our web site', '2015/04/16 12:11:59am'),
(7, 'New Sceame', 'Our New Scheame coming soon', '2015/04/16 10:18:41am');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(50) NOT NULL,
  `page_des` varchar(500) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_des`) VALUES
(1, 'service', '<p>This is<strong> CMS service</strong> Page</p>\r\n'),
(2, 'contactus', '<p><strong>Email id :</strong> xyz@gmail.com</p>\r\n\r\n<p><strong>Mobile :</strong> 9987654789</p>\r\n'),
(3, 'home', '<h2 style="font-style:italic"><span style="font-family:times new roman,times,serif"><strong>This is CMS Home page</strong></span></h2>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photono` int(11) NOT NULL AUTO_INCREMENT,
  `photoname` varchar(50) NOT NULL,
  `albumno` int(11) NOT NULL,
  PRIMARY KEY (`photono`),
  KEY `albumno` (`albumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photono`, `photoname`, `albumno`) VALUES
(2, 'images (3).jpg', 3),
(3, 'images_2.jpg', 3),
(13, 'download.jpg', 4),
(21, 'Koala.jpg', 5),
(23, 'images (9).jpg', 5),
(24, 'Penguins.jpg', 5),
(26, 'Chrysanthemum.jpg', 3),
(29, 'Lighthouse.jpg', 6),
(30, 'Penguins.jpg', 6),
(31, 'Lighthouse.jpg', 5),
(32, 'Sapphire_Logo.png', 5),
(33, 'Jellyfish.jpg', 6),
(34, 'Tulips.jpg', 6),
(35, 'Sapphire_Logo.png', 6),
(37, 'Chrysanthemum.jpg', 4),
(38, 'Hydrangeas.jpg', 1),
(39, 'barimage.bmp', 1),
(40, 'Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`) VALUES
(1, 'template1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
