-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 09:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Password`, `Name`) VALUES
(0, '12345@gmail.com', '12345', 'joy');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `ID` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `transction` char(25) NOT NULL,
  `phone` char(15) NOT NULL,
  `Day` varchar(45) NOT NULL,
  `Date` date DEFAULT NULL,
  `problem` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`ID`, `email`, `name`, `docname`, `transction`, `phone`, `Day`, `Date`, `problem`, `status`) VALUES
(2, 'joyislam12345@gmail.com', 'Israt', 'Dr. NADIRA BEGUM', '1000', '01873676688', 'Saturday', NULL, 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', NULL),
(3, 'joyislam12345@gmail.com', 'Israt', 'Dr. NADIRA BEGUM', '1000', '01873676688', 'Saturday', NULL, 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', NULL),
(4, 'atiquechowdhury254@gmail.com', 'NADIRA BEGUM', 'Dr. NADIRA BEGUM', '1000', '01723922260', 'Saturday', NULL, 'ffffffffffffffff', NULL),
(5, 'atiquechowdhury254@gmail.com', 'NADIRA BEGUM', 'Dr. NADIRA BEGUM', '1000', '0202102', 'Saturday', NULL, 'ffffffffffffffff', NULL),
(6, 'joyislam12345@gmail.com', 'NADIRA BEGUM', 'warwasr', '1000', '01723922260', 'Saturday', NULL, 'ffffffffffffffff', NULL),
(7, 'joyislam12345@gmail.com', 'NADIRA BEGUM', 'warwasr', '1000', '01723922260', 'Saturday', NULL, 'ffffffffffffffff', NULL),
(8, '$email', '$user_name', '$docname', '$fee', '$phnnum', '$day', NULL, '$prob', NULL),
(12, 'joyislam12345@gmail.com', 'NADIRA BEGUM', 'Dr. A.T.M Sanaul Bashar', 'sdfsd', '01723922260', 'Tuesday', '2022-01-13', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', 'Done'),
(18, 'atiquechowdhury254@gmail.com', 'RRTFJTFYJGCD', 'Dr. Mohammed', 'sdfsd', '01723922260', 'Monday', '2022-01-12', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', ''),
(19, 'atiquechowdhury254@gmail.com', 'NADIRA BEGUM', 'Dr Bidhan Sarker', 'sdfsd', '0202102', 'Tuesday', '2022-01-19', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', NULL),
(20, 'atiquechowdhury254@gmail.com', 'NADIRA BEGUM', 'Dr Bidhan Sarker', 'sdfsd', '0202102', 'Tuesday', '2022-01-19', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', NULL),
(21, 'atiquechowdhury254@gmail.com', 'NADIRA BEGUM', 'Dr Bidhan Sarker', 'sdfsd', '0202102', 'Tuesday', '2022-01-19', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff das asdasd asd asd a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Bmdc` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Bio` text DEFAULT NULL,
  `Phone` char(13) NOT NULL,
  `Picture` blob DEFAULT NULL,
  `Appointment` text NOT NULL,
  `Appointmentday` varchar(45) NOT NULL,
  `fee` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `password`, `Bmdc`, `Gender`, `Email`, `Dept`, `Address`, `Bio`, `Phone`, `Picture`, `Appointment`, `Appointmentday`, `fee`) VALUES
(2, 'Dr. Mohammed ', '11111', 0, 'Malezx', 'mohammed@gmail.com', 'Surgery', 'H: 78, R: 01, Ward: 04, South Mollertak,', 'sadsadsadsad', '01714734400', NULL, '', '', '1000'),
(3, 'warwasr', '111', 123456, 'Male', '12345@gmail.com', 'Surgery', 'H: 78, R: 01, Ward: 04, South Mollertak,', NULL, '01723922260', NULL, '8.00', '', '1000'),
(4, 'Dr. asad', '11111', 0, 'Male', 'asad@gmail.com', 'Surgery', 'Sathkhamar, Birgonj', NULL, '01873676688', NULL, '8.00pm - 10.00pm', '', '1000'),
(5, 'Dr. A.T.M Sanaul Bashar', '147852', 0, 'Female', 'sanaul@gmail.com', 'Denstistry', 'Uttara, Dhaka', NULL, '01714124751', NULL, '8.00', '', '1000'),
(6, 'Dr Bidhan Sarker', '123654', 0, 'Male', 'bidhan@gmail.com', 'ENT', 'Nilkhet,Dhaka', NULL, '0189878985', NULL, '8.00pm - 10.00pm', '', '1500'),
(7, 'Dr. Maruf Sujan', '123654', 0, 'Male', 'maruf@gmail.com', 'Gastroenterology', 'Sector 9, Dhaka', NULL, '01789355125', NULL, '8.00pm - 10.00pm', 'Saturday - Tuesday', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `ID` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `file` varchar(100) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `email`, `file`, `size`) VALUES
(1, 'joyislam12345@gmail.com', '238392334.jpg', 385493),
(2, 'joyislam12345@gmail.com', '238392334.jpg', 385493);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` smallint(6) NOT NULL,
  `Weight` smallint(6) NOT NULL,
  `Height` decimal(2,1) NOT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Phone` char(13) NOT NULL,
  `Picture` blob DEFAULT NULL,
  `Registration Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Email`, `Name`, `password`, `Gender`, `Age`, `Weight`, `Height`, `Address`, `Phone`, `Picture`, `Registration Date`, `Bio`) VALUES
(1, 'joyislam12345@gmail.com', 'NADIRA BEGUM', '12345', 'Male', 20, 70, '6.0', '', '01723922260', NULL, '2021-12-06 19:03:04', 'asdsadsa'),
(2, 'atiquechowdhury254@gmail.com', 'Sadik Hasan', '123456', 'Female', 25, 80, '6.0', NULL, '0231231', NULL, '2021-12-06 21:55:17', NULL),
(3, 'nihalahmed019@gmail.com', 'NADIRA BEGUM', '11111', 'Female', 20, 80, '5.0', NULL, '01723922260', NULL, '2021-12-07 09:52:02', NULL),
(4, 'evan@gmail.com', 'Evan Ahmed', '12345', 'Male', 35, 85, '6.0', NULL, '01714734400', NULL, '2021-12-07 10:53:22', NULL),
(6, '12345@gmail.com', 'Asad', '11111', 'Female', 20, 80, '5.9', 'da', '01723922260', NULL, '2021-12-28 00:31:26', 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `name`, `new_name`) VALUES
(1, '1-3.pdf', '07012216415830131-3.pdf'),
(2, 'cse assignment.pdf', '0701221641583031cse assignment.pdf'),
(3, '1-3.pdf', '07012216415831231-3.pdf'),
(4, '1-3.pdf', '07012216415834781-3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
