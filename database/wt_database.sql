-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 12:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time_loged` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `user_id`, `time_loged`) VALUES
(10, 10, '14:21:58'),
(11, 10, '14:22:42'),
(12, 10, '14:31:00'),
(13, 10, '14:41:13'),
(14, 10, '15:36:19'),
(15, 10, '15:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `logintimedate` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `logouttimedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`logintimedate`, `username`, `activity`, `logouttimedate`) VALUES
('2021-07-21 20:41:26', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 19:59:58', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:04:52', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:06:23', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:08:56', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:10:52', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:10:56', 'Admin User', '', '0000-00-00 00:00:00'),
('2021-07-21 20:11:22', 'Admin User', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `activitylog1`
--

CREATE TABLE `activitylog1` (
  `id` int(50) NOT NULL,
  `logintimedate` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylog1`
--

INSERT INTO `activitylog1` (`id`, `logintimedate`, `username`, `activity`) VALUES
(1, '2021-07-21 20:53:54', 'Admin User', ''),
(2, '2021-07-21 21:35:56', 'Admin User', 'Update'),
(3, '2021-07-21 21:47:35', 'Admin User', ''),
(4, '2021-07-21 21:56:01', 'Admin User', ''),
(5, '2021-07-21 21:58:31', 'Admin User', 'Add Veterinarians'),
(6, '2021-07-21 22:00:38', 'Admin User', ''),
(7, '2021-07-21 22:10:59', 'Admin User', 'Add Veterinarians'),
(8, '2021-07-21 23:56:04', 'Admin User', ''),
(9, '2021-07-22 12:21:35', 'Admin User', ''),
(10, '2021-07-22 16:08:05', 'Admin User', ''),
(11, '2021-07-22 16:08:36', 'Admin User', ''),
(12, '2021-07-22 21:50:37', 'Admin User', ''),
(13, '2021-07-23 00:21:31', 'Admin User', ''),
(14, '2021-07-23 00:49:20', 'Admin User', ''),
(15, '2021-07-23 01:43:58', 'Admin User', ''),
(16, '2021-07-23 02:36:23', 'Admin User', ''),
(17, '2021-07-25 20:54:23', 'Admin User', ''),
(18, '2021-07-30 01:09:41', 'Admin User', ''),
(19, '2021-08-19 18:11:59', 'Admin User', ''),
(20, '2021-09-11 20:22:05', 'Admin User', ''),
(21, '2021-09-19 10:56:14', 'Admin User', ''),
(22, '2021-09-20 10:06:18', 'Admin User', ''),
(23, '2021-09-25 21:51:08', 'Admin User', ''),
(24, '2021-09-25 22:11:20', 'Admin User', ''),
(25, '2021-09-25 22:27:52', 'Admin User', ''),
(26, '2021-10-13 23:10:26', 'Admin User', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `patientIc` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `appSymptom` varchar(100) NOT NULL,
  `appComment` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `patientIc`, `scheduleId`, `appSymptom`, `appComment`, `status`) VALUES
(86, 920517105553, 40, 'Pening Kepala', 'Bila doktor free?', 'done');

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
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ConsultedAnimal` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Injectedvaccine` varchar(50) NOT NULL,
  `Payment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `ConsultedAnimal`, `specialization`, `Status`, `Injectedvaccine`, `Payment`) VALUES
('Juan Santos', 'Cedrick Mancio', 'male', 1, 1, '2021-07-21', '2021-10-20 21:10:27', 'Cat', 'General Veterinary Care', 'Booking Registered.Wait for the update', 'Wait for Vaccine', '0'),
('Juan Santos', 'alona', 'female', 1, 1, '2021-07-17', '2021-08-03 16:41:14', 'Birds', 'In-House Diagnostic Laboratory', 'Booking Registered.Wait for the update', '', '0'),
('Juan Santos', 'Chountal Llamera', 'female', 1, 1, '2021-07-19', '2021-08-03 15:59:37', 'Dog', 'After-Hours Emergency', 'Booking Registered.Wait for the update', '', '0'),
('Juan Santos', 'Shane Tumimbang', 'female', 1, 1, '2021-08-04', '2021-08-04 03:08:48', 'Dog', 'General Veterinary Care', 'Booking Registered.Wait for the update', '', '0'),
('Juan Santos', 'godes Christian', 'male', 1, 1, '2021-08-03', '2021-08-03 16:10:38', 'Dog', 'General Veterinary Care', 'Booking Registered.Wait for the update', '', '0'),
('benny', 'benny dave samuyag', 'male', 1, 1, '2021-10-15', '2021-10-13 18:15:47', 'Dog', 'General Veterinary Care', 'Booking Registered.Wait for the update', '', '0'),
('benny', 'benny dave samuyag', 'male', 1, 3, '2021-10-18', '2021-10-13 18:26:54', 'Dog', 'General Veterinary Care', 'ongoing process', '', '0'),
('Juan Santos', 'benny dave samuyag', 'male', 1, 1, '2021-10-25', '2021-10-22 17:30:26', 'Dog', 'General Veterinary Care', 'Booking Registered.Wait for the update', 'Wait for Vaccine', '$1800');

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
(1, 'Veti Clinic', '496 F. Legazpi Street, Maybunga, Pasig City', 'Maybunga', 'Pasig', 639061888247, '0'),
(2, 'Veti Clinic', '446 MRR Street, Manggahan, Pasig City', ' Manggahan', 'Pasig', 639616190393, '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(150) NOT NULL,
  `total_amount` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `description`, `level`, `total_amount`, `date_created`) VALUES
(1, 'Course 2', 'Sample', '1', 4500, '2020-10-31 11:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`) VALUES
('1', 'Appointment Registered'),
('2', 'Appointment Confirmed'),
('3', 'Appointment in Verification'),
('4', 'Appointment Approved'),
('5', 'Appointment Cancelled by Client'),
('6', 'Appointment Refused');

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
  `ConsultedAnimal` varchar(50) NOT NULL,
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

INSERT INTO `doctor` (`did`, `name`, `gender`, `dob`, `experience`, `ConsultedAnimal`, `specialization`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'Margi Carpio', 'female', '1980-01-01', 10, 'Rabbit', 'In-House Diagnostic Laboratory', 639391297964, '76 F. Mariano Street, Kapasigan, Pasig City', 'Margi Carpio', 'Margi Carpio', 'NCR'),
(2, 'Nielsen Donato', 'male', '1987-03-19', 13, 'Cat', 'General Veterinary Care', 639289113159, 'Unit 233, Union Square Condominium, 15th Avenue, Cubao, Quezon City, 1109 Metro Manila', 'Neilsen Donato', 'Neilsen Donato', 'NCR'),
(3, 'George Beran', 'male', '1982-09-12', 17, 'Dog', 'After-Hours Emergency', 639506792098, '683 Manga Ave. cor. Mindanao St., Sampaloc, Manila', 'George Beran', 'George Beran', 'NCR'),
(4, 'Glen Noble', 'male', '1992-01-27', 6, 'Birds', 'In-House Diagnostic Imaging', 639467297641, '1938 Jose Abad Santos Ave., Manila', 'Glen Noble', 'Glen Noble', 'NCR');

-- --------------------------------------------------------

--
-- Table structure for table `doctor1`
--

CREATE TABLE `doctor1` (
  `icDoctor` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctorId` int(3) NOT NULL,
  `doctorFirstName` varchar(50) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor1`
--

INSERT INTO `doctor1` (`icDoctor`, `password`, `doctorId`, `doctorFirstName`, `doctorLastName`, `doctorAddress`, `doctorPhone`, `doctorEmail`, `doctorDOB`) VALUES
(123456789, '123', 123, 'Admin', 'User', 'Maybunga Pasig City', '09550295097', 'bennydave@gmail.com', '2000-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleDay` varchar(15) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `endTime`, `bookAvail`) VALUES
(40, '2015-12-13', 'Sunday', '09:00:00', '10:00:00', 'notavail'),
(41, '2015-12-13', 'Sunday', '10:00:00', '11:00:00', 'available'),
(42, '2015-12-13', 'Sunday', '11:00:00', '12:00:00', 'available'),
(43, '2015-12-14', 'Monday', '11:00:00', '12:00:00', 'available'),
(44, '2015-12-13', 'Sunday', '01:00:00', '02:00:00', 'available'),
(46, '2021-07-15', 'Tuesday', '12:30:00', '06:30:00', 'available'),
(47, '2021-07-15', 'Tuesday', '12:30:00', '06:30:00', 'available'),
(48, '2021-07-06', 'Thursday', '12:30:00', '06:30:00', 'available'),
(49, '2021-07-06', 'Tuesday', '18:30:00', '12:30:00', 'available');

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
(0, 0, 'Monday', '00:00:00', '00:00:00'),
(0, 0, 'Monday', '16:49:00', '16:49:00'),
(0, 0, 'Saturday', '00:00:00', '00:00:00'),
(1, 1, 'Friday', '11:00:00', '20:00:00'),
(1, 1, 'Monday', '11:00:00', '20:00:00'),
(1, 1, 'Monday', '23:50:00', '16:50:00'),
(1, 1, 'Saturday', '11:00:00', '20:00:00'),
(1, 1, 'Saturday', '12:30:00', '18:00:00'),
(1, 1, 'Thursday', '11:00:00', '20:00:00'),
(1, 1, 'Tuesday', '11:00:00', '20:00:00'),
(1, 1, 'Wednesday', '11:00:00', '20:00:00'),
(1, 2, 'Friday', '09:00:00', '16:00:00'),
(1, 2, 'Monday', '09:00:00', '16:00:00'),
(1, 2, 'Saturday', '09:00:00', '16:00:00'),
(1, 2, 'Saturday', '12:00:00', '15:00:00'),
(1, 2, 'Thursday', '09:00:00', '16:00:00'),
(1, 2, 'Tuesday', '09:00:00', '16:00:00'),
(1, 2, 'Wednesday', '09:00:00', '16:00:00'),
(1, 3, 'Friday', '21:00:00', '06:00:00'),
(1, 3, 'Monday', '21:00:00', '06:00:00'),
(1, 3, 'Saturday', '21:00:00', '06:00:00'),
(1, 3, 'Thursday', '21:00:00', '06:00:00'),
(1, 3, 'Tuesday', '21:00:00', '06:00:00'),
(1, 3, 'Wednesday', '21:00:00', '06:00:00'),
(1, 4, 'Friday', '07:00:00', '17:00:00'),
(1, 4, 'Monday', '07:00:00', '12:00:00'),
(1, 4, 'Monday', '07:00:00', '17:00:00'),
(1, 4, 'Saturday', '07:00:00', '17:00:00'),
(1, 4, 'Thursday', '07:00:00', '17:00:00'),
(1, 4, 'Tuesday', '07:00:00', '17:00:00'),
(1, 4, 'Wednesday', '07:00:00', '17:00:00'),
(1, 5, 'Monday', '07:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `course_id`, `description`, `amount`) VALUES
(1, 1, 'Payment', 3000),
(3, 1, 'sample', 1500);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hematologists`
-- (See below for the actual view)
--
CREATE TABLE `hematologists` (
);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`id`, `code`, `name`, `date_created`) VALUES
(3, '871616979009', 'John Smith', '2021-06-28 16:06:46'),
(4, '125845984159', 'Claire Blake', '2021-06-28 16:07:12'),
(7, '815715162415', 'Kevin Buenaseda', '2021-08-01 19:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `individual_meta`
--

CREATE TABLE `individual_meta` (
  `individual_id` int(30) NOT NULL,
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individual_meta`
--

INSERT INTO `individual_meta` (`individual_id`, `meta_field`, `meta_value`, `date_created`) VALUES
(3, 'name', 'John Smith', '2021-06-28 16:06:46'),
(3, 'contact', '09123456789', '2021-06-28 16:06:46'),
(3, 'gender', 'Male', '2021-06-28 16:06:46'),
(3, 'dob', '1995-06-23', '2021-06-28 16:06:46'),
(3, 'address', 'Sample Address', '2021-06-28 16:06:46'),
(4, 'name', 'Claire Blake', '2021-06-28 16:07:12'),
(4, 'contact', 'Sample Address', '2021-06-28 16:07:12'),
(4, 'gender', 'Female', '2021-06-28 16:07:12'),
(4, 'dob', '1995-10-14', '2021-06-28 16:07:12'),
(4, 'address', 'Sample Address', '2021-06-28 16:07:12'),
(7, 'name', 'Kevin Buenaseda', '2021-08-01 19:50:40'),
(7, 'contact', '09550295097', '2021-08-01 19:50:40'),
(7, 'gender', 'Male', '2021-08-01 19:50:40'),
(7, 'dob', '2021-08-01', '2021-08-01 19:50:40'),
(7, 'address', '496 f antipolo city', '2021-08-01 19:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(30) NOT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `max_a_day` int(5) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `description`, `max_a_day`, `date_created`, `date_updated`) VALUES
(1, 'Vaccination Location 1, Sample City, Negros Occidental', '&lt;p&gt;&lt;span style=&quot;text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ac justo consequat dignissim. Nam eget pretium nisl, at tempor velit. Sed vel nisl a metus porta placerat in in neque. Praesent aliquam nisi nisl, eget porta lacus iaculis ac. Fusce dignissim et nibh vel euismod. Vestibulum eget enim metus. Ut faucibus, lectus facilisis eleifend dignissim, ligula lorem porttitor elit, eu placerat odio urna quis augue. Proin rutrum, enim in auctor rhoncus, turpis ipsum rutrum sem, nec varius purus nisi at dolor. Donec porta turpis vel erat iaculis, eget consequat mauris dapibus. Nullam euismod quam sagittis nisl maximus auctor. Duis turpis nisi, condimentum eget interdum ut, ultricies non turpis. Donec auctor a mi at commodo. Vivamus ultrices venenatis orci, vel venenatis sem pharetra ac. Ut scelerisque lorem sed purus facilisis lacinia.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 500, '2021-06-28 09:52:13', '2021-06-28 09:52:39'),
(4, 'Sample location  2', '&lt;p&gt;Sample only&lt;/p&gt;', 100, '2021-06-28 16:19:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logout`
--

CREATE TABLE `logout` (
  `id` int(11) NOT NULL,
  `logoutdatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logout`
--

INSERT INTO `logout` (`id`, `logoutdatetime`) VALUES
(1, '2021-07-21 20:54:33'),
(2, '2021-07-21 21:36:39'),
(3, '2021-07-21 21:48:17'),
(4, '2021-07-21 21:57:39'),
(5, '2021-07-21 21:59:21'),
(6, '2021-07-21 22:01:41'),
(7, '2021-07-21 22:15:17'),
(8, '2021-07-21 23:58:47'),
(9, '2021-07-22 12:23:25'),
(10, '2021-07-22 16:21:07'),
(11, '2021-07-22 16:21:11'),
(12, '2021-07-23 00:23:51');

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
(1, 'Shane', 'female', '1999-10-14', 639637253621, '86 East Santos St. Brgy. Sto.Tomas Pasig City', 'Shane', 'Shane', 'NCR');

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
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES
('Juan Santos', 'male', '1990-04-21', 9638900923, 'juansantos@gmail.com', 'Juan Santos', 'Juan Santos'),
('Benny', 'male', '2000-10-12', 9061888247, 'bennydavesamuyag32@gmail.com', 'benny', 'benny');

-- --------------------------------------------------------

--
-- Table structure for table `patient1`
--

CREATE TABLE `patient1` (
  `icPatient` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient1`
--

INSERT INTO `patient1` (`icPatient`, `password`, `patientFirstName`, `patientLastName`, `patientMaritialStatus`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`) VALUES
(147258, '147258', 'Cedrick', 'Mancio', '', '1998-07-14', 'male', '', '', 'cedrickmancio@gmail.com'),
(920517105553, '123', 'Mohd', 'Mazlan', 'single', '1992-05-17', 'male', 'NO 153 BLOK MURNI\r\nKOLEJ CANSELOR UNIVERSITI PUTRA MALAYSIA', '173567758', 'lan.psis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `ef_id` int(30) NOT NULL,
  `amount` float NOT NULL,
  `remarks` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `ef_id`, `amount`, `remarks`, `date_created`) VALUES
(1, 1, 1000, 'sample', '2020-10-31 14:25:35'),
(2, 1, 500, 'sample 2', '2020-10-31 14:47:15'),
(3, 1, 2000, 'payment', '2021-08-06 11:34:15'),
(4, 2, 500, 'Payment', '2021-08-06 17:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(30) NOT NULL,
  `individual_id` int(30) NOT NULL,
  `location_id` int(30) NOT NULL,
  `date_sched` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `individual_id`, `location_id`, `date_sched`, `status`, `date_created`) VALUES
(3, 3, 1, '2021-06-28', 1, '2021-06-28 16:06:46'),
(4, 4, 1, '2021-06-28', 1, '2021-06-28 16:07:12'),
(7, 7, 1, '2021-08-02', 0, '2021-08-01 19:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `id_no` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `id_no`, `name`, `contact`, `address`, `email`, `date_created`) VALUES
(1, '06232014', 'Kevin Buenaseda', '+18456-5455-55', 'Sample Address', 'jsmith@sample.com', '2020-10-31 11:24:42'),
(2, '1415', 'Juan Santos', '+18456-5455-55', 'Sample Address', 'gwilson@sample.com', '2020-10-31 11:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `student_ef_list`
--

CREATE TABLE `student_ef_list` (
  `id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `ef_no` varchar(200) NOT NULL,
  `course_id` int(30) NOT NULL,
  `total_fee` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_ef_list`
--

INSERT INTO `student_ef_list` (`id`, `student_id`, `ef_no`, `course_id`, `total_fee`, `date_created`) VALUES
(1, 2, '2020-654278', 1, 4500, '2020-10-31 12:04:18'),
(2, 1, '2020-65427823', 1, 4500, '2020-10-31 13:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Covid Vaccination Scheduler System'),
(6, 'short_name', 'Vaccination Scheduler'),
(11, 'logo', 'uploads/1624844160_vaccine.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1624844160_vaccine_banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'School Fees Payment System', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `time_joined` time NOT NULL,
  `date_joined` date NOT NULL,
  `user_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `url`, `password`, `time_joined`, `date_joined`, `user_status`) VALUES
(10, 'Admin User', 'Bennydave@gmail.com', 'qweqweqweqweqweqwew', '258123', '14:21:38', '2021-07-16', 'offline');

-- --------------------------------------------------------

--
-- Structure for view `hematologists`
--
DROP TABLE IF EXISTS `hematologists`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hematologists`  AS SELECT `specialization`.`id` AS `id`, `specialization`.`specialization-list` AS `specialization-list` FROM `specialization` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `activitylog1`
--
ALTER TABLE `activitylog1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `patientIc` (`patientIc`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Status`,`Fname`,`DOV`,`Timestamp`) USING BTREE;

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`,`name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor1`
--
ALTER TABLE `doctor1`
  ADD PRIMARY KEY (`icDoctor`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `doctor_availability`
--
ALTER TABLE `doctor_availability`
  ADD PRIMARY KEY (`cid`,`did`,`day`,`starttime`,`endtime`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logout`
--
ALTER TABLE `logout`
  ADD PRIMARY KEY (`id`);

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

--
-- Indexes for table `patient1`
--
ALTER TABLE `patient1`
  ADD PRIMARY KEY (`icPatient`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `activitylog1`
--
ALTER TABLE `activitylog1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`patientIc`) REFERENCES `patient1` (`icPatient`),
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`scheduleId`) REFERENCES `doctorschedule` (`scheduleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
