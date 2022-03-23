-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 12:56 PM
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
  `Name` varchar(100) NOT NULL DEFAULT '',
  `engQuiz1` varchar(100) NOT NULL DEFAULT '',
  `engQuiz2` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engrecord`
--

INSERT INTO `engrecord` (`Name`, `engQuiz1`, `engQuiz2`) VALUES
('amza', '100', ''),
('baba', '100', '75'),
('eren', '', ''),
('hehe', '', ''),
('lina', '', ''),
('meow', '', ''),
('sykkuno', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mathrecord`
--

CREATE TABLE `mathrecord` (
  `Name` varchar(100) NOT NULL,
  `mathQuiz1` varchar(100) NOT NULL,
  `mathQuiz2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathrecord`
--

INSERT INTO `mathrecord` (`Name`, `mathQuiz1`, `mathQuiz2`) VALUES
('amza', '', ''),
('baba', '100', '100'),
('eren', '100', ''),
('hehe', '', ''),
('lina', '', ''),
('meow', '', ''),
('sykkuno', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `screcord`
--

CREATE TABLE `screcord` (
  `Name` varchar(100) NOT NULL,
  `scQuiz1` varchar(20) DEFAULT '',
  `scQuiz2` varchar(20) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screcord`
--

INSERT INTO `screcord` (`Name`, `scQuiz1`, `scQuiz2`) VALUES
('amza', '', ''),
('baba', '50', '25'),
('eren', '', ''),
('hehe', '', ''),
('lina', '', ''),
('meow', '', ''),
('sykkuno', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `accumulatedMarks` int(100) NOT NULL DEFAULT 0,
  `disable` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Password`, `Email`, `accumulatedMarks`, `disable`) VALUES
('amza', '123', '123', 100, '1'),
('baba', '123', '123', 350, '0'),
('eren', '123', '123', 200, '1'),
('hehe', '123', '123', 0, '0'),
('lina', '123', '123', 0, '0'),
('meow', '123', '123', 0, '0'),
('sykkuno', '123', '123', 200, '1');

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
('amza', '50', '', ''),
('baba', '20', '20', ''),
('eren', '', '', ''),
('hehe', '', '', ''),
('lina', '', '', ''),
('meow', '', '', ''),
('sykkuno', '', '', '');

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
  ADD KEY `engQuiz2` (`engQuiz2`);

--
-- Indexes for table `mathrecord`
--
ALTER TABLE `mathrecord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `mathQuiz1` (`mathQuiz1`),
  ADD KEY `mathQuiz2` (`mathQuiz2`);

--
-- Indexes for table `screcord`
--
ALTER TABLE `screcord`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `scQuiz1` (`scQuiz1`),
  ADD KEY `scQuiz2` (`scQuiz2`),
  ADD KEY `scQuiz2_2` (`scQuiz2`),
  ADD KEY `scQuiz1_2` (`scQuiz1`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `disable` (`Name`),
  ADD KEY `accumulatedMarks` (`accumulatedMarks`);

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
