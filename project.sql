-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 03:05 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `No` int NOT NULL,
  `Nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `NoHP` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Event` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Style` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`No`, `Nama`, `Email`, `NoHP`, `Event`, `Style`, `Brand`) VALUES
(11, 'kler', 'kkler@gmail.com', '', 'talkshow', 'Casual, Streetwear, Minimalist, Formal', 'Colorbox'),
(12, 'lovenia', 'love@gmail.com', '081336777', 'talkshow', 'Vintage, Minimalist, Formal', 'Zara, HnM'),
(19, 'aa', 'h@gmail.com', '0811229987', 'talkshow', 'Casual', 'Colorbox'),
(20, 'jiraf', 'jf@gmail.com', '0813459987', 'workshop', 'Streetwear, Chic', 'HnM, Colorbox'),
(21, 'kay', 'kay@gmail.com', '0813459987', 'runway', 'Casual, Vintage', 'Zara,HnM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Birthdate` date DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(225) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Nama`, `Birthdate`, `Email`, `Username`, `Password`) VALUES
(2, 'vienna', NULL, '', 'matchaxviz', 'matchalop'),
(3, 'vivie z', NULL, '', 'matcha', '$2y$10$Q3rrMyrRFOenQsivw6qwnONOO.Ra4MiTe4MuibTG6RLnlr89PrFl.'),
(4, 'kayloy', NULL, '', 'krongs', '$2y$10$X/HjgkvdKg2ullTZujVWie5BgIwqx0./wqFMCQW7zHy3WK2AX2Hp2'),
(5, 'aa', '2025-11-13', 'a@gmail.com', 'aa', '$2y$10$NEmIE0ee8lENPEniyBmUh.h50nysFKbRUscc7SGi0zbon/O0iTKRa'),
(6, 'zz', '2025-11-12', 'zz@gmail.com', 'zzxx', '$2y$10$DP2Gf7T111lW09nb7nPbhOo0RwDlFOymgX8S23EcPvi1oL2VRyauy'),
(7, 'zz', '2025-11-10', 'av@gmail.com', 'avt', '$2y$10$JxYpdklzYPqE2Dao638kQ.W0wFbRVNnGxNNondErAbF07LvQs3Lqu'),
(8, 'Fera Irawan', '2025-11-03', 'fera@gmail.com', 'fera_ir', '$2y$10$0H69rzm7IZbvpfHVapJowu3pXN1oW5uQW6UFYsN4m7zjf1E7xWVzG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`,`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `No` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
