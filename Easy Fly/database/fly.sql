-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminemail` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminemail`, `password`) VALUES
('admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` smallint(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `flight_number` varchar(5) NOT NULL,
  `airline` varchar(20) NOT NULL,
  `seatnum` smallint(3) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `flight_date` date NOT NULL,
  `flight_time` time NOT NULL,
  `fare` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`name`, `email`, `age`, `gender`, `flight_number`, `airline`, `seatnum`, `source`, `destination`, `flight_date`, `flight_time`, `fare`) VALUES
('selvan', 'selvan@gmail.com', 20, 'male', '0', 'AIR INDIA', 100, 'MUMBAI', 'CHENNAI', '2023-08-26', '12:28:00', 4000),
('nandana kushte', 'a@gmail.com', 100, 'female', '0', 'AIR INDIA', 99, 'MUMBAI', 'CHENNAI', '2023-08-26', '12:28:00', 4000),
('nandana kushte', 'a@gmail.com', 100, 'female', '0', 'AIR INDIA', 98, 'MUMBAI', 'CHENNAI', '2023-08-26', '12:28:00', 4000),
('nandana kushte', 'a@gmail.com', 100, 'female', '0', 'AIR INDIA', 97, 'MUMBAI', 'CHENNAI', '2023-08-26', '12:28:00', 4000),
('selvan', 'selvan@gmail.com', 24, 'male', '1', 'AIR ', 200, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 'selvan@gmail.com', 24, 'male', '1', 'AIR ', 199, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 198, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 197, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 196, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 195, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 194, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 193, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 192, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 191, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 190, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 189, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 188, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 187, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 186, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 185, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 184, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 183, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('selvan', 's@gmail.com', 22, 'male', '1', 'AIR ', 182, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('shruti', 's@gmail.com', 19, 'female', '1', 'AIR ', 181, 'B', 'C', '2023-08-27', '15:11:00', 20000),
('shruti', 's@gmail.com', 19, 'female', '1', 'AIR ', 180, 'B', 'C', '2023-08-27', '15:11:00', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('selvan', 's@gmail.com', 'edsgdhfjgkhkhjhfghdgdffhthgfhgfbf');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_number` varchar(5) NOT NULL,
  `airline` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `duration` time NOT NULL,
  `capacity` smallint(3) NOT NULL,
  `seat` smallint(3) NOT NULL,
  `fare` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `flight_number` int(11) NOT NULL,
  `airline` varchar(30) NOT NULL,
  `flight_date` date NOT NULL,
  `flight_time` time NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `duration` time NOT NULL,
  `capacity` smallint(3) NOT NULL,
  `available_seats` int(3) NOT NULL,
  `fare` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`flight_number`, `airline`, `flight_date`, `flight_time`, `source`, `destination`, `duration`, `capacity`, `available_seats`, `fare`) VALUES
(1, 'AIR ', '2023-08-27', '15:11:00', 'B', 'C', '00:00:16', 200, 179, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_number` bigint(12) NOT NULL,
  `expiration_date` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_number`, `expiration_date`, `cvv`) VALUES
(1234, '0000-00-00', 234),
(1234, '0000-00-00', 234);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `email`, `phone`, `password`) VALUES
('selvan', 'abc@gmail.com', 8928808354, '(6fr:=UcHu>K'),
('selvan', 'selvan@gmail.com', 8928808365, '123456'),
('abc', 'a@gmail.com', 1234567891, 'a@123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
