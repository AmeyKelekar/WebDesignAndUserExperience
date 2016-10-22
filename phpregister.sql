-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 04:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `art_db`
--

CREATE TABLE IF NOT EXISTS `art_db` (
  `Artid` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(60) NOT NULL,
  `Painter` varchar(60) NOT NULL,
  `year` int(60) NOT NULL,
  `Abase` int(60) NOT NULL,
  `Mbid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  PRIMARY KEY (`Artid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `art_db`
--

INSERT INTO `art_db` (`Artid`, `Type`, `Painter`, `year`, `Abase`, `Mbid`, `Pid`, `comments`) VALUES
(1, 'Abstarct', 'Yusuf', 2000, 10000, 0, 2, 'Abstract Art'),
(2, 'Abstract', 'Rahul', 2000, 8000, 1, 4, 'Same abstract art but by different painter'),
(3, 'Fine arts', 'Raja', 2005, 10000, 0, 5, 'Painting needed');

-- --------------------------------------------------------

--
-- Table structure for table `car_db`
--

CREATE TABLE IF NOT EXISTS `car_db` (
  `Carid` int(11) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(60) NOT NULL,
  `Model` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `Basep` int(20) NOT NULL,
  `Mbid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  PRIMARY KEY (`Carid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `car_db`
--

INSERT INTO `car_db` (`Carid`, `Brand`, `Model`, `color`, `Basep`, `Mbid`, `Pid`, `comments`) VALUES
(1, 'Maruti', '800', 'Red', 20000, 0, 5, 'Looking forward'),
(2, 'Maruti', 'Esteem', 'Grey', 25000, 0, 5, 'Looking forward to get  a good deal'),
(3, 'Maruti', '800', 'Blood Red', 19800, 1, 3, 'Best Price');

-- --------------------------------------------------------

--
-- Table structure for table `comp_db`
--

CREATE TABLE IF NOT EXISTS `comp_db` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cbrand` varchar(60) NOT NULL,
  `Os` varchar(60) NOT NULL,
  `Color` varchar(60) NOT NULL,
  `Ram` varchar(60) NOT NULL,
  `processor` varchar(60) NOT NULL,
  `Hdd` varchar(60) NOT NULL,
  `graphic` varchar(60) NOT NULL,
  `Cbase` int(60) NOT NULL,
  `Mbid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comp_db`
--

INSERT INTO `comp_db` (`cid`, `cbrand`, `Os`, `Color`, `Ram`, `processor`, `Hdd`, `graphic`, `Cbase`, `Mbid`, `Pid`, `comments`) VALUES
(1, 'HP', 'Windows', 'Silver', '512 MB', '3.3 GHZ', '160 GB', '512 MB', 10000, 0, 5, 'Looking forward'),
(2, 'Sony Vaio', 'AMD', 'White', '16 GB', '6.4 GHZ', '1 TB', '1 GB', 30000, 0, 2, 'i need a new Laptop'),
(3, 'HP Envy', 'Windows', 'Silver', '1 GB', '3.4 GHZ', '160 GB', '512 MB', 9900, 1, 6, 'Best deal for you.');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE IF NOT EXISTS `credit_card` (
  `member` varchar(60) NOT NULL,
  `card_type` varchar(60) NOT NULL,
  `card_number` int(16) NOT NULL,
  `phone` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `ship_address` varchar(200) NOT NULL,
  `pro_type` varchar(20) NOT NULL,
  `pack_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`member`, `card_type`, `card_number`, `phone`, `country`, `ship_address`, `pro_type`, `pack_type`) VALUES
('Praveen', 'visa', 1122334455667788, 2147483647, 'India', 'Cambridge, MA', 'mobile', 1),
('Praveen', 'visa', 9988776655443322, 9887665543, 'India', 'Dadar west', 'mobile', 1),
('Praveen', 'visa', 1234567812345678, 9773483893, 'India', 'Dadar west', 'mobile', 1),
('Sabrish', 'master', 1357246813572468, 8956126748, 'India', 'Alaska', 'mobile', 1),
('Sabrish Menon', 'express', 1234876512348765, 9970302017, 'India', 'Borivali West', 'comp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_db`
--

CREATE TABLE IF NOT EXISTS `mobile_db` (
  `Mid` int(11) NOT NULL AUTO_INCREMENT,
  `mbrand` varchar(60) NOT NULL,
  `model` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `Os` varchar(60) NOT NULL,
  `Mbase` int(60) NOT NULL,
  `Mbid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  PRIMARY KEY (`Mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mobile_db`
--

INSERT INTO `mobile_db` (`Mid`, `mbrand`, `model`, `color`, `Os`, `Mbase`, `Mbid`, `Pid`, `comments`) VALUES
(2, 'Nokia ', 'Lumnia', 'Black', 'Windows', 20000, 0, 2, 'Looking for a lumnia'),
(3, 'Nokia', 'Lumnia', 'Black', 'Windows', 19500, 2, 1, 'Best Deal for the day'),
(4, 'Sony Ericson', 'E25', 'Blue', 'Android', 15000, 0, 5, 'mobile needed'),
(5, 'Sony Ericson', 'E25', 'Black', 'Android', 14800, 4, 1, 'Available in different color');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(60) NOT NULL,
  `dateofbirth` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Type` int(1) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `Dealer` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Fullname`, `dateofbirth`, `Gender`, `Phone`, `Email`, `Type`, `Address`, `companyname`, `Dealer`, `username`, `password`) VALUES
(1, 'Amey', '1987-08-19', 'male', '9773483893', 'amey.kelekar@gmail.com', 2, 'Boston, MA', 'Infosys', 'mobile', 'amey', 'Amey@123'),
(2, 'Praveen', '1989-01-06', 'male', '8956126748', 'praveenkumar@yahoo.com', 1, 'Cambridge, MA', 'none', 'none', 'praveen', 'Praveen'),
(3, 'Jibin', '1989-08-20', 'male', '9821556323', 'jibinjohnjackson@gmail.com', 2, 'CityView ', 'Capgemini', 'car', 'jibin', 'Jibin@123'),
(4, 'Neville', '1990-03-11', 'male', '9920703017', 'nevillerohan@live.com', 2, 'Dadar East', 'Mahindra', 'art', 'neville', 'Neville1'),
(5, 'Sabrish', '1992-11-11', 'male', '7723665467', 'cool_dude3531@yahoo.com', 1, 'City View, MA', 'none', 'none', 'sabrish', 'Sabrish'),
(6, 'Deryl', '1989-08-25', 'male', '9876678998', 'deryl.allan24@gmil.com', 2, 'Alewife, MA', 'Persistent', 'comp', 'deryl', 'Deryl123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
