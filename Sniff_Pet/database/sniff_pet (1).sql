-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 12:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sniff_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(50) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emp_position` varchar(50) CHARACTER SET latin1 NOT NULL,
  `age` int(50) NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `emp_position`, `age`, `contact`, `address`, `gender`) VALUES
(1, 'Allen', 'Veterinarian', 35, '09560437989', 'Danga', 'Male'),
(2, 'Juna', 'Groomer', 30, '09123412121', 'Guguinto', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(225) NOT NULL,
  `name` varchar(225) CHARACTER SET latin1 NOT NULL,
  `files` varchar(225) CHARACTER SET latin1 NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL,
  `time` int(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `name`, `files`, `text`, `time`, `date`) VALUES
(1, 'a', '', 'a', 1575249576, '2019-12-02'),
(2, 'a', '', 'a', 1575249614, '2019-12-02'),
(3, 'Santos', '', 'Allen', 1575249959, '2019-12-02'),
(4, 'h', 'dogo.png', 'hi', 1575250040, '2019-12-02'),
(5, 'anonymous', '', 'dasdasda', 1575251399, '2019-12-02'),
(6, 'Hi', '', 'Jack', 1575265382, '2019-12-02'),
(7, 'Vincent', '', 'Pogi si Allen', 1575266171, '2019-12-02'),
(8, 'anonymous', 'O969zbQ.jpg', 'wow', 1575266698, '2019-12-02'),
(9, 'Sam', '', 'Hello', 1575269714, '2019-12-02'),
(10, 'allen', 'allen', 'asdasd', 0, '0000-00-00'),
(11, 'anonymous', '', 'Nice! Sana all!', 1575525984, '2019-12-05'),
(13, 'Sam', '', 'Alele', 1575526924, '2019-12-05'),
(14, 'Arjude', '', 'COmplex', 1575526963, '2019-12-05'),
(15, 'Juna', '', 'Juna', 1575611370, '2019-12-06'),
(16, 'anonymous', 'pngtree-vector-house-icon-png-image_695726.jpg', 'asdasd', 1575611430, '2019-12-06'),
(17, 'anonymous', 'pngtree-vector-house-icon-png-image_695726.jpg', 'asdasd', 1575619248, '2019-12-06'),
(18, 'anonymous', '38674906-paws-wallpapers.jpg', 'asd', 1575619350, '2019-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `petowner_id` int(5) NOT NULL,
  `petowner_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone_number` varchar(30) CHARACTER SET latin1 NOT NULL,
  `designation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petowner`
--

INSERT INTO `petowner` (`petowner_id`, `petowner_name`, `address`, `gender`, `phone_number`, `designation`, `username`, `password`) VALUES
(1, 'Juna Tria', 'Guguinto', 'Male', '09561231231', 'PetOwner', 'Juna', 'juna'),
(2, 'Jeremy Fabian', 'Malabon', 'Male', '09173257098', 'PetOwner', 'Jeremy', 'fabian'),
(3, 'Sam De Mesa', 'Bayan', 'Male', '09876531231', 'PetOwner', 'Sam', 'sam'),
(4, 'Sam Santos', 'Danga, Bayan', 'Male', '09123123123', 'PetOwner', 'Samlen', 'samlen');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(15) NOT NULL,
  `avatar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `veterinarian` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `breed` varchar(50) CHARACTER SET latin1 NOT NULL,
  `age` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_owner` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `avatar`, `pet_name`, `pet_type`, `veterinarian`, `address`, `breed`, `age`, `gender`, `pet_owner`) VALUES
(1, 'O969zbQ.jpg', 'Mishka', 'Dog', 'Francess Dela Cruz', 'Danga', 'Shih Tzu', '1 year', 'Female', 'Jeremy Fabian');

-- --------------------------------------------------------

--
-- Table structure for table `pets_owner`
--

CREATE TABLE `pets_owner` (
  `pet_id` int(15) NOT NULL,
  `avatar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_owner` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `breed` varchar(50) CHARACTER SET latin1 NOT NULL,
  `age` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL,
  `veterinarian` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets_owner`
--

INSERT INTO `pets_owner` (`pet_id`, `avatar`, `pet_name`, `pet_type`, `pet_owner`, `address`, `breed`, `age`, `gender`, `veterinarian`) VALUES
(1, 'O969zbQ.jpg', 'Mishka', 'Dog', 'Juna Tria', 'Guguinto', 'Shih Tzu', '1 year', 'Female', 'Allen Santos');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `service_price` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_price`) VALUES
(1, 'Check-Up', '$100'),
(2, 'Groom', '$50');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vac_id` int(15) NOT NULL,
  `vaccine_sticker` int(50) NOT NULL,
  `pet_owner` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `vaccine_against` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_due` date NOT NULL,
  `veterinarian` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vac_id`, `vaccine_sticker`, `pet_owner`, `pet_name`, `date`, `vaccine_against`, `date_due`, `veterinarian`) VALUES
(1, 0, 'Jeremy Fabian', 'Mishka', '2019-12-10', 'Anti-Rabies', '2020-03-10', 'Francess Dela Cruz');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vet_id` int(11) NOT NULL,
  `vet_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone_number` varchar(30) CHARACTER SET latin1 NOT NULL,
  `designation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`vet_id`, `vet_name`, `address`, `gender`, `phone_number`, `designation`, `username`, `password`) VALUES
(1, 'Allen Santos', 'Danga', 'Male', '09560437989', 'Veterinarian', 'Allen', 'allen'),
(2, 'Francess Dela Cruz', 'Danga', 'Female', '09173257054', 'Veterinarian', 'Wae', 'wae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petowner`
--
ALTER TABLE `petowner`
  ADD PRIMARY KEY (`petowner_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `pets_owner`
--
ALTER TABLE `pets_owner`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vac_id`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`vet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `petowner`
--
ALTER TABLE `petowner`
  MODIFY `petowner_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets_owner`
--
ALTER TABLE `pets_owner`
  MODIFY `pet_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vac_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
