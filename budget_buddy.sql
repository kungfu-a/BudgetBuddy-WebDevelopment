-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 02:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `email`, `password`) VALUES
(2, 'Sebastian Icarus Joson', 'seb@gmail.com', 'sebsebseb');

-- --------------------------------------------------------

--
-- Table structure for table `billsreminder`
--

CREATE TABLE `billsreminder` (
  `billID` int(50) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `billname` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billsreminder`
--

INSERT INTO `billsreminder` (`billID`, `userID`, `useremail`, `billname`, `amount`) VALUES
(9, '8', 'servin123@gmail.com', 'Maynilad', '800'),
(10, '8', 'servin123@gmail.com', 'PLDT', '1600'),
(13, '1', 'carlojim02@gmail.com', 'Maynilad', '600');

-- --------------------------------------------------------

--
-- Table structure for table `budgetplanner`
--

CREATE TABLE `budgetplanner` (
  `expenseID` int(50) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `expensetitle` varchar(50) NOT NULL,
  `expenseamount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budgetplanner`
--

INSERT INTO `budgetplanner` (`expenseID`, `userID`, `email`, `expensetitle`, `expenseamount`) VALUES
(3, '10', 'icarus12345@gmail.com', 'Lazada', '200'),
(4, '10', 'icarus12345@gmail.com', 'Clothes', '120'),
(6, '10', 'icarus12345@gmail.com', 'Earphones', '90'),
(7, '1', 'carlojim02@gmail.com', 'Lazada', '150');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `username`, `fname`, `email`, `password`) VALUES
(1, 'carlojim', 'Carlo Jim Alegardo', 'carlojim02@gmail.com', 'carlojim2'),
(4, 'intansanity', 'Intan Curry', 'intan11@gmail.com', 'intan12345'),
(5, 'baste', 'Sebastian Icarus', 'sebastianicarus52@gmail.com', 'sebastianicarus2'),
(7, 'renniel', 'renniel dimapilis', 'renniel10@gmail.com', 'renniel10'),
(8, 'servin', 'servin sanchez', 'servin123@gmail.com', 'servin123'),
(10, 'Baste', 'Sebastian Icarus Joson', 'icarus12345@gmail.com', 'icarus12345'),
(13, 'Jithru', 'Jitru Almudiel', 'jethro@gmail.com', 'bangyan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billsreminder`
--
ALTER TABLE `billsreminder`
  ADD PRIMARY KEY (`billID`);

--
-- Indexes for table `budgetplanner`
--
ALTER TABLE `budgetplanner`
  ADD PRIMARY KEY (`expenseID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `billsreminder`
--
ALTER TABLE `billsreminder`
  MODIFY `billID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `budgetplanner`
--
ALTER TABLE `budgetplanner`
  MODIFY `expenseID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
