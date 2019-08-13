-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2018 at 08:52 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_nm` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_nm`, `username`, `password`) VALUES
(4, 'Ravi Rathod', 'admin@admin.com', '$2y$10$VjhHArEcDs0TGuy9xAYTTOUWEYo9oBajXATDkogOvYDKCOyJ7jFhq'),
(5, 'Namitha Dsouza', 'namithadsouza99@gmail.com', '$2y$10$B2A8N9d7Bwb/ZwJXZ9ziJ.TC1rlCjZJXxT8DXat.nUPyTG5EnC5qC');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`aid`, `aname`) VALUES
(1, 'Anil Rao'),
(2, 'Sandesh Kumar'),
(3, 'B. Prabha'),
(4, 'James Vaz'),
(5, 'R.K.Laksman');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

DROP TABLE IF EXISTS `arts`;
CREATE TABLE IF NOT EXISTS `arts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `ptype` varchar(200) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `aname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `aid` (`aid`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`pid`, `pname`, `aid`, `ptype`, `cost`, `gid`, `aname`) VALUES
(1, 'Nature', 1, 'Water Colour', 1000, 1, 'Anil Rao'),
(2, 'Nature', 1, 'Water Colour', 2000, 1, 'Anil Rao'),
(3, 'Nature', 1, 'Water Colour', 1500, 1, 'Anil Kumar'),
(4, 'Kathakali', 2, 'Oil Painting', 2000, 1, 'Sandesh Kumar'),
(5, 'Kathakali', 2, 'Water Colour', 2500, 1, 'Sandesh Kumar'),
(6, 'Kathakali', 3, 'Water Colour', 3500, 1, 'B.Prabha'),
(7, 'Contemporary', 4, 'Oil Pastles', 5000, 1, 'James Vaz'),
(8, 'Contemporary', 5, 'Oil Pastles', 8900, 1, 'R.K.Laksman'),
(9, 'Contemporary', 2, 'Oil Pastles', 7000, 1, 'Sandesh Kumar'),
(10, 'Village ', 4, 'Water Colour', 5600, 1, 'James Vaz'),
(11, 'Village ', 2, 'Water Colour', 9500, 1, 'Sandesh Kumar'),
(12, 'Village ', 1, 'Water Colour', 4300, 1, 'Anil Rao'),
(13, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(14, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(15, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(16, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(17, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(18, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(19, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(20, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(21, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(22, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(23, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(24, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(25, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(26, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(27, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(28, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(29, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(30, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(31, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(32, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(33, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(34, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao'),
(35, 'Flowers', 1, 'Water Colour', 200, 1, 'Anil Rao');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `add3` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `gender`, `contact`, `email`, `password`, `add1`, `add2`, `add3`) VALUES
('pavitra', 'nayak', 'Female', '7022809831', 'pavitranayak832@gmail.com', '$2y$10$EIWn8f6xBnUE1raOaK9.ZuF5itAP8LzOtmU3GWj.a99s26odDJd4O', 'udupi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exhibition`
--

DROP TABLE IF EXISTS `exhibition`;
CREATE TABLE IF NOT EXISTS `exhibition` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(200) DEFAULT NULL,
  `etype` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `ename` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exhibition`
--

INSERT INTO `exhibition` (`eid`, `location`, `etype`, `start_date`, `end_date`, `ename`) VALUES
(1, '\nHS 37, 1st Floor, Kailash Colony Market, New Delhi - 110 048, Booth No - E19.', 'Commertial Exhibition', '2018-12-08', '2018-12-11', '\nINDIA ART EXHIBITION'),
(5, 'Ambedkar Maarg, Second Cross, Jaishankar Colony, Bangalore', 'Commertial Exhibition', '2018-03-26', '2018-04-01', 'KALA PRADARSHAN'),
(3, 'Kolkata', 'Non Commertial Exhibition', '2018-07-16', '2018-07-19', 'INDIA ART FAIR'),
(4, '\nAakriti Art Gallery,Kolkata', 'Commertial Exhibition', '2018-12-06', '2018-12-09', 'MORNING AT THE WINDOW'),
(6, 'Shakti Nagar, Mangalore', 'Non Commertial Exhibition', '2018-11-03', '2018-11-06', 'ART FROM THE HEART'),
(7, 'Bananje, Udupi', 'Commertial Exhibition', '2019-01-20', '2019-01-24', 'GERE-BARE'),
(8, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(9, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(10, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(11, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(12, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(13, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(14, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(15, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(16, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(17, 'Managlore', 'Commertial', '2018-12-12', '2018-12-16', 'Art'),
(18, 'moodbidri', 'cotemporary', '2018-12-12', '2018-12-16', 'Art'),
(19, 'moodbidri', 'cotemporary', '2018-12-12', '2018-12-16', 'Art'),
(20, 'moodbidri', 'cotemporary', '2018-12-12', '2018-12-16', 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(11) NOT NULL,
  `gname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gname`) VALUES
(1, 'Aakrithi Art Gallery');

-- --------------------------------------------------------

--
-- Table structure for table `organize`
--

DROP TABLE IF EXISTS `organize`;
CREATE TABLE IF NOT EXISTS `organize` (
  `gid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`gid`,`eid`),
  KEY `eid` (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organize`
--

INSERT INTO `organize` (`gid`, `eid`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_nm` varchar(50) NOT NULL,
  `page_desc` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `page_nm`, `page_desc`) VALUES
(1, 'deshboard', ''),
(2, 'home', ''),
(3, 'about_us', 'Aakriti Art Gallery began its journey in the year of 2018 and geared up an evolution in the modern and contemporary art in India.\r\n        Aakriti has showcased some of the unique and finest exhibitions of modern and contemporary art in India building up a gateway of Indian art in the world market. \r\n        It has constantly hosted workshops, talk shows and seminar and made a landmark success in promoting Indian contemporary art at the global level. \r\n        Aakriti Art Gallery presently operates from two places â€“ one gallery is in Mangalore and the other is in Bangalore. Keeping with the latest trends of the art market, Aakriti has come up with best solutions for a wider audience of fine arts from traditional paintings, printmaking, and graphics to new media like conceptual art and started an online art shop where a buyer can opt to select and buy a piece of modern and contemporary art of his or her choice from a variety of collections. \r\n        Aakriti Art Gallery since it helped in promoting the upcoming artists and newer generation art works. \r\n        The whole idea of â€˜Gen Nextâ€™ exhibitions profusely dealing with contemporary art of India as well reaching out to young artists from different corners of the globe.'),
(4, 'about_us_dp', '\nA celebrated poet of Kannada Literature and an ace personality who led his whole life dedicated to art and culture, Namitha D\'souza is the senior-most directors of Sunshine Crafts Pvt Limited. Namitha D\'souza had a keen interest in contemporary visual arts and has been one of the promising collectors of artworks since 2000. \n    She is a true admirer of art.'),
(5, 'about_us_dp1', '\nPavitra Nayak\'s journey into the art world though started at her home surrounded by dignified personalities of visual arts and literature, but she set her discourse in a slightly different manner.\n    Pavitra had a strong creative instinct, natural intelligence, an urge to do something original which would be of use in every sphere of life and living. \n    Thus Pavitra choose art as her medium of expressing creativity. '),
(6, 'about', 'This is aakrithi art gallery.');

-- --------------------------------------------------------

--
-- Table structure for table `reach_us`
--

DROP TABLE IF EXISTS `reach_us`;
CREATE TABLE IF NOT EXISTS `reach_us` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `nm` varchar(100) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reach_us`
--

INSERT INTO `reach_us` (`uid`, `nm`, `add1`, `add2`, `city`, `state`, `zipcode`, `contact_no`) VALUES
(1, 'Marwadi Education Foundation', 'Rajkot-Morbi Highway', '', 'Rajkot', 'Gujarat', 363641, '8000898273');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `uid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`uid`, `facebook`, `twitter`, `linkedin`, `insta`) VALUES
(1, 'www.facebook.com/art_gallery_namithadsouza', 'www.twitter.com/art_gallery_namithadsouza', 'www.linkedln.com/art_gallery', 'www.instagram.com/art_gallery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
