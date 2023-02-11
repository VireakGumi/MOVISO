-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 07:51 AM
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
-- Database: `moviso`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `user_id`) VALUES
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movies_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `cinema_name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `released` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `production` int(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movies_id`, `venue_id`, `movie_title`, `time`, `cinema_name`, `description`, `genre`, `duration`, `released`, `country`, `production`, `trailer`, `img`, `price`) VALUES
(1, 0, 'Winnie The Pooh', '00:00:00', '', 'Nondisplaced fracture of trapezoid [smaller multangular], left wrist, subsequent encounter for fracture with routine healing', 'Comedy|Drama|Romance', '2h 30m', '2022-08-23', 'Mongolia', 0, '\"https://www.youtube.com/embed/W3E74j_xFtg\"', 'horror (most anticipated).png', 8),
(2, 0, 'Harry Portter', '00:00:00', '', 'Unspecified occupant of pick-up truck or van injured in collision with car, pick-up truck or van in traffic accident, subsequent encounter', 'Action|Crime', '1h 50m', '2022-07-18', 'Sri Lanka', 0, '\"https://www.youtube.com/embed/gHe3sul7C_E\"', 'harry potter and the sorcerer\'s stone.png', 9),
(3, 0, 'Harry Portter New', '00:00:00', '', 'Patient\'s noncompliance with renal dialysis', 'Comedy', '1h 30m', '2022-03-18', 'France', 0, '\"https://www.youtube.com/embed/Luq2aEeRoKQ\"', 'harry potter and the philosopher\'s stone.png', 10),
(4, 0, 'Avatar2', '00:00:00', '', 'Other bursitis, not elsewhere classified, other site', 'Comedy', '3h 34m', '2022-12-19', 'Benin', 0, '\"https://www.youtube.com/embed/d9MyW72ELq0\"', 'avatar.png', 11),
(5, 0, 'Avatar3', '00:00:00', '', 'Unspecified injury of other muscles, fascia and tendons at shoulder and upper arm level, left arm, initial encounter', 'Comedy', '2h 33m', '2023-01-11', 'Indonesia', 0, '\"https://www.youtube.com/embed/YXtWPVFk5TQ\"', 'avatar( the blockebuster).png', 8),
(6, 0, 'Queen\'s  Hit Music', '00:00:00', '', 'Unspecified injury of extensor muscle, fascia and tendon of right little finger at wrist and hand level', 'Comedy', '3h 12m', '2022-11-07', 'China', 0, '\"https://www.youtube.com/embed/5WsZ1iD5cpM\"', 'Queen’sHitMusicalWeWillRockYou!.jpg', 12),
(7, 0, 'Spiderman', '00:00:00', '', 'Contact with special construction vehicle in stationary use, initial encounter', 'Drama|Romance', '2h 32m', '2022-04-16', 'Brazil', 0, '\"https://www.youtube.com/embed/t06RUxPbp_c\"', 'spidermann(no way home).png', 10),
(8, 0, 'Zoombie Apocalypes', '00:00:00', '', 'Nondisplaced fracture of medial cuneiform of right foot, subsequent encounter for fracture with delayed healing', 'Documentary', '3h 55m', '2022-10-19', 'United States', 0, '\"https://www.youtube.com/embed/nsZObkD1dog\"', 'zoombi ( apocalypse).png', 8),
(9, 0, 'Train The Busan', '00:00:00', '', 'Nondisplaced comminuted fracture of shaft of left femur', 'Documentary', '2h 22m', '2022-10-27', 'China', 0, '\"https://www.youtube.com/embed/7oq5z-NosSM\"', 'zoombi (train-to-busan-1626358145).png', 9),
(10, 0, 'Gal-Gagot-as-Wonder-Woman', '00:00:00', '', 'Nondisplaced fracture of neck of unspecified talus, subsequent encounter for fracture with delayed healing', 'Action|Crime', '3h 55m', '2023-01-08', 'Syria', 0, '\"https://www.youtube.com/embed/pJCgeOAKXyg\"', 'Gal-Gagot-as-Wonder-Woman.png', 10),
(11, 11, 'Star Trek: Picard ', '00:00:00', '', 'Wonder Woman - No Man\'s Land: When Steve Trevor (Chris Pine) tells Diana (Gal Gadot) that it\'s impossible to cross no man\'s land, she proves him wrong.', 'action', '1h ', '2023-01-02', 'khmer', 123, '\"https://www.youtube.com/embed/KMyQkazS1hA\"', '00.jpg', 11),
(12, 12, '20th Century Girl', '00:00:00', '', 'A teen girl has her eyes set on a boy for her lovesick best friend.', 'Romance', '1h 59m', '2022-10-06', 'Korean', 0, 'https://www.youtube.com/embed/KFS4_qevE7M', 'MV5BZmUzZTE4MjYtY2E5ZC00NWUxLTk3MmItMTE1OGU4YTA4ZDgwXkEyXkFqcGdeQXVyMTA3MTI2ODc5._V1_.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `credit_card_number` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` int(16) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `address`, `credit_card_number`, `password`, `phone_number`, `role`) VALUES
(3, 'Rady Y', 'rady@gmail.com', '', '', '$2y$10$T.rfHpo8m5i0IQyEqV6oVeHr.PQZDW31nZ8JlLm7w..klNyTBhtda', 987654234, 1),
(5, 'Chamreun Vorn', 'chamreun@gmail.com', '', '', '$2y$10$8IcFfajTEs0xM22dnNLtoerZHR59OMA8s.w/otC5FyjeF91EFM1My', 719126481, 1),
(6, 'Darath PUM', 'darathpum@gmail.com', '', '', '$2y$10$1isW9S/4NtKza3GYoN08ou52USy8OEbISphmNlHW8MZoAwFlEkZZS', 719126481, 1),
(8, 'Phearom Chea', 'phearom@gmail.com', '', '', '$2y$10$SxpNRv5AvNDtdTjqO6d.7.ClW6HyhHgnHZEldC1ZRmmnAySDyb/GO', 2147483647, 1),
(9, 'Vireak Roeun', 'vireak@gmail.com', '', '', '$2y$10$F1PtdnT59RTRsXPBLHfXy.eLi6kxd.zCdLhRF/zo6IQutDIIVQ89C', 11629387, 1),
(10, 'Vireak Roeun', 'virak@gmail.com', '', '', '$2y$10$hOBVZnJH4GmMnavQCdGD4eW30DKJKLnUMp.BG8DgH23xNTQPbKQM6', 719126481, 1),
(11, 'Dara PUM', 'dara@gmail.com', '', '', '$2y$10$rOQ3yvAOnMKvtATRZ.7SH.TfdR4kXZm/pMUgb5OZ7647wdZTV0HY.', 719126481, 1),
(12, 'Chamreun Vorn', 'chamreunvorn@gmail.com', '', '', '$2y$10$7gf1ZLxVcbY9CAcdmrnIQuOzINMA09Lvxx8Pn0FJOma/mybZNpwTC', 45678765, 1),
(13, 'Doeur Diet', 'doeur@gmail.com', '', '', '$2y$10$uAu7GvTDe6jItYBmQxCYRuVsCNEhwZD2dneWt5FQBXkgGyiGxgOw.', 719126481, 1),
(14, 'Nit Noem', 'nit@gmail.com', '', '', '$2y$10$XChVRjS5qH6LhFw4iLrB0.4rOxB4wvREo/sSzdFzvVUoK3uX.IaKW', 987654347, 1),
(15, 'Kayuy Kh', 'kayuy@gmail.com', '', '', '$2y$10$/IW1PsjSbUiOs09k6zRuDO0o5M7X2WNNCDPwhTWaob/ACO.ovaCWC', 11629387, 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `name`, `address`) VALUES
(1, 'Legend Cinemas, Midtown]', '[រាជធានី, Street 2004, Phnom Penh 120802]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movies_id`),
  ADD KEY `venue_id` (`venue_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
