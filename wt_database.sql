-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `DOV` date NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `Status`) VALUES
('user', 'patient', 'male', 1, 1, '2017-11-08', '2017-11-05 16:43:48', 'Booking Registered.Wait for the update'),
('alonamae', 'Alona Mae Espinosa', 'female', 1, 1, '2021-01-13', '2021-01-13 07:58:30', 'Cancelled by Patient'),
('alonamae', 'Alona Mae Espinosa', 'female', 1, 1, '2021-01-14', '2021-01-13 08:22:39', 'Booking Registered.Wait for the update'),
('alonamae', 'Alona Mae Espinosa', 'female', 1, 1, '2021-01-20', '2021-01-13 08:30:06', 'okay kana punta kana dito'),
('alonamae', 'Alona Mae Espinosa', 'female', 1, 1, '2021-01-21', '2021-01-13 00:00:00', 'Cancelled by Patient'),
('alonamae', 'Alona Mae Espinosa', 'male', 1, 1, '0000-00-00', '2021-01-13 00:00:00', 'Cancelled by Patient'),
('alonamae', 'Alona Mae Espinosa', 'male', 1, 1, '2021-01-14', '2021-01-13 00:00:00', 'Cancelled by Patient'),
('user', 'Benny Dave F. Samuyag', 'male', 1, 1, '2021-01-15', '2021-01-15 16:37:30', 'okays'),
('user', 'Benny Dave F. Samuyag', 'male', 1, 1, '2021-01-18', '2021-01-16 04:34:40', 'Booking Registered.Wait for the update'),
('user', 'Benny Dave F. Samuyag', 'male', 1, 1, '2021-01-20', '2021-01-16 04:55:39', 'yehyy'),
('user', 'Benny Dave F. Samuyag', 'male', 1, 1, '2021-01-20', '2021-01-16 04:58:38', 'Booking Registered.Wait for the update');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mid` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`cid`, `name`, `address`, `town`, `city`, `contact`, `mid`) VALUES
(1, 'Veti Clinic', '496 F. Legazpi Street, Maybunga, Pasig City', 'Maybunga', 'Pasig', 9061888247, '0'),
(2, 'Veti Clinic', '446 MRR Street, Manggahan, Pasig City', ' Manggahan', 'Pasig', 9616190393, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `experience` int(11) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `gender`, `dob`, `experience`, `specialization`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'Margi Carpio', 'female', '1980-01-01', 10, 'In-House Diagnostic Laboratory', 9391297964, '76 F. Mariano Street, Kapasigan, Pasig City', 'Margi Carpio', 'Margi Carpio', 'NCR'),
(2, 'Nielsen Donato', 'male', '1987-03-19', 13, 'General Veterinary Care', 289113159, 'Unit 233, Union Square Condominium, 15th Avenue, Cubao, Quezon City, 1109 Metro Manila', 'Neilsen Donato', 'Neilsen Donato', 'NCR'),
(3, 'George Beran', 'male', '1982-09-12', 17, 'After-Hours Emergency', 9506792098, '683 Manga Ave. cor. Mindanao St., Sampaloc, Manila', 'George Beran', 'George Beran', 'NCR'),
(4, 'Glen Noble', 'male', '1992-01-27', 6, 'In-House Diagnostic Imaging', 9467297641, '1938 Jose Abad Santos Ave., Manila', 'Glen Noble', 'Glen Noble', 'NCR');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_availability`
--

CREATE TABLE `doctor_availability` (
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_availability`
--

INSERT INTO `doctor_availability` (`cid`, `did`, `day`, `starttime`, `endtime`) VALUES
(1, 1, 'Monday', '07:00:00', '16:00:00'),
(1, 1, 'Wednesday', '07:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `gender`, `dob`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'bennydave', 'female', '1999-10-14', 9637253621, '86 East Santos St. Brgy. Sto.Tomas Pasig City', 'benny', 'benny', 'NCR');

-- --------------------------------------------------------

--
-- Table structure for table `manager_clinic`
--

CREATE TABLE `manager_clinic` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_clinic`
--

INSERT INTO `manager_clinic` (`cid`, `mid`) VALUES
(0, 0),
(0, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES
('user', 'male', '1985-01-01', 7897897897, 'user@test.com', 'user', 'user'),
('Alona Mae Espinosa', 'female', '2021-01-13', 9616190393, 'alonamaekki@gmail.com', 'alonamae', 'alonamae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Username`,`Fname`,`DOV`,`Timestamp`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`,`name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD PRIMARY KEY (`cid`,`did`,`day`,`starttime`,`endtime`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `manager_clinic`
--
ALTER TABLE `manager_clinic`
  ADD PRIMARY KEY (`cid`,`mid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`,`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
