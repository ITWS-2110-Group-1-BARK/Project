-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 08:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destined_duo4`
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
('aakil_kadali', 'Hi my name is Aakil and I like to play video games. My favorite game is Smash Ultimate. I also like playing hockey when I get the chance', 'profile_images/default.png'),
('doej', 'I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets', 'profile_images/default.png'),
('hema_kadali', 'Hello my name is Hema Kadali and I am a student at RPI', 'profile_images/default.png'),
('kadala', 'I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets', 'profile_images/default.png'),
('mateo_lee', 'Hello my name is Mateo Lee. Can\'t wait to talk and meet you guys on social media', 'profile_images/cat.jpeg'),
('matthew_brian', 'This is Matthew Brian\'s description', 'profile_images/default.png'),
('matthew_kadali', 'Hi my name is matt! I\'m a CS and ITWS dual major at RPI.', 'profile_images/female.png'),
('matthew_smith', 'Hello my name is Matthew and I like to play hockey and baseball. I also play the piano ', 'profile_images/default.png'),
('ryan_taylor', 'This is the description for Ryan Taylor', 'profile_images/default.png'),
('test', 'This is the description that I can write for however long I want to', 'profile_images/cat.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_media`
--

CREATE TABLE `profile_media` (
  `id` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `social_media` varchar(256) NOT NULL,
  `link` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_media`
--

INSERT INTO `profile_media` (`id`, `username`, `social_media`, `link`) VALUES
(2, 'test', 'LinkedIn', 'www.linkedin.com'),
(3, 'test', 'Twitter', 'www.twitter.com'),
(4, 'test', 'Other', 'www.slack.com'),
(5, 'test', 'Instagram', 'www.instagram.com'),
(6, 'hema_kadali', 'Twitter', 'https://twitter.com/home'),
(7, 'matthew_smith', 'Instagram', 'https://www.instagram.com/'),
(8, 'matthew_smith', 'Twitter', 'https://twitter.com/home'),
(9, 'matthew_smith', 'LinkedIn', 'https://www.linkedin.com/'),
(10, 'matthew_smith', 'Other', 'https://www.meetup.com/'),
(11, 'aakil_kadali', 'Twitter', 'https://twitter.com/home'),
(12, 'aakil_kadali', 'LinkedIn', 'https://www.linkedin.com/'),
(13, 'ryan_taylor', 'Instagram', 'https://www.instagram.com/'),
(14, 'ryan_taylor', 'Twitter', 'https://twitter.com/home'),
(15, 'matthew_brian', 'Twitter', 'https://twitter.com/home'),
(16, 'matthew_brian', 'Instagram', 'https://www.instagram.com/'),
(17, 'matthew_brian', 'LinkedIn', 'https://www.linkedin.com/'),
(18, 'matthew_brian', 'Other', 'https://www.meetup.com/'),
(19, 'mateo_lee', 'Instagram', 'https://www.instagram.com/'),
(20, 'mateo_lee', 'Twitter', 'https://twitter.com'),
(21, 'mateo_lee', 'LinkedIn', 'https://www.linkedin.com/'),
(23, 'matthew_kadali', 'LinkedIn', 'www.linkedin.com'),
(24, 'matthew_kadali', 'Twitter', 'ww.w.twitter.com'),
(25, 'matthew_kadali', 'Other', 'www.slack.com');

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
('aakil_kadali', '48f6b7fc2cdd0ac191cca7d2bb81ffc7991ded12ba65a8c586d3724e5052e8e9', 'Aakil', 'Kadali', 24, 'akadali@gmail.com'),
('doej', 'Aneeshkadali_8234', 'John', 'Doe', 19, ''),
('hema_kadali', '95b73ec61b851e470d39e85b90ea2113f72dcd8c45343b43b9b14a03724c1197', 'Hema', 'Kadali', 21, 'hkadali@gmail.com'),
('kadala', 'Aneeshkadali_888', 'Aneesh', 'Kadali', 19, ''),
('kjohn543', 'da56d36bc13a1f53b61dbe82a9ece6b5643764c8a8e0ff8c4f26dbdaa8298bad', 'john', 'k', 19, 'kjohn@rpi.edu'),
('mateo_lee', '8521c335137b0ee3cf61e5d65dfc440be56e176618ab5a713cb7b98e243652ad', 'Mateo', 'Lee', 21, 'mlee@gmail.com'),
('matthew_brian', '48f6b7fc2cdd0ac191cca7d2bb81ffc7991ded12ba65a8c586d3724e5052e8e9', 'Matthew', 'Brian', 20, 'mbrian@gmail.com'),
('matthew_kadali', '48f6b7fc2cdd0ac191cca7d2bb81ffc7991ded12ba65a8c586d3724e5052e8e9', 'Matt', 'Briann', 21, 'mkadalii@gmail.com'),
('matthew_smith', '95b73ec61b851e470d39e85b90ea2113f72dcd8c45343b43b9b14a03724c1197', 'Matthew', 'Smith', 21, 'msmith12@gmail.com'),
('ruchikas', 'ruchika1234', 'Ruchika', 'Singh', 21, 'singhr7@rpi.edu'),
('ryan_taylor', '48f6b7fc2cdd0ac191cca7d2bb81ffc7991ded12ba65a8c586d3724e5052e8e9', 'Ryan', 'Taylor', 21, 'rtaylor@gmail.com'),
('someone123', '1752c49d6a57e63b78c08624584e81b71fce52f9d4d7104bd05fdcf48d3608ae', 'someone', 'new', 21, 'someone@gmail.com'),
('test', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Brianna', 'Lopez', 1, 'test@gmail.com');

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
(15, 'kjohn543', 'driving'),
(16, 'ruchikas', 'hiking'),
(17, 'test', 'camping'),
(19, 'test', 'swimming'),
(30, 'test', 'coding'),
(32, 'test', 'testing'),
(33, 'hema_kadali', 'Baseball'),
(34, 'hema_kadali', 'Sports'),
(35, 'matthew_smith', 'Baseball'),
(36, 'matthew_smith', 'Hockey'),
(37, 'matthew_smith', 'Music'),
(38, 'aakil_kadali', 'Music'),
(39, 'aakil_kadali', 'Video Games'),
(40, 'aakil_kadali', 'Hockey'),
(41, 'ryan_taylor', 'Music'),
(42, 'ryan_taylor', 'Hockey'),
(43, 'ryan_taylor', 'Chess'),
(44, 'ryan_taylor', 'Video Games'),
(45, 'mateo_lee', 'Music'),
(46, 'mateo_lee', 'Math'),
(48, 'matthew_brian', 'Music'),
(49, 'matthew_brian', 'Hockey'),
(50, 'matthew_brian', 'Basketball'),
(51, 'matthew_brian', 'Chess'),
(52, 'matthew_kadali', 'Music'),
(53, 'matthew_kadali', 'Swimming'),
(55, 'matthew_kadali', 'Soccer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `profile_media`
--
ALTER TABLE `profile_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile_media`
--
ALTER TABLE `profile_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_interests`
--
ALTER TABLE `user_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile_media`
--
ALTER TABLE `profile_media`
  ADD CONSTRAINT `profile_media_ibfk_1` FOREIGN KEY (`username`) REFERENCES `profile_information` (`username`);

--
-- Constraints for table `user_interests`
--
ALTER TABLE `user_interests`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
