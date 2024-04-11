-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2024 at 04:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Deeraj', 'thisisdeeraj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Prjwal Gatty', 'prajju28aly@gmail.com', '0474ae93ad5f285823c417e050001e20');

-- --------------------------------------------------------

--
-- Table structure for table `catering_bookings`
--

CREATE TABLE `catering_bookings` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `event_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_count` int NOT NULL,
  `booking_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catering_bookings`
--

INSERT INTO `catering_bookings` (`id`, `name`, `contact_number`, `address`, `event_description`, `total_count`, `booking_date`) VALUES
(1, 'Dylan Mckee', '969333333', 'Dolore et obcaecati ', 'In voluptate quia re', 3, '1985-02-14 11:59:00'),
(2, 'Teagan Shields', '54412365489', 'Illo rem est itaque ', 'Eiusmod saepe volupt', 60, '1973-06-15 20:03:00'),
(3, 'Macey Giles', '8584564569', 'Ea vel dolor amet s', 'Rerum est saepe id', 85, '1976-03-15 13:00:00'),
(4, 'Caryn Clay', '6785858596', 'Est inventore rerum ', 'Doloremque officia v', 100, '1971-05-10 23:16:00'),
(5, 'Ila Jimenez', '4761236548', 'Eum sit voluptatem', 'Rerum corporis qui m', 28, '2021-05-03 22:19:00'),
(6, 'Vincent Lynn', '833456988', 'Dicta asperiores rer', 'Illum ducimus et e', 18, '2017-03-06 08:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE `feedback_data` (
  `id` int NOT NULL,
  `satisfaction_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`id`, `satisfaction_level`, `comments`, `name`, `email`, `phone`) VALUES
(2, 'excellent', 'Esse necessitatibus ', 'Jack Farmer', 'winuvaqafo@mailinator.com', '+1 (711) 104-9387'),
(3, 'neutral', 'Sed modi amet conse', 'Sonya Hubbard', 'jeli@mailinator.com', '+1 (943) 322-5629'),
(4, 'excellent', 'the pooja service with a beautifull catring service at an average cost was the best thing.i really enjoyed the service', 'prajwal', 'abc@gmail.com', '1254678958'),
(5, 'good', 'Anim do voluptas dol', 'Uta Love', 'huxil@mailinator.com', '+1 (833) 458-5224'),
(6, 'good', 'Porro consectetur e', 'Hasad Weber', 'nutityco@mailinator.com', '+1 (863) 826-4225'),
(7, 'neutral', 'Ad qui veniam lauda', 'Scott Church', 'guxemyves@mailinator.com', '+1 (284) 371-2378'),
(8, 'excellent', 'Eos et numquam et co', 'Abraham Cardenas', 'fyjonywoxa@mailinator.com', '+1 (702) 519-8987'),
(9, 'good', 'Et in sunt sit culpa', 'Yasir Key', 'bysovesy@mailinator.com', '+1 (223) 229-4996');

-- --------------------------------------------------------

--
-- Table structure for table `hall_bookings`
--

CREATE TABLE `hall_bookings` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `total_count` int NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hall_bookings`
--

INSERT INTO `hall_bookings` (`id`, `name`, `phone`, `date`, `total_count`, `message`, `created_at`) VALUES
(1, 'August Guerra', '+1 (421) 469-83', '1996-03-02', 0, 'Nostrud nulla sint m', '2024-04-08 17:39:44'),
(2, 'Alice Potter', '+1 (763) 163-61', '1993-03-01', 100, 'Quam velit facere es', '2024-04-08 17:41:20'),
(3, 'Colorado Pennington', '+1 (123) 594-65', '1985-10-28', 17, 'Sed nisi et consequa', '2024-04-08 17:43:11'),
(5, 'Veda Huber', '+1 (727) 981-51', '2011-11-08', 93, '', '2024-04-08 17:56:14'),
(6, 'PRAJWAL GATTY', '6778', '2024-04-17', 8, '', '2024-04-08 18:13:18'),
(7, 'Belle Boone', '+1 (638) 171-42', '1983-07-30', 25, 'Sit praesentium labo', '2024-04-08 18:18:50'),
(8, 'prajwal', '2315648636', '2024-04-28', 100, 'i want an engagement to be conducted with all nescessaruy reqirements', '2024-04-09 09:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `pooja_bookings`
--

CREATE TABLE `pooja_bookings` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pooja_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pooja_bookings`
--

INSERT INTO `pooja_bookings` (`id`, `name`, `phone`, `pooja_type`, `date`, `message`) VALUES
(54, 'Dale Austin', '16454455464', 'Festival Poojas', '1992-11-07', 'Saepe consequuntur v'),
(55, 'Giacomo Mayo', '6412562525', 'Poojas and ceremonies', '2002-12-29', 'Commodi qui adipisci'),
(56, 'Keely Parker', '3012545696', 'Path or Parayana', '2018-03-06', 'Sed expedita non et '),
(57, 'Benjamin Parrish', '835652456215', 'Path or Parayana', '1976-10-13', 'Ea esse ea officia t'),
(58, 'Simone Albert', '223568952', 'pitru poojas or After-life rituals', '2013-01-12', 'Enim sed ipsa conse'),
(59, 'Justina Mullen', '4123652536', 'Havans or Homas', '1988-06-28', 'Aut quidem sunt impe'),
(60, 'Victoria Estrada', '67256565656', 'Path or Parayana', '1973-05-03', 'Aut vitae adipisicin'),
(61, 'Paki Evans', '1856565656', 'pitru poojas or After-life rituals', '2015-02-06', 'Voluptas aliquam mag'),
(62, 'rashmi ', '125', 'Shri Durga Devi Archana', '2021-12-14', 'Aut voluptas incidid'),
(63, 'duguebubu', '78965', 'select category', '2024-04-28', 'eeminf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'prajwal_gatty_28', 'prajju28aly@gmail.com', '0474ae93ad5f285823c417e050001e20'),
(2, 'shreya', 'shreya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Deeraj', 'thisisdeeraj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'rakshitha', 'rak@gmail.com', '934b535800b1cba8f96a5d72f72f1611'),
(7, 'Tester', 'tester@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering_bookings`
--
ALTER TABLE `catering_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_data`
--
ALTER TABLE `feedback_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_bookings`
--
ALTER TABLE `hall_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pooja_bookings`
--
ALTER TABLE `pooja_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catering_bookings`
--
ALTER TABLE `catering_bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback_data`
--
ALTER TABLE `feedback_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hall_bookings`
--
ALTER TABLE `hall_bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pooja_bookings`
--
ALTER TABLE `pooja_bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
