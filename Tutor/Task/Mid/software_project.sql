-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 03:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Id` int(11) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `DateTime` varchar(20) NOT NULL,
  `Seen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Id`, `Mail`, `Message`, `DateTime`, `Seen`) VALUES
(17, 'Saumeek Tanveer', 'hey', '04:26:01pm', '0'),
(19, 'Faruk', 'Hlw!Mr.Saumik', '06:17:11pm', '0'),
(20, 'Saumeek Tanveer', 'Ho', '06:26:01pm', '0'),
(21, 'Saumeek Tanveer', 'how are you?', '06:26:11pm', '0'),
(22, 'Faruk', 'fine you?', '06:31:10pm', '0'),
(23, 'Saumik Tanveer', 'hey', '04:57:59pm', '1'),
(24, 'Saumik Tanveer', 'hey', '05:14:03pm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `children_account`
--

CREATE TABLE `children_account` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Fathers_Name` varchar(50) NOT NULL,
  `Mothers_Name` varchar(50) NOT NULL,
  `Birthday` varchar(15) NOT NULL,
  `Birth_Id` int(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `MentorId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children_account`
--

INSERT INTO `children_account` (`Id`, `Name`, `Fathers_Name`, `Mothers_Name`, `Birthday`, `Birth_Id`, `Religion`, `Gender`, `Class`, `Address`, `Email`, `MentorId`) VALUES
(13, 'Shahrukh Khan', 'Saumik Tanveer', 'Porimoni', '2010-07-12', 2147483647, 'Islam', 'Male', 'Play', 'Asadgate,dhaka', 'saumik351@gmail.com', 11),
(14, 'Salman Khan', 'Saumik Tanveer', 'Porimoni', '2011-12-09', 2147483611, 'Islam', 'Male', 'Play', 'Asadgate,Dhaka.', 'saumik351@gmail.com', 11),
(15, 'Amir Khan', 'Saumik Tanveer', 'Porimoni', '2010-03-19', 2147483547, 'Islam', 'Male', 'Play', 'Asadgate,Dhaka', 'saumik351@gmail.com', 11),
(16, 'Mredul Khan', 'Mredul Xorfiaz', 'Mredula', '2010-04-21', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14),
(17, 'Mredul Ahmed', 'Mredul Xorfiaz', 'Mredula', '2010-08-11', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14),
(18, 'Mredul Chowdhury', 'Mredul Xorfiaz', 'Mredula', '2010-06-21', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14);

-- --------------------------------------------------------

--
-- Table structure for table `class_1`
--

CREATE TABLE `class_1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `BirthDay` varchar(10) NOT NULL,
  `BirthId` int(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `MentorEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_2`
--

CREATE TABLE `class_2` (
  `Id` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `BirthDay` int(11) NOT NULL,
  `BirthId` int(11) NOT NULL,
  `Religion` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Address` int(11) NOT NULL,
  `MentorEmail` int(11) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docofcclass1`
--

CREATE TABLE `docofcclass1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docofcclass2`
--

CREATE TABLE `docofcclass2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docofnursery1`
--

CREATE TABLE `docofnursery1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docofnursery2`
--

CREATE TABLE `docofnursery2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docofplay`
--

CREATE TABLE `docofplay` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(300) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Email`, `Password`, `Type`) VALUES
(51, 'shehneezatasneem@gmail.com', 'sithi101@', 'Tutor'),
(52, 'farukovi29@gmail.com', '7777', 'Admin'),
(54, 'saumik351@gmail.com', 'saumik351', 'Mentor'),
(55, 'farukovi54@gmail.com', 'ovi54@', 'Tutor'),
(57, 'toufiqa45@gmail.com', '9898', 'Tutor'),
(58, 'prioty.13@gmail.com', '9898', 'Tutor'),
(59, 'r.jahan232@gmail.com', '6767', 'Tutor'),
(60, 'shahrukhahmed312@gmail.com', '9999', 'Mentor'),
(61, 'hasibr87@gmail.com', '5555', 'Mentor'),
(62, 'mredul.orfiaz@gmail.com', '6767', 'Mentor'),
(63, 'hasib.hasan@aiub.edu', '9912', 'Mentor');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_info`
--

CREATE TABLE `mentor_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Nid_No` int(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `rlgn` varchar(10) NOT NULL,
  `gndr` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_info`
--

INSERT INTO `mentor_info` (`Id`, `Name`, `Email`, `Nid_No`, `Address`, `rlgn`, `gndr`, `type`, `phone`, `password`) VALUES
(11, 'Saumik Tanveer', 'saumik351@gmail.com', 1451903329, 'Asadgate,Dhaka', 'Islam', 'Male', 'Mentor', 1781119320, 'saumik351'),
(12, 'Shahrukh Ahmed', 'shahrukhahmed312@gmail.com', 2147483647, 'Nikunja,Dhaka', 'Islam', 'Male', 'Mentor', 1780524019, '9999'),
(13, 'Hasib Rahman', 'hasibr87@gmail.com', 2147483647, 'Kafrul,Dhaka', 'Islam', 'Male', 'Mentor', 1756059000, '5555'),
(14, 'Mredul Orfiaz', 'mredul.orfiaz@gmail.com', 2147483647, 'Kallanpur,Dhaka', 'Islam', 'Male', 'Mentor', 1521235804, '6767'),
(15, 'Hasib Hasan', 'hasib.hasan@aiub.edu', 2147483647, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 1987447683, '9912');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Id` int(11) NOT NULL,
  `Problem` text NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_1`
--

CREATE TABLE `nursery_1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `BirthDay` varchar(10) NOT NULL,
  `BirthId` int(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MentorEmail` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursery_1`
--

INSERT INTO `nursery_1` (`Id`, `Name`, `BirthDay`, `BirthId`, `Religion`, `Gender`, `Address`, `MentorEmail`, `Password`) VALUES
(1, 'Salman khan', '2011-12-09', 2147483611, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com', '8006');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_2`
--

CREATE TABLE `nursery_2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `BirthDay` varchar(10) NOT NULL,
  `BirthId` int(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MentorEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursery_2`
--

INSERT INTO `nursery_2` (`Id`, `Name`, `BirthDay`, `BirthId`, `Religion`, `Gender`, `Address`, `MentorEmail`, `Password`) VALUES
(1, 'Amir Khan', '2010-03-19', 2147483547, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com', '6291');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Source` varchar(300) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`Id`, `Name`, `Source`, `Type`) VALUES
(2, 'Mentor', 'upload/saumik.jpg', 'Saumik Tanveer'),
(3, 'sithi.jpg', 'upload/sithi.jpg', 'shehneeza tasneem');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Birthday` varchar(10) NOT NULL,
  `Birthid` int(15) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MentorEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`Id`, `Name`, `Birthday`, `Birthid`, `Religion`, `Gender`, `Address`, `MentorEmail`, `Password`) VALUES
(12, 'Shahrukh Khan', '2010-07-12', 2147483647, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com', '7863'),
(13, 'Salman Khan', '2011-12-09', 2147483611, 'Islam', 'Male', 'Asadgate,Dhaka.', 'saumik351@gmail.com', '9995'),
(14, 'Amir Khan', '2010-03-19', 2147483547, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com', '9180');

-- --------------------------------------------------------

--
-- Table structure for table `play-group`
--

CREATE TABLE `play-group` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `Id` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `N_id` int(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `rlgn` varchar(30) NOT NULL,
  `gndr` varchar(300) NOT NULL,
  `type` varchar(30) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`Id`, `Name`, `Email`, `N_id`, `Address`, `rlgn`, `gndr`, `type`, `pic`, `Phone`, `pass`) VALUES
(1, 'faruk Omar', '', 0, '', '', '', '', '', '', ''),
(2, 'faruk Omar', 'farukovi29@gmail.com', 0, '', '', '', '', '', '', ''),
(3, 'faruk Omar', 'farukovi29@gmail.com', 2147483647, '', '', '', '', '', '', ''),
(4, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', '', '', '', '', '', ''),
(5, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', '', '', '', '', ''),
(6, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', '', '', ''),
(7, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 'dhdjfdhjkkfew', '', ''),
(8, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 'dhdjfdhjkkfew', '1711300761', ''),
(9, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 'dhdjfdhjkkfew', '1711300761', 'p'),
(10, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 'dhdjfdhjkkfew', '1711300761', 'p'),
(11, 'faruk Omar', 'farukovi29@gmail.com', 1451903329, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 'dhdjfdhjkkfew', '1711300761', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Class_num_1` varchar(10) NOT NULL,
  `Class_num_2` varchar(10) NOT NULL,
  `Class_num_3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`Id`, `Email`, `Class_num_1`, `Class_num_2`, `Class_num_3`) VALUES
(1, 'farukovi54@gmail.com', 'Class-2', 'Class-1', ''),
(2, 'shehneezatasneem@gmail.com', 'Nursery-2', 'Nursery-1', 'Play');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_info`
--

CREATE TABLE `tutor_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nid_No` int(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `rlgn` varchar(10) NOT NULL,
  `gndr` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_info`
--

INSERT INTO `tutor_info` (`Id`, `Name`, `Email`, `Nid_No`, `Address`, `rlgn`, `gndr`, `type`, `phone`, `password`) VALUES
(6, 'shehneeza tasneem', 'shehneezatasneem@gmail.com', 1453235678, 'Malibagh,Dhaka', 'Islam', 'Female', 'Tutor', 1553246576, 'sithi101@'),
(7, 'Faruk Omar', 'farukovi54@gmail.com', 2147483647, 'Mirpur,Dhaka', 'Islam', 'Male', 'Tutor', 1767778767, 'ovi54@'),
(8, 'Toufiq Tanna', 'toufiqa45@gmail.com', 2147483647, 'Gulshan,Dhaka', 'Islam', 'Male', 'Tutor', 1750856748, '9898'),
(10, 'Prioty Trisha', 'prioty.13@gmail.com', 2147483647, 'Uttara,Dhaka', 'Hindu', 'Female', 'Tutor', 1876453219, '9898'),
(11, 'Rukaiya Jahan', 'r.jahan232@gmail.com', 2147483647, 'Boshundhara,Dhaka', 'Islam', 'Female', 'Tutor', 1791345678, '6767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `children_account`
--
ALTER TABLE `children_account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `class_1`
--
ALTER TABLE `class_1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `class_2`
--
ALTER TABLE `class_2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `docofcclass1`
--
ALTER TABLE `docofcclass1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `docofcclass2`
--
ALTER TABLE `docofcclass2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `docofnursery1`
--
ALTER TABLE `docofnursery1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `docofnursery2`
--
ALTER TABLE `docofnursery2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `docofplay`
--
ALTER TABLE `docofplay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mentor_info`
--
ALTER TABLE `mentor_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nursery_1`
--
ALTER TABLE `nursery_1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nursery_2`
--
ALTER TABLE `nursery_2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `play-group`
--
ALTER TABLE `play-group`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutor_info`
--
ALTER TABLE `tutor_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `children_account`
--
ALTER TABLE `children_account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `class_1`
--
ALTER TABLE `class_1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_2`
--
ALTER TABLE `class_2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docofcclass1`
--
ALTER TABLE `docofcclass1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docofcclass2`
--
ALTER TABLE `docofcclass2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docofnursery1`
--
ALTER TABLE `docofnursery1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docofnursery2`
--
ALTER TABLE `docofnursery2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docofplay`
--
ALTER TABLE `docofplay`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `mentor_info`
--
ALTER TABLE `mentor_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_1`
--
ALTER TABLE `nursery_1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nursery_2`
--
ALTER TABLE `nursery_2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `play-group`
--
ALTER TABLE `play-group`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
