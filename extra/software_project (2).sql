-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 05:46 PM
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
(23, 'Saumik Tanveer', 'hey', '04:57:59pm', '0'),
(24, 'Saumik Tanveer', 'hey', '05:14:03pm', '0'),
(25, 'Faruk', 'hii', '03:28:00pm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `MentorEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `MentorId` int(5) NOT NULL,
  `Accept` int(2) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children_account`
--

INSERT INTO `children_account` (`Id`, `Name`, `Fathers_Name`, `Mothers_Name`, `Birthday`, `Birth_Id`, `Religion`, `Gender`, `Class`, `Address`, `Email`, `MentorId`, `Accept`, `Password`) VALUES
(13, 'Shahrukh Khan', 'Saumik Tanveer', 'Porimoni', '2010-07-12', 2147483647, 'Islam', 'Male', 'Play', 'Asadgate,dhaka', 'saumik351@gmail.com', 11, 1, '7863'),
(14, 'Salman Khan', 'Saumik Tanveer', 'Porimoni', '2011-12-09', 2147483611, 'Islam', 'Male', 'Play', 'Asadgate,Dhaka.', 'saumik351@gmail.com', 11, 1, '9995'),
(15, 'Amir Khan', 'Saumik Tanveer', 'Porimoni', '2010-03-19', 2147483547, 'Islam', 'Male', 'Play', 'Asadgate,Dhaka', 'saumik351@gmail.com', 11, 1, '9180'),
(25, 'Shakib Al Hasan', 'Mredul Xorfiaz', 'Mrs Xorfiaz', '2010-12-24', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14, 1, '6443'),
(26, 'Shakib Khan', 'Mredul Xorfiaz', 'Mrs Xorfiaz', '2010-02-03', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14, 1, '4878'),
(27, 'Md Ahmed', 'Mredul Xorfiaz', 'Mrs Xorfiaz', '2010-04-23', 2147483647, 'Islam', 'Male', 'Play', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com', 14, 1, '6213'),
(28, 'Shakib bin Shahrukh', 'Shahrukh Khan', 'Rabeya Mim', '2010-06-22', 2147483647, 'Islam', 'Male', 'Play', 'Nikunja,Dhaka', 'shahrukhahmed312@gmail.com', 12, 0, '3305'),
(29, 'Sharif Bin Shahrukh', 'Shahrukh Khan', 'Rabeya Mim', '2010-10-30', 2147483647, 'Islam', 'Male', 'Play', 'Nikunja,Dhaka', 'shahrukhahmed312@gmail.com', 12, 0, '6662'),
(30, 'Mohhubur Rahman', 'Hasibur Rahman', 'Raisa Islam', '2010-02-28', 2147483647, 'Islam', 'Male', 'Play', 'Kafrul,Dhaka', 'hasibr87@gmail.com', 13, 0, '4873'),
(31, 'Mohaiminl Rahman', 'Hasibur Rahman', 'Raisa Islam', '2010-10-14', 2147483647, 'Islam', 'Male', 'Play', 'Kafrul,Dhaka', 'hasibr87@gmail.com', 13, 0, '1573');

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
  `MentorEmail` varchar(30) NOT NULL
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
  `MentorEmail` int(11) NOT NULL
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
  `Source` varchar(300) NOT NULL,
  `Source_1` varchar(300) NOT NULL,
  `Source_2` varchar(300) NOT NULL,
  `DateTime` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docofplay`
--

INSERT INTO `docofplay` (`Id`, `Source`, `Source_1`, `Source_2`, `DateTime`, `Subject`) VALUES
(1, 'video/Play/Digit/0-01.mp4', 'video/Play/Digit/0-02.mp4', 'video/Play/Digit/0-03.mp4', '09:48:41pm', 'Digit'),
(2, 'video/Play/Digit/1-01.mp4', 'video/Play/Digit/1-02.mp4', 'video/Play/Digit/1-01.mp4', '09:55:40pm', 'Digit'),
(3, 'video/Play/Digit/2-01.mp4', 'video/Play/Digit/2-02.mp4', 'video/Play/Digit/2-03.mp4', '09:56:03pm', 'Digit'),
(4, 'video/Play/Digit/3-01.mp4', 'video/Play/Digit/3-02.mp4', 'video/Play/Digit/3-03.mp4', '09:56:45pm', 'Digit'),
(5, 'video/Play/Digit/4-01.mp4', 'video/Play/Digit/4-02.mp4', 'video/Play/Digit/4-02.mp4', '09:57:49pm', 'Digit'),
(6, 'video/Play/Digit/5-01.mp4', 'video/Play/Digit/5-02.mp4', 'video/Play/Digit/5-03.mp4', '09:59:47pm', 'Digit'),
(7, 'video/Play/Digit/6-01.mp4', 'video/Play/Digit/6-02.mp4', 'video/Play/Digit/6-03.mp4', '10:00:11pm', 'Digit'),
(8, 'video/Play/Digit/7-01.mp4', 'video/Play/Digit/7-03.mp4', 'video/Play/Digit/7-02.mp4', '10:00:47pm', 'Digit'),
(9, 'video/Play/Digit/8-01.mp4', 'video/Play/Digit/8-02.mp4', 'video/Play/Digit/8-03.mp4', '10:02:03pm', 'Digit'),
(10, 'video/Play/Digit/9-01.mp4', 'video/Play/Digit/9-02.mp4', 'video/Play/Digit/9-03.mp4', '10:02:39pm', 'Digit'),
(11, 'video/Play/English/A-01.mp4', 'video/Play/English/A-02.mp4', 'video/Play/English/A-03.mp4', '10:08:27pm', 'English'),
(12, 'video/Play/English/B-01.mp4', 'video/Play/English/B-02.mp4', 'video/Play/English/B-03.mp4', '10:08:54pm', 'English'),
(13, 'video/Play/English/C-01.mp4', 'video/Play/English/C-02.mp4', 'video/Play/English/C-03.mp4', '10:09:37pm', 'English'),
(14, 'video/Play/English/D-01.mp4', 'video/Play/English/D-02.mp4', 'video/Play/English/D-03.mp4', '11:10:10pm', 'English'),
(15, 'video/Play/English/E-01.mp4', 'video/Play/English/E-02.mp4', 'video/Play/English/E-03.mp4', '11:10:53pm', 'English'),
(16, 'video/Play/English/G-01.mp4', 'video/Play/English/G-02.mp4', 'video/Play/English/G-03.mp4', '11:11:27pm', 'English'),
(17, 'video/Play/English/H-01.mp4', 'video/Play/English/H-02.mp4', 'video/Play/English/H-03.mp4', '11:14:32pm', 'English'),
(18, 'video/Play/English/I-01.mp4', 'video/Play/English/I-02.mp4', 'video/Play/English/I-03.mp4', '11:17:33pm', 'English'),
(19, 'video/Play/English/J-01.mp4', 'video/Play/English/J-02.mp4', 'video/Play/English/J-03.mp4', '11:18:03pm', ''),
(20, 'video/Play/English/K-01.mp4', 'video/Play/English/K-02.mp4', 'video/Play/English/K-03.mp4', '11:18:29pm', 'English'),
(21, 'video/Play/English/L-01.mp4', 'video/Play/English/L-02.mp4', 'video/Play/English/L-03.mp4', '11:21:07pm', 'English'),
(22, 'video/Play/English/M-01.mp4', 'video/Play/English/M-02.mp4', 'video/Play/English/M-03.mp4', '11:21:52pm', 'English'),
(23, 'video/Play/English/N-01.mp4', 'video/Play/English/N-02.mp4', 'video/Play/English/N-03.mp4', '11:22:22pm', 'English'),
(24, 'video/Play/English/O-1.mp4', 'video/Play/English/O-02.mp4', 'video/Play/English/O-03.mp4', '11:23:39pm', 'English'),
(25, 'video/Play/English/P-01.mp4', 'video/Play/English/P-02.mp4', 'video/Play/English/P-03.mp4', '11:24:06pm', 'English'),
(26, 'video/Play/English/Q-01.mp4', 'video/Play/English/Q-02.mp4', 'video/Play/English/Q-03.mp4', '11:27:00pm', 'English'),
(27, 'video/Play/English/R-01.mp4', 'video/Play/English/R-02.mp4', 'video/Play/English/R-03.mp4', '11:27:26pm', 'English'),
(28, 'video/Play/English/S-01.mp4', 'video/Play/English/S-02.mp4', 'video/Play/English/S-03.mp4', '11:27:51pm', 'English'),
(29, 'video/Play/English/T-01.mp4', 'video/Play/English/T-02.mp4', 'video/Play/English/T-03.mp4', '11:28:18pm', 'English'),
(30, 'video/Play/English/U-01.mp4', 'video/Play/English/U-02.mp4', 'video/Play/English/U-03.mp4', '11:30:05pm', 'English'),
(31, 'video/Play/English/U-01.mp4', 'video/Play/English/U-02.mp4', 'video/Play/English/U-03.mp4', '11:31:43pm', 'English'),
(32, 'video/Play/English/V-01.mp4', 'video/Play/English/V-02.mp4', 'video/Play/English/V-03.mp4', '11:32:08pm', 'English'),
(33, 'video/Play/English/W-01.mp4', 'video/Play/English/W-02.mp4', 'video/Play/English/W-03.mp4', '11:32:37pm', 'English'),
(34, 'video/Play/English/X-01.mp4', 'video/Play/English/X-02.mp4', 'video/Play/English/X-03.mp4', '11:33:27pm', 'English'),
(35, 'video/Play/English/F-01.mp4', 'video/Play/English/F-01.mp4', 'video/Play/English/F-01.mp4', '2019/11/28  04:04:30pm', 'English'),
(36, 'video/Play/English/Y-01.mp4', 'video/Play/English/Y-02.mp4', 'video/Play/English/Y-03.mp4', '11:35:41pm', 'English'),
(37, 'video/Play/English/Z-01.mp4', 'video/Play/English/Z-02.mp4', 'video/Play/English/Z-03.mp4', '11:36:11pm', 'English'),
(38, 'video/Play/Bangla/B-01.mp4', 'video/Play/Bangla/B-01.mp4', 'video/Play/Bangla/B-01.mp4', '2019/11/28  03:55:39pm', 'Bangla'),
(39, 'video/Play/Bangla/B-02.mp4', 'video/Play/Bangla/B-02.mp4', 'video/Play/Bangla/B-02.mp4', '2019/11/28  03:56:23pm', 'Bangla'),
(40, 'video/Play/Bangla/B-03.mp4', 'video/Play/Bangla/B-03.mp4', 'video/Play/Bangla/B-03.mp4', '2019/11/28  03:57:12pm', 'Bangla'),
(41, 'video/Play/Bangla/B-04.mp4', 'video/Play/Bangla/B-04.mp4', 'video/Play/Bangla/B-04.mp4', '2019/11/28  03:58:05pm', 'Bangla'),
(42, 'video/Play/Bangla/B-05.mp4', 'video/Play/Bangla/B-05.mp4', 'video/Play/Bangla/B-05.mp4', '2019/11/28  03:58:46pm', 'Bangla'),
(43, 'video/Play/Bangla/B-06.mp4', 'video/Play/Bangla/B-06.mp4', 'video/Play/Bangla/B-06.mp4', '2019/11/28  04:01:20pm', 'Bangla'),
(44, 'video/Play/Bangla/B-07.mp4', 'video/Play/Bangla/B-07.mp4', 'video/Play/Bangla/B-07.mp4', '2019/11/28  04:02:06pm', 'Bangla'),
(45, 'video/Play/Bangla/B-08.mp4', 'video/Play/Bangla/B-08.mp4', 'video/Play/Bangla/B-08.mp4', '2019/11/28  04:02:35pm', 'Bangla'),
(46, 'video/Play/Bangla/B-09.mp4', 'video/Play/Bangla/B-09.mp4', 'video/Play/Bangla/B-09.mp4', '2019/11/28  04:03:07pm', 'Bangla'),
(47, 'video/Play/Bangla/B-10.mp4', 'video/Play/Bangla/B-10.mp4', 'video/Play/Bangla/B-10.mp4', '2019/11/28  04:03:35pm', 'Bangla'),
(48, 'video/Play/Bangla/B-011.mp4', 'video/Play/Bangla/B-011.mp4', 'video/Play/Bangla/B-011.mp4', '2019/11/28  04:03:58pm', 'Bangla'),
(50, 'video/Play/Math/M-01.mp4', 'video/Play/Math/M-01.mp4', 'video/Play/Math/M-01.mp4', '2019/11/28  04:05:52pm', 'Math'),
(51, 'video/Play/Math/M-02.mp4', 'video/Play/Math/M-02.mp4', 'video/Play/Math/M-02.mp4', '2019/11/28  04:06:21pm', 'Math'),
(52, 'video/Play/Math/M-03.mp4', 'video/Play/Math/M-03.mp4', 'video/Play/Math/M-03.mp4', '2019/11/28  04:06:41pm', 'Math'),
(53, 'video/Play/Math/M-04.mp4', 'video/Play/Math/M-04.mp4', 'video/Play/Math/M-04.mp4', '2019/11/28  04:07:22pm', 'Math'),
(54, 'video/Play/Math/M-05.mp4', 'video/Play/Math/M-05.mp4', 'video/Play/Math/M-05.mp4', '2019/11/28  04:07:47pm', 'Math'),
(55, 'video/Play/Math/M-06.mp4', 'video/Play/Math/M-06.mp4', 'video/Play/Math/M-06.mp4', '2019/11/28  04:08:08pm', 'Math'),
(56, 'video/Play/Math/M-07.mp4', 'video/Play/Math/M-07.mp4', 'video/Play/Math/M-07.mp4', '2019/11/28  04:08:41pm', 'Math'),
(57, 'video/Play/Math/M-08.mp4', 'video/Play/Math/M-08.mp4', 'video/Play/Math/M-08.mp4', '2019/11/28  04:09:02pm', 'Math'),
(58, 'video/Play/Math/M-09.mp4', 'video/Play/Math/M-09.mp4', 'video/Play/Math/M-09.mp4', '2019/11/28  04:09:22pm', 'Math'),
(59, 'video/Play/Math/M-10.mp4', 'video/Play/Math/M-10.mp4', 'video/Play/Math/M-10.mp4', '2019/11/28  04:09:42pm', 'Math'),
(60, 'video/Play/Story/S-01.mp4', 'video/Play/Story/S-01.mp4', 'video/Play/Story/S-01.mp4', '2019/11/28  07:04:49pm', 'Story'),
(61, 'video/Play/Story/S-02.mp4', 'video/Play/Story/S-02.mp4', 'video/Play/Story/S-02.mp4', '2019/11/28  07:05:30pm', 'Story'),
(62, 'video/Play/Story/S-03.mp4', 'video/Play/Story/S-03.mp4', 'video/Play/Story/S-03.mp4', '2019/11/28  07:06:00pm', 'Story'),
(63, 'video/Play/Story/S-04.mp4', 'video/Play/Story/S-04.mp4', 'video/Play/Story/S-04.mp4', '2019/11/28  07:07:20pm', 'Story'),
(64, 'video/Play/Story/S-05.mp4', 'video/Play/Story/S-05.mp4', 'video/Play/Story/S-05.mp4', '2019/11/28  07:07:47pm', 'Story'),
(65, 'video/Play/Story/S-06.mp4', 'video/Play/Story/S-06.mp4', 'video/Play/Story/S-06.mp4', '2019/11/28  07:08:13pm', 'Story'),
(66, 'video/Play/Story/S-07.mp4', 'video/Play/Story/S-07.mp4', 'video/Play/Story/S-07.mp4', '2019/11/28  07:08:38pm', 'Story'),
(67, 'video/Play/Story/S-08.mp4', 'video/Play/Story/S-08.mp4', 'video/Play/Story/S-08.mp4', '2019/11/28  07:09:02pm', 'Story'),
(68, 'video/Play/Story/S-09.mp4', 'video/Play/Story/S-09.mp4', 'video/Play/Story/S-09.mp4', '2019/11/28  07:09:34pm', 'Story'),
(69, 'video/Play/Story/S-10.mp4', 'video/Play/Story/S-10.mp4', 'video/Play/Story/S-10.mp4', '2019/11/28  07:10:08pm', 'Story'),
(70, 'video/Play/Story/S-11.mp4', 'video/Play/Story/S-11.mp4', 'video/Play/Story/S-11.mp4', '2019/11/28  07:10:30pm', 'Story'),
(71, 'video/Play/Poem/BP-01.mp4', 'video/Play/Poem/BP-01.mp4', 'video/Play/Poem/BP-01.mp4', '2019/11/28  06:51:27pm', 'Poem'),
(72, 'video/Play/Poem/EP-02.mp4', 'video/Play/Poem/EP-02.mp4', 'video/Play/Poem/EP-02.mp4', '2019/11/28  06:52:05pm', 'Poem'),
(73, 'video/Play/Poem/BP-03.mp4', 'video/Play/Poem/BP-03.mp4', 'video/Play/Poem/BP-03.mp4', '2019/11/28  06:51:27pm', 'Poem'),
(74, 'video/Play/Poem/EP-01.mp4', 'video/Play/Poem/EP-01.mp4', 'video/Play/Poem/EP-01.mp4', '2019/11/28  06:52:30pm', 'Poem'),
(75, 'video/Play/Poem/EP-05.mp4', 'video/Play/Poem/EP-05.mp4', 'video/Play/Poem/EP-05.mp4', '2019/11/28  06:52:05pm', 'Poem'),
(76, 'video/Play/Poem/EP-04.mp4', 'video/Play/Poem/EP-04.mp4', 'video/Play/Poem/EP-04.mp4', '2019/11/28  06:52:30pm', 'Poem'),
(77, 'video/Play/Poem/BP-02.mp4', 'video/Play/Poem/BP-02.mp4', 'video/Play/Poem/BP-02.mp4', '2019/11/28  06:51:27pm', 'Poem'),
(78, 'video/Play/Poem/EP-03.mp4', 'video/Play/Poem/EP-03.mp4', 'video/Play/Poem/EP-03.mp4', '2019/11/28  06:52:05pm', 'Poem');

-- --------------------------------------------------------

--
-- Table structure for table `exam_detaiils`
--

CREATE TABLE `exam_detaiils` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL
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
(51, 'shehneezatasneem@gmail.com', '8888', 'Tutor'),
(52, 'farukovi29@gmail.com', '7777', 'Admin'),
(54, 'saumik351@gmail.com', '9999', 'Mentor'),
(55, 'farukovi54@gmail.com', 'ovi54@', 'Tutor'),
(57, 'toufiqa45@gmail.com', '9898', 'Tutor'),
(58, 'prioty.13@gmail.com', '9898', 'Tutor'),
(59, 'r.jahan232@gmail.com', '6767', 'Tutor'),
(60, 'shahrukhahmed312@gmail.com', '9999', 'Mentor'),
(61, 'hasibr87@gmail.com', '5555', 'Mentor'),
(62, 'mredul.orfiaz@gmail.com', '6767', 'Mentor'),
(63, 'hasib.hasan@aiub.edu', '9912', 'Mentor'),
(64, 'Shahrukh Khan', '7863', 'Child'),
(65, 'Salman Khan', '9995', 'Child'),
(66, 'Amir Khan', '9180', 'Child'),
(68, 'Shakib Al Hasan', '6443', 'Child'),
(69, 'Shakib Khan', '4878', 'Child'),
(70, 'Md Ahmed', '6213', 'Child');

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
(11, 'Saumik Tanveer', 'saumik351@gmail.com', 1451903329, 'Asadgate,Dhaka', 'Islam', 'Male', 'Mentor', 1781119320, '9999'),
(12, 'Shahrukh Ahmed', 'shahrukhahmed312@gmail.com', 2147483647, 'Nikunja,Dhaka', 'Islam', 'Male', 'Mentor', 1780524019, '9999'),
(13, 'Hasib Rahman', 'hasibr87@gmail.com', 2147483647, 'Kafrul,Dhaka', 'Islam', 'Male', 'Mentor', 1756059000, '5555'),
(14, 'Mredul Orfiaz', 'mredul.orfiaz@gmail.com', 2147483647, 'Kallanpur,Dhaka', 'Islam', 'Male', 'Mentor', 1521235804, '6767'),
(15, 'Hasib Hasan', 'hasib.hasan@aiub.edu', 2147483647, 'Mirpur,Dhaka', 'Islam', 'Male', 'Mentor', 1987447683, '9912');

-- --------------------------------------------------------

--
-- Table structure for table `mssg`
--

CREATE TABLE `mssg` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Text` text NOT NULL,
  `MailFrom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mssg`
--

INSERT INTO `mssg` (`Id`, `Email`, `Text`, `MailFrom`) VALUES
(2, 'Saumik Tanveer', 'hlw', ''),
(4, 'shehneeza tasneem', 'hlw', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Id` int(11) NOT NULL,
  `Text` text NOT NULL,
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
  `MentorEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursery_1`
--

INSERT INTO `nursery_1` (`Id`, `Name`, `BirthDay`, `BirthId`, `Religion`, `Gender`, `Address`, `MentorEmail`) VALUES
(1, 'Salman khan', '2011-12-09', 2147483611, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com'),
(12, 'Shahrukh Khan', '2010-07-12', 2147483647, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com'),
(13, 'Salman Khan', '2011-12-09', 2147483611, 'Islam', 'Male', 'Asadgate,Dhaka.', 'saumik351@gmail.com'),
(14, 'Amir Khan', '2010-03-19', 2147483547, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com'),
(20, 'Shakib Al Hasan', '2010-12-24', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com'),
(21, 'Shakib Khan', '2010-02-03', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com'),
(22, 'Md Ahmed', '2010-04-23', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com');

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
  `MentorEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursery_2`
--

INSERT INTO `nursery_2` (`Id`, `Name`, `BirthDay`, `BirthId`, `Religion`, `Gender`, `Address`, `MentorEmail`) VALUES
(1, 'Amir Khan', '2010-03-19', 2147483547, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `picofchild`
--

CREATE TABLE `picofchild` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `MentorMail` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Imgsrc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picofchild`
--

INSERT INTO `picofchild` (`Id`, `Name`, `MentorMail`, `Class`, `Imgsrc`) VALUES
(6, 'Shahrukh Khan', 'saumik351@gmail.com', 'Play', 'Dog.jpg');

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
(3, 'sithi.jpg', 'upload/sithi.jpg', 'shehneeza tasneem'),
(4, 'mredul.jpg', 'upload/mredul.jpg', 'Mredul Orfiaz'),
(5, 'Budgerighar.jpg', 'upload/Budgerighar.jpg', 'Faruk Omar');

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
  `MentorEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`Id`, `Name`, `Birthday`, `Birthid`, `Religion`, `Gender`, `Address`, `MentorEmail`) VALUES
(12, 'Shahrukh Khan', '2010-07-12', 2147483647, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com'),
(13, 'Salman Khan', '2011-12-09', 2147483611, 'Islam', 'Male', 'Asadgate,Dhaka.', 'saumik351@gmail.com'),
(14, 'Amir Khan', '2010-03-19', 2147483547, 'Islam', 'Male', 'Asadgate,Dhaka', 'saumik351@gmail.com'),
(20, 'Shakib Al Hasan', '2010-12-24', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com'),
(21, 'Shakib Khan', '2010-02-03', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com'),
(22, 'Md Ahmed', '2010-04-23', 2147483647, 'Islam', 'Male', 'Kallanpur,Dhaka', 'mredul.orfiaz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `playsubmission`
--

CREATE TABLE `playsubmission` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Timer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playsubmission`
--

INSERT INTO `playsubmission` (`Id`, `Name`, `Subject`, `Class`, `Timer`) VALUES
(1, 'ENGLISH.docx', 'English', 'Play', '2019/12/03  11:31:52pm');

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
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Id` int(11) NOT NULL,
  `Problem` varchar(300) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Id`, `Problem`, `Email`) VALUES
(5, 'Upload', 'shehneezatasneem@gmail.com'),
(6, 'login', 'saumik351@gmail.com'),
(7, 'online', 'saumik351@gmail.com'),
(8, 'online', 'saumik351@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resultnursery-1`
--

CREATE TABLE `resultnursery-1` (
  `Id` int(11) NOT NULL,
  `ChildId` int(5) NOT NULL,
  `Bangla` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Math` int(5) NOT NULL,
  `Digit` int(5) NOT NULL,
  `Poem` int(5) NOT NULL,
  `Story` int(5) NOT NULL,
  `Total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultnursery-2`
--

CREATE TABLE `resultnursery-2` (
  `Id` int(11) NOT NULL,
  `ChildId` int(5) NOT NULL,
  `Bangla` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Math` int(5) NOT NULL,
  `Digit` int(5) NOT NULL,
  `Poem` int(5) NOT NULL,
  `Story` int(5) NOT NULL,
  `Total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultofplay`
--

CREATE TABLE `resultofplay` (
  `Id` int(11) NOT NULL,
  `ChildId` varchar(50) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Bangla` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Math` int(5) NOT NULL,
  `Digit` int(5) NOT NULL,
  `Poem` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultofplay`
--

INSERT INTO `resultofplay` (`Id`, `ChildId`, `Mail`, `Bangla`, `English`, `Math`, `Digit`, `Poem`) VALUES
(1, 'Shakib Al Hasan', 'mredul.orfiaz@gmail.com', 75, 78, 76, 86, 38);

-- --------------------------------------------------------

--
-- Table structure for table `setquestion`
--

CREATE TABLE `setquestion` (
  `Id` int(11) NOT NULL,
  `Name1` varchar(50) NOT NULL,
  `Name2` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setquestion`
--

INSERT INTO `setquestion` (`Id`, `Name1`, `Name2`, `Name`, `Subject`, `Class`) VALUES
(4, 'Question/Play/Math/ENGLISH', 'Question/Play/Math/ENGLISH', 'Question/Play/Math/ENGLISH', 'Math', 'Play');

-- --------------------------------------------------------

--
-- Table structure for table `submissionclass1`
--

CREATE TABLE `submissionclass1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Timer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionclass2`
--

CREATE TABLE `submissionclass2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Timer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionnursery1`
--

CREATE TABLE `submissionnursery1` (
  `Id` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Subject` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Timer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionnursery2`
--

CREATE TABLE `submissionnursery2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Timer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Class_num_1` varchar(10) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`Id`, `Email`, `Class_num_1`, `Time`, `Date`) VALUES
(1, 'farukovi54@gmail.com', 'Class-2', 'Friday', '12-5'),
(2, 'shehneezatasneem@gmail.com', 'Play', '5-10', 'Friday'),
(4, 'toufiqa45@gmail.com', 'nursery-1', '5-10', 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_chat`
--

CREATE TABLE `tutor_chat` (
  `Id` int(11) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `DateTime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_chat`
--

INSERT INTO `tutor_chat` (`Id`, `Mail`, `Message`, `DateTime`) VALUES
(1, 'shehneeza tasneem', 'Hlw! Everyone!', '04:51:42pm');

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
  `password` varchar(15) NOT NULL,
  `Value` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_info`
--

INSERT INTO `tutor_info` (`Id`, `Name`, `Email`, `Nid_No`, `Address`, `rlgn`, `gndr`, `type`, `phone`, `password`, `Value`) VALUES
(6, 'shehneeza tasneem', 'shehneezatasneem@gmail.com', 1453235678, 'Malibagh,Dhaka', 'Islam', 'Female', 'Tutor', 1553246576, '8888', 1),
(7, 'Faruk Omar', 'farukovi54@gmail.com', 2147483647, 'Mirpur,Dhaka', 'Islam', 'Male', 'Tutor', 1767778767, 'ovi54@', 1),
(8, 'Toufiq Tanna', 'toufiqa45@gmail.com', 2147483647, 'Gulshan,Dhaka', 'Islam', 'Male', 'Tutor', 1750856748, '9898', 0),
(10, 'Prioty Trisha', 'prioty.13@gmail.com', 2147483647, 'Uttara,Dhaka', 'Hindu', 'Female', 'Tutor', 1876453219, '9898', 0),
(11, 'Rukaiya Jahan', 'r.jahan232@gmail.com', 2147483647, 'Boshundhara,Dhaka', 'Islam', 'Female', 'Tutor', 1791345678, '6767', 1);

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
-- Indexes for table `exam_detaiils`
--
ALTER TABLE `exam_detaiils`
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
-- Indexes for table `mssg`
--
ALTER TABLE `mssg`
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
-- Indexes for table `picofchild`
--
ALTER TABLE `picofchild`
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
-- Indexes for table `playsubmission`
--
ALTER TABLE `playsubmission`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resultnursery-1`
--
ALTER TABLE `resultnursery-1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resultnursery-2`
--
ALTER TABLE `resultnursery-2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resultofplay`
--
ALTER TABLE `resultofplay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `setquestion`
--
ALTER TABLE `setquestion`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `submissionclass1`
--
ALTER TABLE `submissionclass1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `submissionclass2`
--
ALTER TABLE `submissionclass2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `submissionnursery1`
--
ALTER TABLE `submissionnursery1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `submissionnursery2`
--
ALTER TABLE `submissionnursery2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutor_chat`
--
ALTER TABLE `tutor_chat`
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `children_account`
--
ALTER TABLE `children_account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `exam_detaiils`
--
ALTER TABLE `exam_detaiils`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `mentor_info`
--
ALTER TABLE `mentor_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mssg`
--
ALTER TABLE `mssg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_1`
--
ALTER TABLE `nursery_1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nursery_2`
--
ALTER TABLE `nursery_2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picofchild`
--
ALTER TABLE `picofchild`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `playsubmission`
--
ALTER TABLE `playsubmission`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resultnursery-1`
--
ALTER TABLE `resultnursery-1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultnursery-2`
--
ALTER TABLE `resultnursery-2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultofplay`
--
ALTER TABLE `resultofplay`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setquestion`
--
ALTER TABLE `setquestion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submissionclass1`
--
ALTER TABLE `submissionclass1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submissionclass2`
--
ALTER TABLE `submissionclass2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submissionnursery1`
--
ALTER TABLE `submissionnursery1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submissionnursery2`
--
ALTER TABLE `submissionnursery2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutor_chat`
--
ALTER TABLE `tutor_chat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutor_info`
--
ALTER TABLE `tutor_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
