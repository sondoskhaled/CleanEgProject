-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 11:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaneg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(4000) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`title`, `content`, `adress`, `email`, `phone`) VALUES
('About Cleaneg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur voluptatum assumenda velit distinctio repudiandae est veritatis earum optio sapiente, quia ut perspiciatis nemo tempora eligendi perferendis quaerat quod maiores quasi! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur voluptatum assumenda velit distinctio repudiandae est veritatis earum optio sapiente, quia ut perspiciatis nemo tempora eligendi perferendis quaerat quod maiores quasi! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur voluptatum assumenda velit distinctio repudiandae est veritatis earum optio sapiente, quia ut perspiciatis nemo tempora eligendi perferendis quaerat quod maiores quasi!', 'htrhtrg/gdrgdr/gdgdgdf', 'gdgdfdf.hasaa@gmail.com', '01098441697');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `AdsNo` int(11) NOT NULL,
  `AdsTitle` varchar(255) DEFAULT NULL,
  `AdsLink` varchar(1000) DEFAULT NULL,
  `AdsDetails` varchar(1000) DEFAULT NULL,
  `AdsStartDate` datetime DEFAULT NULL,
  `AdsEndDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryNo` int(11) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryNo`, `CategoryName`) VALUES
(1, 'Plastic'),
(2, 'Glass'),
(3, 'Watch'),
(4, 'Electronic'),
(5, 'Paper');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `CityNo` int(11) NOT NULL,
  `CityName` varchar(255) NOT NULL,
  `GovernmentNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`CityNo`, `CityName`, `GovernmentNo`) VALUES
(1, '15 May City', 1),
(2, 'Abdeen', 1),
(3, 'El Darb El Ahmar', 1),
(4, 'Ain Shams', 1),
(5, 'Amreya', 1),
(6, 'Azbakeya	', 1),
(7, 'El Basatin', 1),
(8, 'El Gamaliya', 1),
(9, 'El Khalifa', 1),
(10, 'Maadi', 1),
(11, 'El Marg', 1),
(12, 'El Masara', 1),
(13, 'El Matareya', 1),
(14, 'El Mokattam', 1),
(15, 'El Muski', 1),
(16, 'New Cairo', 1),
(17, 'El Weili', 1),
(18, 'El Nozha', 1),
(19, 'El Sharabiya', 1),
(20, 'El Shorouk', 1),
(21, 'El Segil', 1),
(22, 'El Salam', 1),
(23, 'El Sayeda Zeinab', 1),
(24, 'El Tebbin', 1),
(25, 'El Zaher', 1),
(26, 'Zamalek', 1),
(27, 'El Zawya El Hamra', 1),
(28, 'Zeitoun', 1),
(29, 'Bab El Sharia', 1),
(30, 'Bulaq', 1),
(31, 'Dar El Salam', 1),
(32, 'Hada\'iq El Qobbah', 1),
(33, 'Helwan', 1),
(34, 'Nasr City', 1),
(35, 'Badr City', 1),
(36, 'Heliopolis', 1),
(37, 'Old Cairo', 1),
(38, 'Manshiyat Naser', 1),
(39, 'Qasr El Nil', 1),
(40, 'Rod El Farag	', 1),
(41, 'Shubra', 1),
(42, 'Tura', 1),
(43, 'Dokki', 2),
(44, 'Pyramids', 2),
(45, 'Agouza', 2),
(46, 'El Ayyat', 2),
(47, 'El Badrashein', 2),
(48, 'El Hawamdeya', 2),
(49, 'El Omraniya', 2),
(50, 'El Wahat El Bahariya', 2),
(51, 'El Warraq', 2),
(52, 'Sheikh Zayed City', 2),
(53, 'El Saff', 2),
(54, 'Atfeh', 2),
(55, 'Ossim', 2),
(56, 'Imbaba', 2),
(57, 'Kerdasa', 2),
(58, '6th of October City', 2);

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `CitizenID` int(100) NOT NULL,
  `CitizenName` varchar(255) NOT NULL,
  `CitizenEmail` varchar(255) NOT NULL,
  `CitizenPhone` varchar(50) DEFAULT NULL,
  `CitizenAddress` varchar(255) DEFAULT NULL,
  `CitizenPassword` varchar(255) NOT NULL,
  `CitizenSecurityQuestion` varchar(255) NOT NULL,
  `CitizenSecutityAnswer` varchar(255) NOT NULL,
  `CityNo` int(11) DEFAULT NULL,
  `GovernmentNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`CitizenID`, `CitizenName`, `CitizenEmail`, `CitizenPhone`, `CitizenAddress`, `CitizenPassword`, `CitizenSecurityQuestion`, `CitizenSecutityAnswer`, `CityNo`, `GovernmentNo`) VALUES
(1, 'sondos Mahmoud', 'sondoskhaled22@gmail.com', '01002869789', 'hadaeq helwan', '159753', 'second', 'ans', 58, 2),
(5, 'afnan', 'afnan@gmail.com', '01002569222', 'addresss', '159753', '3', 'answer', 44, 2),
(69, 'ali', 'ali@h.com', NULL, '', '159753', '3', 'answer', 54, 2),
(70, 'khaled', 'khaledmohamed@yahoo.com', '01258654555', '', '12369', 'third your security question', 'sondos', 57, 2),
(76, 'amira', 'amira@hotmail.com', NULL, NULL, '159159', 'security', 'ans', 10, 1),
(81, 'fatma', 'fatma@yahoo.com', '01599988756', 'address', '159951', 'security', 'ans', 2, 1),
(83, 'fatma', 'fatmaa@yahoo.com', '01599958756', 'address', '159951', 'security', 'ans', 44, 2),
(87, 'fatma', 'fatoom@yahoo.com', '01579958756', 'address', '159951', 'security', 'ans', 10, 1),
(92, 'sondos khaled', 'sondoskaled@gmail.com', NULL, '', '159159', 'Second your security question', 'mmm', 15, 1),
(93, 'yomna', 'yomna@gmail.com', NULL, '', '159753', 'Second your security question', 'answer', 52, 2),
(94, 'sondos khaled', 'sondos@gmail.com', NULL, '', '258963', 'Second your security question', 'k', 20, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `citizenview`
-- (See below for the actual view)
--
CREATE TABLE `citizenview` (
`CitizenName` varchar(255)
,`CitizenEmail` varchar(255)
,`CitizenPhone` varchar(50)
,`CitizenAddress` varchar(255)
,`CitizenPassword` varchar(255)
,`CitizenSecurityQuestion` varchar(255)
,`CitizenSecutityAnswer` varchar(255)
,`CityName` varchar(255)
,`GovernmentName` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `ColorNo` int(11) NOT NULL,
  `ColorName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`ColorNo`, `ColorName`) VALUES
(1, 'Red'),
(2, 'Green'),
(3, 'Blue'),
(4, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyID` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyLicense` varchar(255) NOT NULL,
  `CompanyEmail` varchar(255) NOT NULL,
  `CompanyPhone` varchar(255) DEFAULT NULL,
  `CompanyAddress` varchar(255) DEFAULT NULL,
  `CompanyPassword` varchar(255) NOT NULL,
  `AboutCompany` varchar(255) DEFAULT NULL,
  `CityNo` int(11) DEFAULT NULL,
  `GovernmentNo` int(11) DEFAULT NULL,
  `CompanyStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyID`, `CompanyName`, `CompanyLicense`, `CompanyEmail`, `CompanyPhone`, `CompanyAddress`, `CompanyPassword`, `AboutCompany`, `CityNo`, `GovernmentNo`, `CompanyStatus`) VALUES
(17, 'Clean Egypt', 'CleanEg', 'cleanegnti@gmail.com', '01188886688', 'Company address', '159753', 'CleanEgypt', 10, 1, 'Confirmed'),
(19, 'Plastic Company', 'license', 'plasticcompany@gmail.com', '01588128888', 'address', '159753', 'Plastic Company', 44, 2, 'Confirmed'),
(25, '', 'Admin', '', NULL, NULL, 'Admin', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `companyview`
-- (See below for the actual view)
--
CREATE TABLE `companyview` (
`CompanyName` varchar(255)
,`CompanyLicense` varchar(255)
,`CompanyEmail` varchar(255)
,`CompanyPhone` varchar(255)
,`CompanyAddress` varchar(255)
,`CompanyPassword` varchar(255)
,`AboutCompany` varchar(255)
,`CityName` varchar(255)
,`GovernmentName` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `comptypyview`
-- (See below for the actual view)
--
CREATE TABLE `comptypyview` (
`TypeName` varchar(255)
,`OrderDate` datetime
,`OrderStatus` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactID` int(11) NOT NULL,
  `contactName` varchar(100) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `contactMessage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactID`, `contactName`, `contactEmail`, `contactMessage`) VALUES
(1, 'ooooo', 'hhhh@jbhj.hgfgf', 'gjyfjyg kugiutgiu kutitiyrfyjgt glutglugjl');

-- --------------------------------------------------------

--
-- Table structure for table `dcurrentposition`
--

CREATE TABLE `dcurrentposition` (
  `DPhone` varchar(11) NOT NULL,
  `OrderNo` int(11) NOT NULL,
  `Lat` float(40,13) NOT NULL,
  `Lng` float(40,13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcurrentposition`
--

INSERT INTO `dcurrentposition` (`DPhone`, `OrderNo`, `Lat`, `Lng`) VALUES
('01055566789', 11, 30.0723476409912, 31.0218734741211),
('01055566789', 17, 29.9655170440674, 31.3237495422363),
('01055566789', 18, 29.9655170440674, 31.3237495422363),
('01055566789', 21, 29.9655170440674, 31.3237495422363);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryPhone` varchar(11) NOT NULL,
  `DeliveryName` varchar(255) DEFAULT NULL,
  `DeliveryPassword` varchar(255) DEFAULT NULL,
  `DeliveryCity` int(255) DEFAULT NULL,
  `DeliveryStatus` varchar(255) DEFAULT NULL,
  `DeliveryAvaliableDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DeliveryPhone`, `DeliveryName`, `DeliveryPassword`, `DeliveryCity`, `DeliveryStatus`, `DeliveryAvaliableDateTime`) VALUES
('01055566789', 'Ahmed', 'D12345', 1, 'Busy', NULL),
('01144488536', 'Ali', 'D12345', 2, 'Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `FavNo` int(11) NOT NULL,
  `CitizenEmail` varchar(255) DEFAULT NULL,
  `ProductNo` int(11) DEFAULT NULL,
  `ColorNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`FavNo`, `CitizenEmail`, `ProductNo`, `ColorNo`) VALUES
(2, 'sondoskhaled22@gmail.com', 8, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `favview`
-- (See below for the actual view)
--
CREATE TABLE `favview` (
`FavNo` int(11)
,`CitizenEmail` varchar(255)
,`ProductName` varchar(255)
,`ColorNo` int(11)
,`ProductPrice` int(10)
,`ProductDetails` varchar(1000)
,`CategoryNo` int(11)
,`ProductNo` int(11)
,`CategoryName` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `GoodNo` int(11) NOT NULL,
  `RequestNo` int(11) DEFAULT NULL,
  `TypeNo` int(11) DEFAULT NULL,
  `TypeQuntity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`GoodNo`, `RequestNo`, `TypeNo`, `TypeQuntity`) VALUES
(1, 1, 1, '56'),
(2, 1, 2, '20'),
(3, 1, 1, '10'),
(4, 1, 3, '2'),
(5, 1, 4, '60'),
(6, 1, 2, '20'),
(7, 1, 4, '40'),
(8, 1, 3, '50'),
(9, 1, 3, '50'),
(10, 1, 2, '20');

-- --------------------------------------------------------

--
-- Table structure for table `governments`
--

CREATE TABLE `governments` (
  `GovernmentNo` int(11) NOT NULL,
  `GovernmentName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `governments`
--

INSERT INTO `governments` (`GovernmentNo`, `GovernmentName`) VALUES
(1, 'cairo'),
(2, 'giza'),
(3, 'alexandria'),
(4, 'aswan'),
(5, 'mansoura');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_Id` int(11) NOT NULL,
  `news_Title` varchar(255) DEFAULT NULL,
  `news_Content` varchar(255) DEFAULT NULL,
  `news_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_Id`, `news_Title`, `news_Content`, `news_Date`) VALUES
(1, 'ttttttt', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odit ex iure explicabo nobis tempore officia numquam, a expedita labore ducimus cum nesciunt eius maiores aliquam quibusdam quisquam error natus.', '2019-09-24 00:00:00'),
(3, 'rtergrg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odit ex iure explicabo nobis tempore officia numquam, a expedita labore ducimus cum nesciunt eius maiores aliquam quibusdam quisquam error natus.', '2019-09-20 00:00:00'),
(5, 'tyyhgbdf htfdf', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odit ex iure explicabo nobis tempore officia numquam, a expedita labore ducimus cum nesciunt eius maiores aliquam quibusdam quisquam error natus.', '2019-09-18 00:00:00'),
(8, 'fhgffg tyjyhdvd', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odit ex iure explicabo nobis tempore officia numquam, a expedita labore ducimus cum nesciunt eius maiores aliquam quibusdam quisquam error natus.', '2019-09-02 00:00:00'),
(9, 'gttrgt', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odit ex iure explicabo nobis tempore officia numquam, a expedita labore ducimus cum nesciunt eius maiores aliquam quibusdam quisquam error natus.', '2019-09-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ordercompany`
--

CREATE TABLE `ordercompany` (
  `OrderNo` int(11) NOT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `OrderStatus` varchar(255) DEFAULT NULL,
  `OrderQuntity` int(255) DEFAULT NULL,
  `OrderTotal` varchar(255) DEFAULT NULL,
  `TypeNo` int(11) DEFAULT NULL,
  `CompanyLicense` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercompany`
--

INSERT INTO `ordercompany` (`OrderNo`, `OrderDate`, `OrderStatus`, `OrderQuntity`, `OrderTotal`, `TypeNo`, `CompanyLicense`) VALUES
(1, '2019-09-13 20:29:10', 'Confirmed', 6, '300', 1, 'CleanEg'),
(2, '2019-09-13 20:29:10', 'Confirmed', 6, '120', 2, 'CleanEg'),
(3, '2019-09-13 20:29:10', 'Pending', 6, '900', 3, 'CleanEg'),
(4, '2019-09-13 20:29:10', 'Pending', 6, '660', 4, 'CleanEg'),
(5, '2019-09-13 22:11:38', 'Pending', 12, '240', 2, 'CleanEg'),
(6, '2019-09-13 22:14:38', 'Pending', 0, '0', 3, 'CleanEg'),
(7, '2019-09-17 07:43:49', 'Pending', 50, '2500', 1, 'CleanEg'),
(8, '2019-09-18 20:41:15', 'Pending', 80, '12000', 3, 'CleanEg'),
(9, '2019-09-20 10:50:07', 'Confirmed', 20, '1000', 1, 'CleanEg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderNo` int(11) DEFAULT NULL,
  `ProductNo` int(11) DEFAULT NULL,
  `ProductColorNo` int(11) DEFAULT NULL,
  `Quntity` int(255) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderNo`, `ProductNo`, `ProductColorNo`, `Quntity`, `Price`, `Total`) VALUES
(11, 3, 3, 1, 1000, 1000),
(11, 3, 3, 3, 1000, 3000),
(12, 3, 3, 1, 1000, 1000),
(12, 3, 1, 1, 1000, 1000),
(12, 4, 4, 1, 20, 20),
(12, 4, 3, 5, 20, 100),
(13, 3, 3, 5, 1000, 5000),
(13, 4, 4, 5, 20, 100),
(13, 3, 2, 1, 1000, 1000),
(13, 3, 1, 1, 1000, 1000),
(13, 3, 2, 1, 1000, 1000),
(17, 3, 3, 1, 1000, 1000),
(18, 4, 4, 1, 20, 20),
(18, 7, 3, 2, 5000, 10000),
(20, 3, 2, 1, 1000, 1000),
(21, 7, 3, 1, 5000, 5000),
(21, 4, 3, 3, 20, 60),
(21, 3, 1, 2, 1000, 2000),
(26, 3, 1, 1, 1000, 1000),
(26, 3, 1, 15, 1000, 15000),
(28, 8, 4, 3, 60, 180),
(29, 7, 3, 10, 5000, 50000),
(29, 8, 4, 2, 60, 120);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNo` int(255) NOT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `OrderTotal` int(255) DEFAULT NULL,
  `OrderStatus` varchar(255) DEFAULT NULL,
  `CitizenEmail` varchar(255) DEFAULT NULL,
  `DeliveryPhone` varchar(11) DEFAULT NULL,
  `OrderCity` int(255) DEFAULT NULL,
  `OrderAddress` varchar(255) DEFAULT NULL,
  `Lat` float(40,13) NOT NULL,
  `Lng` float(40,13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNo`, `OrderDate`, `OrderTotal`, `OrderStatus`, `CitizenEmail`, `DeliveryPhone`, `OrderCity`, `OrderAddress`, `Lat`, `Lng`) VALUES
(11, '2019-09-11 11:15:01', 4000, 'Shipping', 'sondoskhaled22@gmail.com', '01055566789', 1, 'address', 30.0774993896484, 31.0167007446289),
(12, '2019-09-11 14:16:10', 2120, 'Pending', 'sondoskhaled22@gmail.com', '01144488536', 2, 'asddress', 30.0774993896484, 31.0167007446289),
(13, '2019-09-14 19:55:34', 5000, 'Done', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0774993896484, 31.0167007446289),
(17, '2019-09-20 10:34:13', 1000, 'Shipping', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0774993896484, 31.0167007446289),
(18, '2019-09-20 10:37:40', 10020, 'Shipping', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0774993896484, 31.0167007446289),
(20, '2019-09-20 10:45:03', 0, 'Pending', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0774993896484, 31.0167007446289),
(21, '2019-09-20 10:46:19', 800, 'Shipping', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0774993896484, 31.0167007446289),
(26, '2019-10-01 20:27:38', 1000, 'Pending', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 30.0443992614746, 31.2357006072998),
(28, '2019-10-05 18:04:02', 180, 'Pending', 'sondoskhaled22@gmail.com', '01144488536', 2, 'My address', 29.9655170440674, 31.3237495422363),
(29, '2019-10-05 18:10:07', 50000, 'Pending', 'sondoskhaled22@gmail.com', '01055566789', 1, 'My address', 29.9655170440674, 31.3237495422363);

-- --------------------------------------------------------

--
-- Table structure for table `ordertemp`
--

CREATE TABLE `ordertemp` (
  `OrderTempNo` int(11) NOT NULL,
  `ProductNo` int(11) DEFAULT NULL,
  `ColorNo` int(11) DEFAULT NULL,
  `Quntity` varchar(255) DEFAULT NULL,
  `CitizenEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderview`
-- (See below for the actual view)
--
CREATE TABLE `orderview` (
`OrderNo` int(255)
,`OrderDate` datetime
,`OrderTotal` int(255)
,`OrderStatus` varchar(255)
,`CitizenEmail` varchar(255)
,`DeliveryPhone` varchar(11)
,`OrderAddress` varchar(255)
,`Lat` float(40,13)
,`Lng` float(40,13)
,`CityName` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `producthascolor`
--

CREATE TABLE `producthascolor` (
  `ProductNo` int(11) DEFAULT NULL,
  `ColorNo` int(11) DEFAULT NULL,
  `Quntity` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producthascolor`
--

INSERT INTO `producthascolor` (`ProductNo`, `ColorNo`, `Quntity`) VALUES
(3, 2, 80),
(3, 1, 31),
(4, 3, 7),
(4, 4, 4),
(7, 3, 18),
(7, 1, 66),
(8, 3, 1),
(8, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductNo` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductQuntity` int(255) DEFAULT NULL,
  `ProductDetails` varchar(1000) DEFAULT NULL,
  `ProductPrice` int(10) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `CategoryNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductNo`, `ProductName`, `ProductQuntity`, `ProductDetails`, `ProductPrice`, `CompanyID`, `CategoryNo`) VALUES
(3, 'Bottle', 100, 'Bottle Bottle  Bottle  Bottle  Bottle', 1000, 17, 1),
(4, 'NotBook', 25, 'NotBook NotBook NotBook NotBook NotBook ', 20, 17, 5),
(7, 'Mobile', 90, 'Mobile Mobile Mobile\r\nMobile Mobile ', 5000, 17, 4),
(8, 'Glass Bottle', 20, 'Glass Bottle Glass Bottle Glass Bottle ', 60, 17, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `productview`
-- (See below for the actual view)
--
CREATE TABLE `productview` (
`ProductNo` int(11)
,`ProductName` varchar(255)
,`ProductQuntity` int(255)
,`ProductDetails` varchar(1000)
,`ProductPrice` int(10)
,`CompanyID` int(11)
,`ColorNo` int(11)
,`CategoryName` varchar(255)
,`CategoryNo` int(11)
,`Quntity` int(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `requestdelivery`
--

CREATE TABLE `requestdelivery` (
  `DPhone` varchar(255) DEFAULT NULL,
  `DName` varchar(255) DEFAULT NULL,
  `DPassword` varchar(255) DEFAULT NULL,
  `DCity` int(255) DEFAULT NULL,
  `DStatus` varchar(255) DEFAULT NULL,
  `DAvaliableDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestdelivery`
--

INSERT INTO `requestdelivery` (`DPhone`, `DName`, `DPassword`, `DCity`, `DStatus`, `DAvaliableDateTime`) VALUES
('01048977859', 'Khaled', 'RD12345', 1, 'Busy', NULL),
('01144785693', 'Mohamed', 'RD12345', 2, 'Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `RequestNo` int(11) NOT NULL,
  `RequestDate` datetime DEFAULT NULL,
  `RequestStatus` varchar(255) DEFAULT NULL,
  `CitizenEmail` varchar(255) DEFAULT NULL,
  `DeliveryPhone` varchar(255) DEFAULT NULL,
  `RequestAddress` varchar(255) DEFAULT NULL,
  `RequestCity` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`RequestNo`, `RequestDate`, `RequestStatus`, `CitizenEmail`, `DeliveryPhone`, `RequestAddress`, `RequestCity`) VALUES
(1, '2019-09-11 22:08:08', 'Done', 'sondoskhaled22@gmail.com', '01048977859', 'address', 1),
(2, '2019-10-01 20:42:28', 'Pending', 'sondoskhaled22@gmail.com', '01048977859', 'My address', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `requestview`
-- (See below for the actual view)
--
CREATE TABLE `requestview` (
`RequestNo` int(11)
,`RequestDate` datetime
,`RequestStatus` varchar(255)
,`CitizenEmail` varchar(255)
,`DeliveryPhone` varchar(255)
,`RequestAddress` varchar(255)
,`CityName` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `RewardNo` int(11) NOT NULL,
  `CitizenEmail` varchar(255) DEFAULT NULL,
  `Money` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`RewardNo`, `CitizenEmail`, `Money`) VALUES
(1, 'sondoskhaled22@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `TipsNo` int(255) NOT NULL,
  `TipsTitle` varchar(255) DEFAULT NULL,
  `TipsDetails` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`TipsNo`, `TipsTitle`, `TipsDetails`) VALUES
(1, 'Plastic', '\r\nOur Company is skilled at improving manufacturing and distribution companies plastic recycling programs. We also offer a leading level of market stability when it comes recycling your plastic streams. While some plastic materials are more difficult to recycle than others, we can help you find landfill alternative solutions for any plastic resins, as well as films, foams, and dirty plastics.\r\n\r\nWe offer combination trailers and a variety of comingled collection options, based on each client facilitys needs and capabilities. However, we will also help identify which materials would be more valuable when collected separately, and may recommend specialized equipment, such as balers or foam densifies.\r\n\r\n'),
(2, 'Paper', 'Having once begun as a paper recycling mill, Our Company has a strong background in paper recycling, and knows the best methods for making your paper waste streams as valuable as possible. We offer recycling solutions for all paper grades, including mixed paper and options for both un-lined and poly-lined kraft ingredient bags. We also provide competitive pricing and mill direct options for high quality materials.\r\n\r\nIn many cases, clients can improve the value of their paper grades through baling. Our team can work with you to choose the best baler for your facility and material volumes, and can also provide financing options and training.'),
(3, 'Cardboard', '\r\nOur Company offers competitive pricing and expert advice when it comes to recycling any cardboard paper streams. Our recycling experts work with each client facility to identify the best sorting and collection options for the clients unique needs and opportunities.'),
(4, 'Wood', 'Our Company offers a variety of reclamation options for wood waste, including reuse, recycling, and other landfill alternative '),
(5, 'Metal', '\r\nOur Company offers recycling options for all metal grades, including aluminum, copper, nickel, silver, steel, and tin. We not only provide ongoing scrap recycling services, but also manage projects like the following:\r\n\r\nMetal Cleanout for Obsolete Equipment/Products\r\nMachine Shop Recycling\r\nRacking Dismantling & Removal'),
(6, 'Other', '\r\nOur Company constantly strives to find innovative solutions for non-traditional and difficult to recycle materials. This includes organic and food waste');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TypeNo` int(11) NOT NULL,
  `TypeName` varchar(255) DEFAULT NULL,
  `Point` int(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quntitiy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TypeNo`, `TypeName`, `Point`, `Price`, `Quntitiy`) VALUES
(1, 'Plastic', 20, '50.00', '124'),
(2, 'Paper', 10, '20.00', '314'),
(3, 'Metal', 100, '150.00', '580'),
(4, 'Wood', 80, '110.00', '90');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewcart`
-- (See below for the actual view)
--
CREATE TABLE `viewcart` (
`ProductNo` int(11)
,`ProductName` varchar(255)
,`ProductPrice` int(10)
,`Quntity` varchar(255)
,`SubTotal` double
,`CitizenEmail` varchar(255)
,`CategoryName` varchar(255)
,`ColorNo` int(11)
,`OrderTempNo` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `citizenview`
--
DROP TABLE IF EXISTS `citizenview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `citizenview`  AS  select `citizens`.`CitizenName` AS `CitizenName`,`citizens`.`CitizenEmail` AS `CitizenEmail`,`citizens`.`CitizenPhone` AS `CitizenPhone`,`citizens`.`CitizenAddress` AS `CitizenAddress`,`citizens`.`CitizenPassword` AS `CitizenPassword`,`citizens`.`CitizenSecurityQuestion` AS `CitizenSecurityQuestion`,`citizens`.`CitizenSecutityAnswer` AS `CitizenSecutityAnswer`,`cities`.`CityName` AS `CityName`,`governments`.`GovernmentName` AS `GovernmentName` from ((`citizens` left join `cities` on(`citizens`.`CityNo` = `cities`.`CityNo` and `citizens`.`GovernmentNo` = `cities`.`GovernmentNo`)) join `governments` on(`cities`.`GovernmentNo` = `governments`.`GovernmentNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `companyview`
--
DROP TABLE IF EXISTS `companyview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `companyview`  AS  select `company`.`CompanyName` AS `CompanyName`,`company`.`CompanyLicense` AS `CompanyLicense`,`company`.`CompanyEmail` AS `CompanyEmail`,`company`.`CompanyPhone` AS `CompanyPhone`,`company`.`CompanyAddress` AS `CompanyAddress`,`company`.`CompanyPassword` AS `CompanyPassword`,`company`.`AboutCompany` AS `AboutCompany`,`cities`.`CityName` AS `CityName`,`governments`.`GovernmentName` AS `GovernmentName` from ((`company` left join `cities` on(`company`.`CityNo` = `cities`.`CityNo` and `company`.`GovernmentNo` = `cities`.`GovernmentNo`)) join `governments` on(`cities`.`GovernmentNo` = `governments`.`GovernmentNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `comptypyview`
--
DROP TABLE IF EXISTS `comptypyview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comptypyview`  AS  select `type`.`TypeName` AS `TypeName`,`ordercompany`.`OrderDate` AS `OrderDate`,`ordercompany`.`OrderStatus` AS `OrderStatus` from (`ordercompany` join `type` on(`ordercompany`.`TypeNo` = `type`.`TypeNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `favview`
--
DROP TABLE IF EXISTS `favview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `favview`  AS  select `fav`.`FavNo` AS `FavNo`,`fav`.`CitizenEmail` AS `CitizenEmail`,`products`.`ProductName` AS `ProductName`,`fav`.`ColorNo` AS `ColorNo`,`products`.`ProductPrice` AS `ProductPrice`,`products`.`ProductDetails` AS `ProductDetails`,`products`.`CategoryNo` AS `CategoryNo`,`fav`.`ProductNo` AS `ProductNo`,`category`.`CategoryName` AS `CategoryName` from ((`fav` left join `products` on(`fav`.`ProductNo` = `products`.`ProductNo`)) join `category` on(`products`.`CategoryNo` = `category`.`CategoryNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `orderview`
--
DROP TABLE IF EXISTS `orderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderview`  AS  select `orders`.`OrderNo` AS `OrderNo`,`orders`.`OrderDate` AS `OrderDate`,`orders`.`OrderTotal` AS `OrderTotal`,`orders`.`OrderStatus` AS `OrderStatus`,`orders`.`CitizenEmail` AS `CitizenEmail`,`orders`.`DeliveryPhone` AS `DeliveryPhone`,`orders`.`OrderAddress` AS `OrderAddress`,`orders`.`Lat` AS `Lat`,`orders`.`Lng` AS `Lng`,`cities`.`CityName` AS `CityName` from (`orders` left join `cities` on(`orders`.`OrderCity` = `cities`.`CityNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `productview`
--
DROP TABLE IF EXISTS `productview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productview`  AS  select `products`.`ProductNo` AS `ProductNo`,`products`.`ProductName` AS `ProductName`,`products`.`ProductQuntity` AS `ProductQuntity`,`products`.`ProductDetails` AS `ProductDetails`,`products`.`ProductPrice` AS `ProductPrice`,`products`.`CompanyID` AS `CompanyID`,`producthascolor`.`ColorNo` AS `ColorNo`,`category`.`CategoryName` AS `CategoryName`,`category`.`CategoryNo` AS `CategoryNo`,`producthascolor`.`Quntity` AS `Quntity` from ((`products` join `producthascolor` on(`producthascolor`.`ProductNo` = `products`.`ProductNo`)) join `category` on(`products`.`CategoryNo` = `category`.`CategoryNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `requestview`
--
DROP TABLE IF EXISTS `requestview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requestview`  AS  select `requests`.`RequestNo` AS `RequestNo`,`requests`.`RequestDate` AS `RequestDate`,`requests`.`RequestStatus` AS `RequestStatus`,`requests`.`CitizenEmail` AS `CitizenEmail`,`requests`.`DeliveryPhone` AS `DeliveryPhone`,`requests`.`RequestAddress` AS `RequestAddress`,`cities`.`CityName` AS `CityName` from (`requests` left join `cities` on(`requests`.`RequestCity` = `cities`.`CityNo`)) ;

-- --------------------------------------------------------

--
-- Structure for view `viewcart`
--
DROP TABLE IF EXISTS `viewcart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewcart`  AS  select `products`.`ProductNo` AS `ProductNo`,`products`.`ProductName` AS `ProductName`,`products`.`ProductPrice` AS `ProductPrice`,`ordertemp`.`Quntity` AS `Quntity`,`products`.`ProductPrice` * `ordertemp`.`Quntity` AS `SubTotal`,`ordertemp`.`CitizenEmail` AS `CitizenEmail`,`category`.`CategoryName` AS `CategoryName`,`ordertemp`.`ColorNo` AS `ColorNo`,`ordertemp`.`OrderTempNo` AS `OrderTempNo` from ((`ordertemp` join `products` on(`ordertemp`.`ProductNo` = `products`.`ProductNo`)) join `category` on(`products`.`CategoryNo` = `category`.`CategoryNo`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`AdsNo`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryNo`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`CityNo`),
  ADD KEY `Government_FK` (`GovernmentNo`),
  ADD KEY `CityNo` (`CityNo`,`GovernmentNo`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`CitizenID`),
  ADD UNIQUE KEY `Email` (`CitizenEmail`),
  ADD UNIQUE KEY `Phone` (`CitizenPhone`),
  ADD KEY `Citizen_City_Government_FK` (`CityNo`,`GovernmentNo`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`ColorNo`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyID`),
  ADD UNIQUE KEY `License` (`CompanyLicense`),
  ADD UNIQUE KEY `Email` (`CompanyEmail`),
  ADD UNIQUE KEY `Phone` (`CompanyPhone`),
  ADD KEY `Company_City_Government_FK` (`CityNo`,`GovernmentNo`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `dcurrentposition`
--
ALTER TABLE `dcurrentposition`
  ADD PRIMARY KEY (`DPhone`,`OrderNo`),
  ADD UNIQUE KEY `Delivery_Order_Position_Fk` (`DPhone`,`OrderNo`) USING BTREE;

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryPhone`),
  ADD KEY `Delivery_City_FK` (`DeliveryCity`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`FavNo`),
  ADD KEY `Citizen_Fav_FK` (`CitizenEmail`),
  ADD KEY `Product_Fav_FK` (`ProductNo`),
  ADD KEY `Color_Fav_Fk` (`ColorNo`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`GoodNo`),
  ADD KEY `Good_Requ_FK` (`RequestNo`),
  ADD KEY `Good_Type_FK` (`TypeNo`);

--
-- Indexes for table `governments`
--
ALTER TABLE `governments`
  ADD PRIMARY KEY (`GovernmentNo`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_Id`);

--
-- Indexes for table `ordercompany`
--
ALTER TABLE `ordercompany`
  ADD PRIMARY KEY (`OrderNo`),
  ADD KEY `Order_Type_FK` (`TypeNo`),
  ADD KEY `Order_Company_FK` (`CompanyLicense`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `ProductNo_FK` (`ProductNo`),
  ADD KEY `OrderNo_FK` (`OrderNo`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNo`),
  ADD KEY `Order_Citizen_FK` (`CitizenEmail`),
  ADD KEY `Order_Delivery_FK` (`DeliveryPhone`),
  ADD KEY `Order_city_FK` (`OrderCity`),
  ADD KEY `DeliveryPhone` (`DeliveryPhone`,`OrderNo`);

--
-- Indexes for table `ordertemp`
--
ALTER TABLE `ordertemp`
  ADD PRIMARY KEY (`OrderTempNo`),
  ADD KEY `Temp_Pro_Fk` (`ProductNo`),
  ADD KEY `Temp_Citizen_Fk` (`CitizenEmail`),
  ADD KEY `Temp_Color_FK` (`ColorNo`);

--
-- Indexes for table `producthascolor`
--
ALTER TABLE `producthascolor`
  ADD KEY `Product_Fk` (`ProductNo`),
  ADD KEY `Color_Fk` (`ColorNo`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductNo`),
  ADD KEY `Product_Company_FK` (`CompanyID`),
  ADD KEY `Product_Category_FK` (`CategoryNo`);

--
-- Indexes for table `requestdelivery`
--
ALTER TABLE `requestdelivery`
  ADD UNIQUE KEY `DPhone` (`DPhone`) USING BTREE,
  ADD KEY `RD_City_FK` (`DCity`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`RequestNo`),
  ADD KEY `Citizen_Request_Fk` (`CitizenEmail`),
  ADD KEY `Delivery_Request_FK` (`DeliveryPhone`),
  ADD KEY `City_Request_FK` (`RequestCity`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`RewardNo`) USING BTREE,
  ADD UNIQUE KEY `CitizenEmail` (`CitizenEmail`),
  ADD UNIQUE KEY `Reward_Citizen_FK` (`CitizenEmail`) USING BTREE;

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`TipsNo`) USING BTREE;

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TypeNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `AdsNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `CityNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `CitizenID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `ColorNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CompanyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `FavNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `GoodNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `governments`
--
ALTER TABLE `governments`
  MODIFY `GovernmentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordercompany`
--
ALTER TABLE `ordercompany`
  MODIFY `OrderNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ordertemp`
--
ALTER TABLE `ordertemp`
  MODIFY `OrderTempNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `RequestNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `RewardNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `TipsNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TypeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `Government_FK` FOREIGN KEY (`GovernmentNo`) REFERENCES `governments` (`GovernmentNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `citizens`
--
ALTER TABLE `citizens`
  ADD CONSTRAINT `Citizen_City_Government_FK` FOREIGN KEY (`CityNo`,`GovernmentNo`) REFERENCES `cities` (`CityNo`, `GovernmentNo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `Company_City_Government_FK` FOREIGN KEY (`CityNo`,`GovernmentNo`) REFERENCES `cities` (`CityNo`, `GovernmentNo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `dcurrentposition`
--
ALTER TABLE `dcurrentposition`
  ADD CONSTRAINT `Delivery_Order_Position_Fk` FOREIGN KEY (`DPhone`,`OrderNo`) REFERENCES `orders` (`DeliveryPhone`, `OrderNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `Delivery_City_FK` FOREIGN KEY (`DeliveryCity`) REFERENCES `cities` (`CityNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `Citizen_Fav_FK` FOREIGN KEY (`CitizenEmail`) REFERENCES `citizens` (`CitizenEmail`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Color_Fav_Fk` FOREIGN KEY (`ColorNo`) REFERENCES `colors` (`ColorNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Product_Fav_FK` FOREIGN KEY (`ProductNo`) REFERENCES `products` (`ProductNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `Good_Requ_FK` FOREIGN KEY (`RequestNo`) REFERENCES `requests` (`RequestNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Good_Type_FK` FOREIGN KEY (`TypeNo`) REFERENCES `type` (`TypeNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ordercompany`
--
ALTER TABLE `ordercompany`
  ADD CONSTRAINT `Order_Company_FK` FOREIGN KEY (`CompanyLicense`) REFERENCES `company` (`CompanyLicense`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_Type_FK` FOREIGN KEY (`TypeNo`) REFERENCES `type` (`TypeNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `OrderNo_FK` FOREIGN KEY (`OrderNo`) REFERENCES `orders` (`OrderNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ProductNo_FK` FOREIGN KEY (`ProductNo`) REFERENCES `products` (`ProductNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Order_Citizen_FK` FOREIGN KEY (`CitizenEmail`) REFERENCES `citizens` (`CitizenEmail`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_Delivery_FK` FOREIGN KEY (`DeliveryPhone`) REFERENCES `delivery` (`DeliveryPhone`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_city_FK` FOREIGN KEY (`OrderCity`) REFERENCES `cities` (`CityNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ordertemp`
--
ALTER TABLE `ordertemp`
  ADD CONSTRAINT `Temp_Citizen_Fk` FOREIGN KEY (`CitizenEmail`) REFERENCES `citizens` (`CitizenEmail`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Temp_Color_FK` FOREIGN KEY (`ColorNo`) REFERENCES `colors` (`ColorNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Temp_Pro_Fk` FOREIGN KEY (`ProductNo`) REFERENCES `products` (`ProductNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Product_Category_FK` FOREIGN KEY (`CategoryNo`) REFERENCES `category` (`CategoryNo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Product_Company_FK` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON UPDATE CASCADE;

--
-- Constraints for table `requestdelivery`
--
ALTER TABLE `requestdelivery`
  ADD CONSTRAINT `RD_City_FK` FOREIGN KEY (`DCity`) REFERENCES `cities` (`CityNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `Citizen_Request_Fk` FOREIGN KEY (`CitizenEmail`) REFERENCES `citizens` (`CitizenEmail`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `City_Request_FK` FOREIGN KEY (`RequestCity`) REFERENCES `cities` (`CityNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Delivery_Request_FK` FOREIGN KEY (`DeliveryPhone`) REFERENCES `requestdelivery` (`DPhone`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `Reward_Citizen_FK` FOREIGN KEY (`CitizenEmail`) REFERENCES `citizens` (`CitizenEmail`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
