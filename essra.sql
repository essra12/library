-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2021 at 11:13 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essra`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `B_ID` int(11) NOT NULL AUTO_INCREMENT,
  `B_name` varchar(50) NOT NULL,
  PRIMARY KEY (`B_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`B_ID`, `B_name`) VALUES
(1, 'ارض زيكولا'),
(2, 'سحر القياده '),
(3, 'الثقة و الاعتزاز بالنقس'),
(5, 'books'),
(4, 'Saher Elqiadoh'),
(6, 'Saher Elqiadoh');

-- --------------------------------------------------------

--
-- Table structure for table `crateac`
--

DROP TABLE IF EXISTS `crateac`;
CREATE TABLE IF NOT EXISTS `crateac` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `Userpass1` varchar(50) NOT NULL,
  `Userpass2` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crateac`
--

INSERT INTO `crateac` (`userID`, `UserName`, `UserEmail`, `Userpass1`, `Userpass2`) VALUES
(2, 'khawla', 'khawla@gmail.com', '172072', '172072'),
(5, 'mohamed', 'mohamed@gmail.com', '12345', '12345'),
(4, 'Farah', 'farah@gmail.com', '172091', '172091'),
(6, 'sara', 'sara@yahoo.com', '112011', '112011'),
(7, 'saja', 'saja@gmail.com', '2021', '2021'),
(13, 'Essra ', 'mjuyhue@khiefh.com', 'kjnk', ''),
(15, 'essra sowan', 'essrasowan711@gmail.com', '1234', '1234'),
(16, 'essra sowan', 'essrasowan711@gmail.com', '2021', '2021'),
(12, 'essra sowan', 'essrasowan711@gmail.com', '123', '123'),
(20, 'noor', 'noor@gmail.com', '1818', '1818'),
(22, 'yakeen ZRIBA', 'yakeen@gmail.com', '1230', '1230'),
(23, 'kolod', 'kholod@gmail.com', '1717', '1717'),
(27, 'ekram ', 'ekram@gmail.com', '1999', '1999'),
(57, 'esra', 'yakeen@gmail.com', '1010', '1010'),
(29, 'fooz', 'fooz@gmail.com', '5522', '5522'),
(42, 'yakeen ZRIBA', 'yakeen@gmail.com', '123', '123'),
(56, 'Abdo', 'Abdo@gmail.com', '7777', '7777'),
(55, 'Foze', 'Foze@gmail.com', '6699', '6699'),
(40, 'asma', 'asma@gmail.com', '2018', '2018'),
(41, 'essraSO', 'essraSO@gmail.com', '1233', '1233'),
(58, 'essra', 'essra@gmail.com', '2020', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

DROP TABLE IF EXISTS `createaccount`;
CREATE TABLE IF NOT EXISTS `createaccount` (
  `UserName` varchar(50) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `Userpass1` int(11) NOT NULL,
  `Userpass2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `createaccount`
--

INSERT INTO `createaccount` (`UserName`, `UserEmail`, `Userpass1`, `Userpass2`) VALUES
('Ali Said', 'ahmedali@gmail.cpm', 456, 456),
('yakeen', 'yakeen@gmail.com', 172090, 172090),
('ahmed', 'alo@gmail.com', 1234, 1234),
('essra sowan', 'alo@gmail.com', 123, 456);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `Uname` varchar(50) NOT NULL,
  `Uemail` varchar(50) NOT NULL,
  `Umassege` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`Uname`, `Uemail`, `Umassege`) VALUES
('khawla', 'khawla@gmail.com', 'I liked the book '),
('sara', 'essrasowan@gmial.com', 'good book '),
('ESSRA', 'essrasowan@gmial.com', 'Good Book'),
('yakeen zreda', 'yakeen@gmail.com', 'good book '),
('Sara', 'Sara@gmail.com', 'Nice book '),
('essra', 'essrasowan@gmial.com', 'Wenderful book .'),
('khawla', 'khawla@gmail.com', 'i realy like this book ^-^ .'),
('Mohamed', 'mohamed@khhrf.com', 'like this ^-^ '),
('Kholodi', 'essrasowan@gmial.com', 'nice book ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Uname` varchar(50) NOT NULL,
  `Upass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uname`, `Upass`) VALUES
('essra', '172038');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
