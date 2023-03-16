-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 06:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `user_id`) VALUES
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 23),
(39, 24);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movies_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `number_ticket` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `descriptions` varchar(250) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `released` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `production` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `prices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movies_id`, `venue_id`, `movie_title`, `number_ticket`, `date_time`, `descriptions`, `genre`, `duration`, `released`, `country`, `production`, `trailer`, `img`, `prices`) VALUES
(8, 2, 'Zoombie Apocalypes', 12, '2023-06-14 07:37:28', 'Nondisplaced fracture of medial cuneiform of right foot, subsequent encounter for fracture with delayed healing', 'Documentary', '3h 55m', '2022-10-19', 'United States', '0', 'https://www.youtube.com/embed/nsZObkD1dog', 'zoombi ( apocalypse).png', 8),
(9, 3, 'Train The Busan', 12, '2023-06-14 07:37:28', 'Nondisplaced comminuted fracture of shaft of left femur', 'Documentary', '2h 22m', '2022-10-27', 'China', '0', 'https://www.youtube.com/embed/7oq5z-NosSM', 'zoombi (train-to-busan-1626358145).png', 9),
(10, 4, 'Gal-Gagot-as-Wonder-Woman', 12, '2023-06-14 07:37:28', 'Nondisplaced fracture of neck of unspecified talus, subsequent encounter for fracture with delayed healing', 'Action|Crime', '3h 55m', '2023-01-08', 'Syria', '0', 'https://www.youtube.com/embed/pJCgeOAKXyg', 'Gal-Gagot-as-Wonder-Woman.png', 10),
(11, 11, 'Star Trek: Picard ', 12, '2023-06-14 07:37:28', 'Wonder Woman - No Man\'s Land: When Steve Trevor (Chris Pine) tells Diana (Gal Gadot) that it\'s impossible to cross no man\'s land, she proves him wrong.', 'action', '1h ', '2023-01-02', 'khmer', '123', 'https://www.youtube.com/embed/KMyQkazS1hA', '00.jpg', 11),
(12, 12, '20th Century Girl', 31, '2023-06-14 07:37:28', 'A teen girl has her eyes set on a boy for her lovesick best friend.', 'Romance', '1h 59m', '2022-10-06', 'Korean', '0', 'https://www.youtube.com/embed/KFS4_qevE7M', 'MV5BZmUzZTE4MjYtY2E5ZC00NWUxLTk3MmItMTE1OGU4YTA4ZDgwXkEyXkFqcGdeQXVyMTA3MTI2ODc5._V1_.jpg', 13),
(14, 12, 'Avatar', 12, '2023-03-09 14:19:00', 'It is set in the mid-22nd century, when humans are colonizing Pandora, a lush habitable moon of a gas giant in the Alpha Centauri star system, in order to mine the valuable mineral unobtanium.', 'camdy', '1h 20min', '2023-03-10', 'USA', '0', 'https://www.youtube.com/embed/d9MyW72ELq0', 'darathavartar.jpg', 10),
(15, 12, 'fighting', 35, '2023-03-10 14:49:00', 'Plot. Jung_E portrays a desolated Earth in the 22nd century that is no longer habitable due to climate change, and humans are forced to live in man-made shelters built in space.', 'factory', '2h 50m', '2023-03-01', 'Korea', 'vireak', 'https://www.youtube.com/embed/LCxnmfdxJ6s', 'SharperFilmPoster.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gate` varchar(30) NOT NULL,
  `row` varchar(1) NOT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `movies_id`, `user_id`, `gate`, `row`, `seat`) VALUES
(32, 15, 4, 'B', 'D', 4),
(33, 15, 4, 'B', 'D', 5);

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
  `date_of_birth` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` int(16) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `address`, `credit_card_number`, `date_of_birth`, `password`, `phone_number`, `role`) VALUES
(3, 'Darath PUM', 'darathpum@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-02-06', '$2y$10$V.9uNqm6yUYnxv5tJcTpVeztGyPPeBGIiNY3MLUCdTkzBLNnRDce.', 719126481, 0),
(4, 'Rady Y', 'rady@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-02-06', '$2y$10$EO6lVOcoWTWqXmaMNK1e2.nVprUIv96FVB3tg4bZoJUCUoqrc0gqa', 987654234, 1),
(5, 'Chamreun Vorn', 'chamreun@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-02-01', '$2y$10$NLo6AfmAD6uLxYWKABph.OXF7180jb/4gne8A9ytyabMKIxD8V8TK', 719126481, 1),
(6, 'Vibol Phoung', 'vibol@gmail.com', 'Kampong Cham', '1234 5678 1234 5678', '2011-02-02', '$2y$10$cDdl.3tuvmMa.LPxfqFr5u.i50SOxrmLUY8iUiCLK/YyeZW/.aSGi', 456787654, 1),
(7, 'Sreyka Thor', 'sreyka@gmail.com', 'Siem Reap', '1234 5678 1234 5678', '2011-02-02', '$2y$10$C2dsFUu7HJyez380.kc7AOfvRZ.9ofd67aEWOlobtJAgeCiEaRRr.', 719126481, 1),
(8, 'Nit Noem', 'nit@gmail.com', 'Banteay Meanchey', '1234 5678 1234 5678', '2011-01-30', '$2y$10$xhyaPqyS5XQLBfDfB44eyuQZAsxwKvs9yhOze3lXpIkClWKs3l6Di', 564534323, 1),
(10, 'Rien Leam', 'rien@gmail.com', 'Siem Reap', '1234 5678 1234 5678', '2011-01-31', '$2y$10$elLB.Rt1nVe3qbdvNHCNnO9bBdfkgqFXhKHjDdiKc1m7xtLMsGTiK', 719126481, 1),
(11, 'Chamnan Bet', 'chamnan@gmail.com', 'Banteay Meanchey', '1234 5678 1234 5678', '2011-02-03', '$2y$10$etSJoHBzwpg.xdcjVqUWpeovhwdBZ2XUQYA.vanfitOTH.eYW1Ncq', 45678765, 1),
(12, 'Hey Rem', 'hey@gamil.com', 'Kep', '1234 5678 1234 5678', '2011-02-02', '$2y$10$sH0zlrDZ1vRy5SlU8cUinepFoMlOXGZwKLIZWlnFAOu949Zw7v8ny', 719126481, 1),
(13, 'Net Se', 'net@gmail.com', 'Prey Veng', '1234 5678 1234 5678', '2011-02-02', '$2y$10$VU4vbg4k3lUfdXeFkQr66.u8fJ3sIQq5OmVsi86qva11YO9NFYeKe', 719126481, 1),
(14, 'Chectra Hong', 'chectra@gmail.com', 'Ta Keo', '1234 5678 1234 5678', '2011-02-02', '$2y$10$tj0iV1eK/UZeg/Vko7c2aO/Ezh/OXbgzsp8pdDyF6J/OviwON0Eye', 719126481, 0),
(15, 'Doeur Diet', 'doeur@gmail.com', 'Siem Reap', '1234 5678 1234 5678', '2011-02-04', '$2y$10$v91Q1nT/pkgwQGpHd4zj5e6/Npnww7zuZzS3UQHTbF3A9ftkxsVqi', 719126481, 1),
(16, 'Sovanna Hun ', 'sovana@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-02-04', '$2y$10$gK.iwQbw5RT6V0B4eQorbegfMp94mLYCO0CmNtE2P8WJPInygwA8.', 719126481, 1),
(17, 'Love Ly', 'love@gmail.com', 'Siem Reap', '1234 5678 1234 5678', '2011-01-31', '$2y$10$DcM94tRzIot2HMYrrBoO5O5NN8yh6g5MYwEGJR.vi5vK3oTVETiSO', 45678765, 1),
(18, 'Kiss One ', 'kiss@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-02-02', '$2y$10$EinvJcprJYOWa3Kl2/ZT9./d5lu.Q69ek2WiUSuKv2XyUSLJ2OK1q', 719126481, 1),
(19, 'Nita Hong', 'nita@gmail.com', 'Phnom Penh', '1234 5678 1234 5678', '2011-02-02', '$2y$10$bIFQSuBBZTqYBVlMOfXGNOdP8ms.hRIvN4BWcRlnkPukicUrqYwGC', 45678765, 1),
(20, 'Darath Pum', 'darath@gmail.com', 'Kampong Chhnang', '1234 5678 1234 5678', '2011-01-31', '$2y$10$1e5Xtz8vvfp5lALenc8WEeTLHWxnsAqh/cgQPYt1X4W5lDSgU0LGy', 718126481, 1),
(21, 'Navy Rorn', 'navyrorn@student.passerellesnumeriques.orgf', 'Prey Veng', '1111 1111 1111 1111', '2011-02-01', '$2y$10$MaAdRrumsKu2z9kaSq9vW.914ol4z0eMhOnKniWpy2Qx3KXQEP7AK', 718126481, 1),
(22, 'Jing ja', 'navy.rorn@student.passerellesnumeriques.org', 'Prey Veng', '1111 1111 1111 1111', '2011-02-10', '$2y$10$8CvgV8GunfDjvmtbGg4pKePDE7.uz3Fdkz9YGlfFVTpZjlxeW9wzi', 718126481, 1),
(23, 'Vireak Roeun', 'vireak@gmail.com', 'adfassdfsdfsadfasdf', '1111 1111 1111 1111', '2010-05-19', '$2y$10$gPYfei971hm7Kz7xCeDDiOY6VWmdfxcEg4p.Uc4UiB8GPCoou3Aue', 11629387, 1),
(24, 'D Makara', 'bunmakara.dok@passerellesnumeriques.org', 'phnom penh', '1111 1111 1111 1111', '1984-01-01', '$2y$10$.9Cv9O.cJ9u1JWSpofS1MOeeC8jWMStJPqdldlbzA6urSRv2IJW2.', 85690000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL,
  `cinema_name` varchar(250) NOT NULL,
  `cinema_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `cinema_name`, `cinema_address`) VALUES
(1, 'Legend Cinemas, Midtown', '[រាជធានី, Street 2004, Phnom Penh 120802]'),
(2, 'Legand', 'Phnom Penh'),
(3, 'Legand', 'Phnom Penh'),
(4, 'Legand', 'Phnom Penh'),
(5, 'Legand', 'Phnom Penh'),
(6, 'Legand', 'Phnom Penh'),
(7, 'Legand', 'Phnom Penh'),
(8, 'Legand', 'Phnom Penh'),
(9, 'Legand', 'Phnom Penh'),
(10, 'Legand', 'Phnom Penh'),
(11, 'Legand', 'Phnom Penh'),
(12, 'Legand', 'Phnom Penh'),
(13, 'Legand', 'Phnom Penh'),
(14, 'Legand', 'Phnom Penh'),
(15, 'Legand', 'Phnom Penh'),
(16, 'Legand', 'Phnom Penh'),
(17, 'Legand', 'Phnom Penh'),
(18, 'Legand', 'Phnom Penh'),
(19, 'Legand', 'Phnom Penh'),
(20, 'Legand', 'Phnom Penh'),
(21, 'Legand', 'Phnom Penh'),
(22, 'Legand', 'Phnom Penh'),
(23, 'Legand', 'Phnom Penh'),
(24, 'Legand', 'Phnom Penh'),
(25, 'Legand', 'Phnom Penh'),
(26, 'Legand', 'Phnom Penh'),
(27, 'Legand', 'Phnom Penh'),
(28, 'Legand', 'Phnom Penh'),
(29, 'Legand', 'Phnom Penh'),
(30, 'Legand', 'Phnom Penh'),
(31, 'Legand', 'Phnom Penh'),
(32, 'Legand', 'Kampong Chhnang'),
(33, 'Legand', 'Kampong Chhnang'),
(34, 'Legand', 'Kampong Chhnang'),
(35, 'Legand', 'Kampong Chhnang'),
(36, 'Legand', 'Kampong Chhnang'),
(37, 'Legand', 'Kampong Chhnang'),
(38, 'Legand', 'Kampong Chhnang'),
(39, 'Legand', 'Kampong Chhnang'),
(40, 'Legand', 'Phnom Penh'),
(41, 'Legand', 'Phnom Penh'),
(42, 'Legand', 'Phnom Penh'),
(43, 'Legand', 'Phnom Penh'),
(44, 'Legand', 'Kampong Chhnang'),
(45, 'Phnom Penh', 'Phnom Penh');

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
  ADD KEY `customer_id` (`user_id`),
  ADD KEY `movie_id` (`movies_id`);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
