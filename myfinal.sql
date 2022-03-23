-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 03:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`, `Email`) VALUES
('admin1', '12345', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `engrecord`
--

CREATE TABLE `engrecord` (
  `Name` int(20) NOT NULL,
  `engQuiz1` int(100) NOT NULL,
  `engQuiz2` int(100) NOT NULL,
  `engQuiz3` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engrecord`
--

INSERT INTO `engrecord` (`Name`, `engQuiz1`, `engQuiz2`, `engQuiz3`) VALUES
(0, 0, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mathrecord`
--

CREATE TABLE `mathrecord` (
  `Name` varchar(100) NOT NULL,
  `mathQuiz1` varchar(100) NOT NULL,
  `mathQuiz2` varchar(100) NOT NULL,
  `mathQuiz3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathrecord`
--

INSERT INTO `mathrecord` (`Name`, `mathQuiz1`, `mathQuiz2`, `mathQuiz3`) VALUES
('aaaa', '', '', ''),
('abc', '1000', '', ''),
('Karen', '', '', ''),
('khiaxeng', '75', '0', ''),
('Kk', '25', '', ''),
('niga', '25', '10', ''),
('sc', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `screcord`
--

CREATE TABLE `screcord` (
  `Name` varchar(100) NOT NULL,
  `scQuiz1` varchar(20) DEFAULT '',
  `scQuiz2` varchar(20) DEFAULT '',
  `scQuiz3` varchar(20) DEFAULT '',
  `scQuiz4` varchar(20) DEFAULT '',
  `activeStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screcord`
--

INSERT INTO `screcord` (`Name`, `scQuiz1`, `scQuiz2`, `scQuiz3`, `scQuiz4`, `activeStatus`) VALUES
('aaaa', '', '', '', '', ''),
('abc', '', '', '', '', ''),
('aram', '50', '', '', '', ''),
('armin', '100', '', '', '', ''),
('baba', '100', '', '', '', ''),
('bing', '100', '10', '15', '20', ''),
('empty', '', '', '', '', ''),
('Eren', '', '', '', '', ''),
('Karen', '', '', '', '', ''),
('khiaxeng', '', '', '', '', ''),
('Kk', '', '', '', '', ''),
('niga', '100', '20', '', '', ''),
('sc', '', '', '', '', ''),
('stud1', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `finalExam` int(20) NOT NULL,
  `accumulatedMarks` varchar(100) NOT NULL DEFAULT '0',
  `assessmentCount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Password`, `Email`, `finalExam`, `accumulatedMarks`, `assessmentCount`) VALUES
('aaaa', '123', '12312', 0, '0', 0),
('abc', '123', '123', 0, '100', 0),
('aram', '123', 'aram123', 0, '400', 0),
('armin', '123', '123', 0, '', 0),
('baba', '123', '123', 0, '250', 0),
('bing', '12345', 'bing123@gmail.com', 0, '', 0),
('empty', '123', '123', 0, '', 0),
('Karen', '555', '555', 0, '', 0),
('khiaxeng', '123', '123', 0, '', 0),
('Kk', '123', '123', 0, '25', 0),
('niga', '123', '123', 0, '150', 0),
('sc', '123', '123', 0, '200', 0),
('stud1', '45678', 'stud1@\r\ngmail.com', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `techrecord`
--

CREATE TABLE `techrecord` (
  `Name` varchar(20) NOT NULL,
  `techQuiz1` varchar(20) NOT NULL,
  `techQuiz2` varchar(20) NOT NULL,
  `techQuiz3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techrecord`
--

INSERT INTO `techrecord` (`Name`, `techQuiz1`, `techQuiz2`, `techQuiz3`) VALUES
('aaaa', '', '', ''),
('abc', '', '', ''),
('Karen', '', '', ''),
('Kk', '', '', ''),
('niga', '100', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `engrecord`
--
ALTER TABLE `engrecord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `engQuiz1` (`engQuiz1`),
  ADD KEY `engQuiz2` (`engQuiz2`),
  ADD KEY `engQuiz3` (`engQuiz3`);

--
-- Indexes for table `mathrecord`
--
ALTER TABLE `mathrecord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `mathQuiz1` (`mathQuiz1`),
  ADD KEY `mathQuiz2` (`mathQuiz2`),
  ADD KEY `mathQuiz3` (`mathQuiz3`);

--
-- Indexes for table `screcord`
--
ALTER TABLE `screcord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `scQuiz1` (`scQuiz1`),
  ADD KEY `scQuiz2` (`scQuiz2`),
  ADD KEY `scQuiz2_2` (`scQuiz2`),
  ADD KEY `scQuiz3` (`scQuiz3`),
  ADD KEY `scQuiz4` (`scQuiz4`),
  ADD KEY `scQuiz1_2` (`scQuiz1`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `finalExam` (`finalExam`),
  ADD KEY `accumulatedMarks` (`accumulatedMarks`),
  ADD KEY `assessmentCount` (`assessmentCount`);

--
-- Indexes for table `techrecord`
--
ALTER TABLE `techrecord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `techQuiz1` (`techQuiz1`),
  ADD KEY `techQuiz2` (`techQuiz2`),
  ADD KEY `techQuiz3` (`techQuiz3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
