-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 06:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csrls`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Id`, `Username`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@pmo.gov.gm', 'P@ssw0rd');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`Id`, `Name`, `size`, `downloads`) VALUES
(1, 'loan_applicants.pdf', 104935, 0),
(2, '1603011056173.pdf', 108390, 0),
(3, 'Tunkara.docx', 14821, 0),
(4, 'e7d2a02c-5d6f-44c8-a2bf-5925201b5f3b.pdf', 211714, 0),
(5, 'Ebrima_1924149.pdf', 343034, 0),
(6, '2.3e1 Websites Terms Of Reference Website Developm', 267013, 0),
(7, 'loan_applicants.pdf', 104935, 0),
(8, 'loan_applicants.pdf', 104935, 0),
(9, 'loan_applicants.pdf', 104935, 0),
(10, 'loan_applicants.pdf', 104935, 0),
(11, 'ATV.pdf', 195419, 0),
(12, 'delhiMail.pdf', 277496, 0),
(13, 'email2bombay.pdf', 232113, 0),
(14, 'autoresponsefromDelhi.pdf', 253481, 0),
(15, 'Do you need a visa _ _ France-Visas.gouv.fr.pdf', 78213, 0),
(16, 'update efro.pdf', 56285, 0),
(17, 'delhiMail.pdf', 277496, 0),
(18, 'autoresponsefromDelhi.pdf', 253481, 0),
(19, 'ATV.pdf', 195419, 0),
(20, 'ATV.pdf', 195419, 0),
(21, 'ATV.pdf', 195419, 0),
(22, 'ATV.pdf', 195419, 0),
(23, 'ATV.pdf', 195419, 0),
(24, 'ATV.pdf', 195419, 0),
(25, 'delhiMail.pdf', 277496, 0),
(26, 'delhiMail.pdf', 277496, 0),
(27, 'delhiMail.pdf', 277496, 0),
(28, 'autoresponsefromDelhi.pdf', 253481, 0),
(29, 'delhiMail.pdf', 277496, 0),
(30, 'delhiMail.pdf', 277496, 0),
(31, 'delhiMail.pdf', 277496, 0),
(32, 'autoresponsefromDelhi.pdf', 253481, 0),
(33, 'autoresponsefromDelhi.pdf', 253481, 0),
(34, 'autoresponsefromDelhi.pdf', 253481, 0),
(35, 'autoresponsefromDelhi.pdf', 253481, 0),
(36, 'ATV.pdf', 195419, 0),
(37, 'ATV.pdf', 195419, 0),
(38, 'ATV.pdf', 195419, 0),
(39, 'ATV.pdf', 195419, 0),
(40, 'ATV.pdf', 195419, 0),
(41, 'ATV.pdf', 195419, 0),
(42, 'ATV.pdf', 195419, 0),
(43, 'ATV.pdf', 195419, 0),
(44, 'Do you need a visa _ _ France-Visas.gouv.fr.pdf', 78213, 1),
(45, 'ATV.pdf', 195419, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan_applicants`
--

CREATE TABLE `loan_applicants` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` text NOT NULL,
  `DOB` date NOT NULL,
  `LoanType` varchar(50) NOT NULL,
  `LoanAmount` int(50) NOT NULL,
  `MDA` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Confirmation` varchar(20) NOT NULL,
  `EmployeeNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_applicants`
--

INSERT INTO `loan_applicants` (`ID`, `FirstName`, `Lastname`, `Gender`, `Email`, `Phone`, `DOB`, `LoanType`, `LoanAmount`, `MDA`, `Designation`, `Confirmation`, `EmployeeNumber`) VALUES
(86, 'mamadi', 'sow', 'Male', 'mamadi@gmail.com', '11112222333', '1998-08-28', 'housing', 80000, 'education', 'teacher', 'Yes', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loan_applicants`
--
ALTER TABLE `loan_applicants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `loan_applicants`
--
ALTER TABLE `loan_applicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
