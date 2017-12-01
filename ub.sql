-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 02:22 PM
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
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `username` varchar(50) NOT NULL,
  `reqUnits` varchar(50) NOT NULL,
  `reqCode` varchar(50) NOT NULL,
  `reqDate` date NOT NULL,
  `reqCarNo` int(11) NOT NULL,
  `qty1` int(11) NOT NULL,
  `desc1` text NOT NULL,
  `euc1` float NOT NULL,
  `etc1` float NOT NULL,
  `name1` varchar(50) NOT NULL,
  `check1` varchar(50) NOT NULL,
  `qty2` int(11) NOT NULL,
  `desc2` text NOT NULL,
  `euc2` float NOT NULL,
  `etc2` float NOT NULL,
  `name2` varchar(50) NOT NULL,
  `check2` varchar(50) NOT NULL,
  `qty3` int(11) NOT NULL,
  `desc3` text NOT NULL,
  `euc3` float NOT NULL,
  `etc3` float NOT NULL,
  `name3` varchar(50) NOT NULL,
  `check3` varchar(50) NOT NULL,
  `qty4` int(11) NOT NULL,
  `desc4` text NOT NULL,
  `euc4` float NOT NULL,
  `etc4` float NOT NULL,
  `name4` varchar(50) NOT NULL,
  `check4` varchar(50) NOT NULL,
  `initial` text NOT NULL,
  `replacement` text NOT NULL,
  `reqName` varchar(50) NOT NULL,
  `reqCheck` varchar(50) NOT NULL,
  `endName` varchar(50) NOT NULL,
  `endCheck` varchar(50) NOT NULL,
  `TMS` text NOT NULL,
  `tmsDateRec` date NOT NULL,
  `tmsDateOut` date NOT NULL,
  `tmsCheck` varchar(50) NOT NULL,
  `tmsName` varchar(50) NOT NULL,
  `BPQM` text NOT NULL,
  `bpqmDateRec` date NOT NULL,
  `bpqmDateOut` date NOT NULL,
  `bpqmCheck` varchar(50) NOT NULL,
  `bpqmName` varchar(50) NOT NULL,
  `cmchName` varchar(50) NOT NULL,
  `cmchCheck` varchar(50) NOT NULL,
  `presName` varchar(50) NOT NULL,
  `presCheck` varchar(50) NOT NULL,
  `dateRec` date NOT NULL,
  `procName` varchar(50) NOT NULL,
  `procCheck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`username`, `reqUnits`, `reqCode`, `reqDate`, `reqCarNo`, `qty1`, `desc1`, `euc1`, `etc1`, `name1`, `check1`, `qty2`, `desc2`, `euc2`, `etc2`, `name2`, `check2`, `qty3`, `desc3`, `euc3`, `etc3`, `name3`, `check3`, `qty4`, `desc4`, `euc4`, `etc4`, `name4`, `check4`, `initial`, `replacement`, `reqName`, `reqCheck`, `endName`, `endCheck`, `TMS`, `tmsDateRec`, `tmsDateOut`, `tmsCheck`, `tmsName`, `BPQM`, `bpqmDateRec`, `bpqmDateOut`, `bpqmCheck`, `bpqmName`, `cmchName`, `cmchCheck`, `presName`, `presCheck`, `dateRec`, `procName`, `procCheck`) VALUES
('userEmployee', '1', '1', '2017-12-01', 1, 1, '1', 1, 1, '1', 'TRUE', 0, '', 0, 0, '', 'FALSE', 0, '', 0, 0, '', 'FALSE', 0, '', 0, 0, '', 'FALSE', '1', '', '1', '', '1', '', '1', '2017-12-01', '2017-12-01', 'TRUE', '1', '1', '2017-12-01', '2017-12-01', 'TRUE', '', '1', 'TRUE', '1', 'TRUE', '2017-12-01', '1', 'TRUE'),
('userEmployee', '1', '1', '2017-12-06', 1, 1, '1', 1, 1, '1', 'TRUE', 0, '', 0, 0, '', 'FALSE', 0, '', 0, 0, '', 'FALSE', 0, '', 0, 0, '', 'FALSE', '1', '1', '1', '', '1', '', '1', '2017-12-01', '2017-12-01', 'TRUE', '1', '1', '2017-12-01', '2017-12-01', 'TRUE', '', '1', 'TRUE', '1', 'TRUE', '2017-12-01', '1', 'TRUE');

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `username` varchar(50) NOT NULL,
  `reqUnit` varchar(50) NOT NULL,
  `SOL` varchar(50) NOT NULL,
  `reqNum` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `chargedTo` varchar(50) NOT NULL,
  `reqDate` date NOT NULL,
  `qty1` int(11) NOT NULL,
  `unit1` varchar(50) NOT NULL,
  `itemDesc1` text NOT NULL,
  `euc1` float NOT NULL,
  `etc1` float NOT NULL,
  `assignee1` varchar(50) NOT NULL,
  `qty2` int(11) NOT NULL,
  `unit2` varchar(50) NOT NULL,
  `itemDesc2` text NOT NULL,
  `euc2` float NOT NULL,
  `etc2` float NOT NULL,
  `assignee2` varchar(50) NOT NULL,
  `qty3` int(11) NOT NULL,
  `unit3` varchar(50) NOT NULL,
  `itemDesc3` text NOT NULL,
  `euc3` float NOT NULL,
  `etc3` float NOT NULL,
  `assignee3` varchar(50) NOT NULL,
  `qty4` int(11) NOT NULL,
  `unit4` varchar(50) NOT NULL,
  `itemDesc4` text NOT NULL,
  `euc4` float NOT NULL,
  `etc4` float NOT NULL,
  `assignee4` varchar(50) NOT NULL,
  `qty5` int(11) NOT NULL,
  `unit5` varchar(50) NOT NULL,
  `itemDesc5` text NOT NULL,
  `euc5` float NOT NULL,
  `etc5` float NOT NULL,
  `assignee5` varchar(50) NOT NULL,
  `purpose` text NOT NULL,
  `preparedBy` varchar(50) NOT NULL,
  `approvedBy` varchar(50) NOT NULL,
  `er` text NOT NULL,
  `erName` varchar(50) NOT NULL,
  `erDate` date NOT NULL,
  `recieveName` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `cost` float NOT NULL,
  `expDate` date NOT NULL,
  `refNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`username`, `reqUnit`, `SOL`, `reqNum`, `address`, `chargedTo`, `reqDate`, `qty1`, `unit1`, `itemDesc1`, `euc1`, `etc1`, `assignee1`, `qty2`, `unit2`, `itemDesc2`, `euc2`, `etc2`, `assignee2`, `qty3`, `unit3`, `itemDesc3`, `euc3`, `etc3`, `assignee3`, `qty4`, `unit4`, `itemDesc4`, `euc4`, `etc4`, `assignee4`, `qty5`, `unit5`, `itemDesc5`, `euc5`, `etc5`, `assignee5`, `purpose`, `preparedBy`, `approvedBy`, `er`, `erName`, `erDate`, `recieveName`, `date`, `supplier`, `remarks`, `cost`, `expDate`, `refNo`) VALUES
('userEmployee', '1', '1', 1, '1', '1', '2017-12-02', 1, '1', '1', 1, 1, 'a', 0, '', '', 0, 0, '', 0, '', '', 0, 0, '', 0, '', '', 0, 0, '', 0, '', '', 0, 0, '', '1', '1', '1', '1', '1', '2017-12-02', '1', '2017-12-11', '1', '1', 1, '2017-12-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `username` varchar(50) NOT NULL,
  `tfNo` int(11) NOT NULL,
  `division` varchar(50) NOT NULL,
  `SOL` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `movement` varchar(50) NOT NULL,
  `fromName` varchar(50) NOT NULL,
  `toName` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `itemDesc` text NOT NULL,
  `tagNo` int(11) NOT NULL,
  `present` varchar(50) NOT NULL,
  `new` varchar(50) NOT NULL,
  `cpsr` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `oGuardCheck` varchar(50) NOT NULL,
  `rGuardCheck` varchar(50) NOT NULL,
  `oName` varchar(50) NOT NULL,
  `oCheck` varchar(50) NOT NULL,
  `rName` varchar(50) NOT NULL,
  `rCheck` varchar(50) NOT NULL,
  `solCheck` varchar(50) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cCheck` varchar(50) NOT NULL,
  `nName` varchar(50) NOT NULL,
  `nCheck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`username`, `tfNo`, `division`, `SOL`, `date`, `movement`, `fromName`, `toName`, `item`, `qty`, `unit`, `itemDesc`, `tagNo`, `present`, `new`, `cpsr`, `remarks`, `oGuardCheck`, `rGuardCheck`, `oName`, `oCheck`, `rName`, `rCheck`, `solCheck`, `cName`, `cCheck`, `nName`, `nCheck`) VALUES
('userEmployee', 1, '1', '1', '2017-12-08', 'Division-Unit', '1', '1', '1', 1, '1', '1', 1, '1', '1', '1', '1', 'TRUE', 'TRUE', '1', 'on', '1', 'on', 'on', '1', 'on', '1', 'on');

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
