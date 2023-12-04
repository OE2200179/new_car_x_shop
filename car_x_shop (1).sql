-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 10:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_x_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `ID` int(11) NOT NULL,
  `Car_Name` varchar(255) NOT NULL,
  `Model_Year` int(11) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Car_Type` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`ID`, `Car_Name`, `Model_Year`, `Color`, `Car_Type`, `Price`, `Image`) VALUES
(20, ' Alfa Romeo', 2014, 'Red', '4C', 46000, 'imgtodatbase/659441_pexels-pixabay-210019.jpg'),
(22, ' Lamborghini', 2012, 'Orange', 'Aventador', 224000, 'imgtodatbase/269911_Lambo.jpg'),
(23, ' Dodge', 2008, 'Red', 'Viper SRT10 ACR', 100000, 'imgtodatbase/653559_Viper.webp'),
(24, ' Ford', 2013, 'Blue', 'Shelby GT500', 60000, 'imgtodatbase/121914_Ford-Mustang_Shelby_GT500-2013-1600-01.webp'),
(25, ' Mercedes Benz', 2011, 'Silver', 'SLS AMG', 225000, 'imgtodatbase/591724_SLS AMG.webp'),
(26, ' Chevrolet', 2017, 'Black', 'Tahoe', 50000, 'imgtodatbase/234596_chevy_tahoe2017_black.jpg'),
(27, ' Mitsubishi', 2007, 'Red', 'EVO X', 35000, 'imgtodatbase/808555_EVO X.jpg'),
(28, ' Dodge', 2023, 'White', 'Charger SRT Hellcat', 80000, 'imgtodatbase/998505_Hellcat.jpg'),
(30, ' BMW', 2010, 'Orange', 'M3 (E92) GTS', 175000, 'imgtodatbase/955456_E92.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Username`, `Email`, `Password`) VALUES
(16, 'osman', 'omar11', 'omar@osman.com', '12345'),
(17, 'osman osman', ' osman11', ' mohamedsalah78912@gmail.com', '12345'),
(18, 'mohamed', ' mosalah11', ' mohamedsalahwebdev@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
