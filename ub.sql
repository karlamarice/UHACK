-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `code` varchar(50) NOT NULL,
  `contractorName` varchar(50) NOT NULL,
  `contractorPhone` double NOT NULL,
  `contractorEmail` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `companyPhone` double NOT NULL,
  `companyEmail` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `spec` text NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `addInfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`code`, `contractorName`, `contractorPhone`, `contractorEmail`, `companyName`, `ownerName`, `address`, `companyPhone`, `companyEmail`, `itemName`, `spec`, `warranty`, `price`, `addInfo`) VALUES
('PHN11217', 'Juana dela Cruz', 9123456789, 'juanaDC@email.com', 'IceBear Phones', 'Ice Bear', '123 The Cave st. San Francisco, Manila', 9987654321, 'icebear@email.com', 'Lenovo Vibe P1M', 'Display: 5.00-inch,\r\nProcessor: 1GHz quad-core,\r\nFront Camera: 5-megapixel,\r\nResolution: 720x1280 pixels,\r\nRAM: 2GB,\r\nOS: Android 5.0,\r\nStorage: 16GB,\r\nRear Camera: 8-megapixel,', '1 year', 5000, 'Colours:	Platinum, Graphite Grey, Gold. Battery capacity (mAh)	3900'),
('PHN1121', '1', 1, '1', '1', '1', '1', 1, '1', '1', '1', '1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bidinfo`
--

CREATE TABLE `bidinfo` (
  `code` varchar(50) NOT NULL,
  `itemType` varchar(50) NOT NULL,
  `reqSpec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidinfo`
--

INSERT INTO `bidinfo` (`code`, `itemType`, `reqSpec`) VALUES
('PHN1121', 'Phone', 'Display: 5.00-inch,\r\nProcessor: 1GHz quad-core,\r\nFront Camera: 5-megapixel,\r\nResolution: 720x1280 pixels,\r\nRAM: 2GB,\r\nOS: Android 5.0,\r\nStorage: 16GB,\r\nRear Camera: 8-megapixel');

-- --------------------------------------------------------

--
-- Table structure for table `companyproperties`
--

CREATE TABLE `companyproperties` (
  `code` varchar(25) NOT NULL,
  `number` int(11) NOT NULL,
  `assignedTo` varchar(50) NOT NULL,
  `assignedBy` varchar(50) NOT NULL,
  `dateDelivered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contractorName` varchar(50) NOT NULL,
  `contractorPhone` int(11) NOT NULL,
  `contractorEmail` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `companyPhone` int(11) NOT NULL,
  `companyEmail` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `spec` text NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `expDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contractorName`, `contractorPhone`, `contractorEmail`, `companyName`, `ownerName`, `address`, `companyPhone`, `companyEmail`, `itemName`, `spec`, `warranty`, `price`, `expDate`) VALUES
('1', 1, '1', '1', '1', '1', 1, '1', '1', '1', '1', 1, '2017-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `img` longblob NOT NULL,
  `code` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `warranty` varchar(25) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`img`, `code`, `name`, `description`, `supplier`, `brand`, `warranty`, `price`) VALUES
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x4c6f676f2e706e67, '1', '1', '1', '1', '1', '1', 1),
(0x43686c6f655f3135352e6a7067, '1', '1', '1', '1', '1', '1', 1),
(0x43686c6f655f3135352e6a7067, '1', '1', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(75) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `position`) VALUES
('userEmployee', '1qaz2wsx', 'Juan dela Cruz', 'Employee'),
('userProcOff', '1qaz2wsx', 'Juan dela Cruz', 'Procurement Officer'),
('userProcHead', '1qaz2wsx', 'Juan dela Cruz', 'Procurement Head'),
('userHeadOrManager', '1qaz2wsx', 'Juan dela Cruz', 'Head or Manager'),
('userGS', '1qaz2wsx', 'Juan dela Cruz', 'GS Staff or Officer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
