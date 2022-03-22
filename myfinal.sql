-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 04:56 AM
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
  `Name` text NOT NULL,
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
-- Table structure for table `screcord`
--

CREATE TABLE `screcord` (
  `Name` varchar(100) NOT NULL,
  `scQuiz1` varchar(20) DEFAULT NULL,
  `scQuiz2` varchar(20) DEFAULT NULL,
  `scQuiz3` varchar(20) DEFAULT NULL,
  `scQuiz4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screcord`
--

INSERT INTO `screcord` (`Name`, `scQuiz1`, `scQuiz2`, `scQuiz3`, `scQuiz4`) VALUES
('aram', '50', NULL, NULL, NULL),
('armin', '100', NULL, NULL, NULL),
('bing', '100', '10', '15', '20'),
('Eren', NULL, NULL, NULL, NULL),
('stud1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `science` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Password`, `Email`, `science`) VALUES
('stud1', '45678', 'stud1@\r\ngmail.com', 0),
('aram', '123', 'aram123', 0),
('bing', '12345', 'bing123@gmail.com', 0),
('armin', '123', '123', 0);

--
-- Indexes for dumped tables
--

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
  ADD KEY `science` (`science`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
