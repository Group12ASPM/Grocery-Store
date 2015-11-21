-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 06:39 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE IF NOT EXISTS `adminpanel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(30) NOT NULL,
  `adminpwd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `adminuser`, `adminpwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `ReceivedMailId` varchar(50) NOT NULL,
  `SenderMailId` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Body` varchar(500) NOT NULL,
  `MailDate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `ReceivedMailId`, `SenderMailId`, `Subject`, `Body`, `MailDate`) VALUES
(2, 'nagababu', 'admin@ets.com', 'helll', 'menfjn', '10:58 AM04 02 2014'),
(3, '', 'nagababu', 'hi', 'jfksdkdhsjkhfjhk', '04 02 2014'),
(4, '', 'nagababu', 'hi', 'jfksdkdhsjkhfjhk', '04 02 2014'),
(5, '', 'nagababu', 'hi', 'jfksdkdhsjkhfjhk', '04 02 2014'),
(6, 'admin@gmail.com', 'nagababu', 'hi', 'jdfhjhfjh', '04 02 2014'),
(7, 'nagababu', 'admin@ets.com', 'hehehd', 'ehedf', '04 02 2014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE IF NOT EXISTS `tbl_books` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `fcover` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publiser` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `netprice` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`bookid`, `fcover`, `title`, `description`, `author`, `publiser`, `price`, `discount`, `netprice`, `category`) VALUES
(27, '10003989_760987460587355_1539240842_n.jpg', 'computersthtgh', 'eknjerntj', 'mahi', 'w23w', 200, 10, 180, 'Yoga'),
(26, 'download (1).jpg', 'scienecr2', 'kr3kerken', 'hari', 'wjrjenr', 180, 10, 162, 'Science'),
(25, '10001507_543982289034426_89751496_n.jpg', 'scienecr', 'wjjentgj', 'naaru', 'ejbgjegfj', 100, 50, 50, 'Science'),
(24, '10001507_543982289034426_89751496_n.jpg', 'fiction2', 'nejtn43jt4tk', 'mahesh2', 'jwbfjejf', 1280, 10, 1152, 'Fiction'),
(23, 'download.jpg', 'fiction', 'jejregtjrtjkgr', 'ballu', 'wrekr', 1600, 15, 1360, 'Fiction'),
(22, 'download.jpg', 'haelht2', 'megjrgjrnj', 'mahesh', 'wjrwjrj', 2000, 30, 1400, 'Health'),
(21, 'download (1).jpg', 'health1', 'emwnjrwngjtrnt', 'nagababu', 'wwkfke', 1000, 10, 900, 'Health'),
(20, '10003989_760987460587355_1539240842_n.jpg', 'comics2', 'rejfjergjtrn', 'naresh3', 'jbwejgjr', 200, 10, 180, 'comics'),
(19, '10001507_543982289034426_89751496_n.jpg', 'comics1', 'brhbrhbehrbher', 'naresh', 'hehfeh', 1200, 20, 960, 'comics'),
(29, '10003989_760987460587355_1539240842_n.jpg', 'agricluture', 'emrjentr', 'sv', 'wkrk3ej', 10000, 30, 7000, 'Agriculture'),
(30, '10003989_760987460587355_1539240842_n.jpg', 'agricluture2', 'ekekt', 'agri', 'erejh', 100000, 70, 30000, 'Agriculture'),
(31, 'download (1).jpg', 'history', 'fheufh', 'waaaa', 'wkrnrwk', 20000, 90, 2000, 'History'),
(32, '10003989_760987460587355_1539240842_n.jpg', 'history2', 'jetrjthrh', 'asvna', 'kwewkj', 120, 10, 108, 'History'),
(33, '10003989_760987460587355_1539240842_n.jpg', 'yoga', 'rgjrjrkt', 'mahi1', 'ejjreh', 1300, 20, 1040, 'Yoga'),
(34, 'download.jpg', 'yoga2', 'jgtjrj', 'ektritj', 'kerke', 1000, 20, 800, 'Yoga'),
(35, '10003989_760987460587355_1539240842_n.jpg', 'autobiography', 'etrj', 'venu', 'ali', 1200, 10, 1080, 'Autobiography'),
(36, 'download (1).jpg', 'autobiography2', 'fjgjfjgb', 'mahi1', 'ejheh', 120, 10, 108, 'Autobiography');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryid`, `categoryname`) VALUES
(1, 'Comics'),
(2, 'Health'),
(3, 'Fiction'),
(4, 'science'),
(5, 'computer'),
(6, 'yoga'),
(7, 'agriculture'),
(8, 'history'),
(9, 'autobiography');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cboy`
--

CREATE TABLE IF NOT EXISTS `tbl_cboy` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `ccompany` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_cboy`
--

INSERT INTO `tbl_cboy` (`cid`, `cname`, `phone`, `ccompany`, `address`) VALUES
(1, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE IF NOT EXISTS `tbl_courier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `qn` int(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `add` varchar(100) NOT NULL,
  `bid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`id`, `uname`, `bname`, `qn`, `phone`, `add`, `bid`) VALUES
(1, 'nagababu', 'computers', 6, 9866611539, 'jwhfefejfh', 17),
(2, 'nagababu', 'computers', 4, 9866611539, 'jwhfefejfh', 14),
(3, 'naresh', 'naresh', 5, 2147483647, 'nebhgtrbtj', 9),
(4, 'nagababu', 'haelht', 0, 2147483647, 'jwhfefejfh', 6),
(5, 'nagababu', 'naresh', 0, 2147483647, 'jwhfefejfh', 3),
(6, 'nagababu', 'computers2', 1, 9866611539, 'jwhfefejfh', 10),
(7, 'naresh', 'sadiq', 0, 2147483647, 'nebhgtrbtj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardno` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `request` int(11) NOT NULL,
  `response` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cardno`, `pin`, `quantity`, `paid`, `phone`, `username`, `address`, `bookname`, `time`, `date`, `request`, `response`) VALUES
(1, 123456789, 12334, 0, 0, 2147483647, 'naresh', 'nebhgtrbtj', 'sadiq', '', '', 1, 1),
(2, 123456789, 1234, 1, 1, 2147483647, 'nagababu', 'jwhfefejfh', 'comics', '', '', 1, 1),
(3, 2147483647, 12223, 0, 540, 2147483647, 'nagababu', 'jwhfefejfh', 'naresh', '', '', 0, 0),
(4, 2147483647, 1234, 0, 0, 2147483647, 'naresh', 'nebhgtrbtj', 'comics', '', '', 0, 0),
(5, 2147483647, 1234, 0, 0, 2147483647, 'naresh', 'nebhgtrbtj', 'comics', '', '', 0, 0),
(6, 2147483647, 123445, 0, 0, 2147483647, 'nagababu', 'jwhfefejfh', 'haelht', '', '', 0, 0),
(9, 123456789, 1234, 5, 450, 2147483647, 'naresh', 'nebhgtrbtj', 'naresh', '', '', 0, 0),
(10, 0, 0, 1, 0, 9866611539, 'nagababu', 'jwhfefejfh', 'computers2', '', '', 1, 1),
(11, 0, 0, 1, 0, 9866611539, 'nagababu', 'jwhfefejfh', 'computers2', '02:34 PM', '04 01 2014', 0, 0),
(12, 0, 0, 1, 0, 9866611539, 'nagababu', 'jwhfefejfh', 'computers2', '02:34 PM', '04 01 2014', 0, 0),
(13, 2147483647, 12345, 5, 810, 9866611539, 'nagababu', 'jwhfefejfh', 'scienecr2', '02:58 PM', '04 01 2014', 0, 0),
(14, 2147483647, 1234, 4, 720, 9866611539, 'nagababu', 'jwhfefejfh', 'computers', '06:05 PM', '04 01 2014', 0, 0),
(15, 2147483647, 123445, 1, 0, 9866611539, 'nagababu', 'jwhfefejfh', 'comics2', '01:42 PM', '04 02 2014', 0, 0),
(16, 2147483647, 123, 4, 720, 9866611539, 'nagababu', 'jwhfefejfh', 'comics2', '01:44 PM', '04 02 2014', 0, 0),
(17, 2147483647, 1234, 6, 1080, 9866611539, 'nagababu', 'jwhfefejfh', 'computers', '01:46 PM', '04 02 2014', 0, 0),
(18, 123456798, 123456, 5, 810, 9866611539, 'nagababu', 'jwhfefejfh', 'scienecr2', '04:48 PM', '04 02 2014', 1, 0),
(19, 0, 0, 0, 360, 9866611539, 'nagababu', 'jwhfefejfh', 'computersthtgh', '05:34 PM', '04 02 2014', 1, 0),
(20, 122345, 4354, 5, 900, 9866611539, 'nagababu', 'jwhfefejfh', 'comics2', '05:45 PM', '04 02 2014', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` longblob NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hintq` varchar(100) NOT NULL,
  `hinda` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `fname`, `mname`, `lname`, `dob`, `email`, `phone`, `username`, `password`, `hintq`, `hinda`, `address`, `image`) VALUES
(1, 'nagababu', 'sv', 'veera', '19/04/1990', 'sirigineedi.sv@gmail.com', 0x39383636363131353339, 'nagababu', '123456', 'what is your pet name', 'dog', 'jwhfefejfh', '10001507_543982289034426_89751496_n.jpg'),
(2, 'naresh', 'babu', 'n', '19/04/1990', 'abc@gmail.com', 0x39383636363131353339, 'naresh', '123456789', 'your nick name', 'naru', 'nebhgtrbtj', '10003989_760987460587355_1539240842_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
