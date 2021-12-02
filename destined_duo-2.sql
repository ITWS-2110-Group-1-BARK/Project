-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2021 at 06:18 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destined_duo`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `username` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_information`
--

INSERT INTO `profile_information` (`username`, `description`, `picture`) VALUES
('doej', 'I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets', 'profile_images/default.png'),
('kadala', 'I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets', 'profile_images/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `age`, `email`) VALUES
('doej', 'Aneeshkadali_8234', 'John', 'Doe', 19, ''),
('kadala', 'Aneeshkadali_888', 'Aneesh', 'Kadali', 19, ''),
('kjohn543', 'da56d36bc13a1f53b61dbe82a9ece6b5643764c8a8e0ff8c4f26dbdaa8298bad', 'john', 'k', 19, 'kjohn@rpi.edu'),
('ruchikas', 'ruchika1234', 'Ruchika', 'Singh', 21, 'singhr7@rpi.edu'),
('someone123', '1752c49d6a57e63b78c08624584e81b71fce52f9d4d7104bd05fdcf48d3608ae', 'someone', 'new', 21, 'someone@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_interests`
--

CREATE TABLE `user_interests` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_interests`
--

INSERT INTO `user_interests` (`id`, `username`, `interest`) VALUES
(0, 'ruchikas', 'hiking'),
(1, 'doej', 'Movies'),
(2, 'kadala', 'Movies'),
(4, 'doej', 'Chess'),
(5, 'kadala', 'Chess'),
(6, 'ruchikas', 'swimming'),
(7, 'ruchikas', 'driving'),
(8, 'ruchikas', 'driving'),
(9, 'someone123', 'learning'),
(10, 'someone123', 'driving'),
(11, 'someone123', 'movies'),
(12, 'someone123', 'dog walking'),
(13, 'someone123', 'boxing'),
(14, 'kjohn543', 'reading'),
(15, 'kjohn543', 'driving');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_interests`
--
ALTER TABLE `user_interests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_interests`
--
ALTER TABLE `user_interests`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
